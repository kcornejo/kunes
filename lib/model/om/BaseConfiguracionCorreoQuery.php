<?php


/**
 * Base class that represents a query for the 'configuracion_correo' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Sun Dec 11 15:55:58 2016
 *
 * @method ConfiguracionCorreoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ConfiguracionCorreoQuery orderByHost($order = Criteria::ASC) Order by the host column
 * @method ConfiguracionCorreoQuery orderByPuerto($order = Criteria::ASC) Order by the puerto column
 * @method ConfiguracionCorreoQuery orderByEncriptacion($order = Criteria::ASC) Order by the encriptacion column
 * @method ConfiguracionCorreoQuery orderByUsuario($order = Criteria::ASC) Order by the usuario column
 * @method ConfiguracionCorreoQuery orderByClave($order = Criteria::ASC) Order by the clave column
 *
 * @method ConfiguracionCorreoQuery groupById() Group by the id column
 * @method ConfiguracionCorreoQuery groupByHost() Group by the host column
 * @method ConfiguracionCorreoQuery groupByPuerto() Group by the puerto column
 * @method ConfiguracionCorreoQuery groupByEncriptacion() Group by the encriptacion column
 * @method ConfiguracionCorreoQuery groupByUsuario() Group by the usuario column
 * @method ConfiguracionCorreoQuery groupByClave() Group by the clave column
 *
 * @method ConfiguracionCorreoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ConfiguracionCorreoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ConfiguracionCorreoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ConfiguracionCorreo findOne(PropelPDO $con = null) Return the first ConfiguracionCorreo matching the query
 * @method ConfiguracionCorreo findOneOrCreate(PropelPDO $con = null) Return the first ConfiguracionCorreo matching the query, or a new ConfiguracionCorreo object populated from the query conditions when no match is found
 *
 * @method ConfiguracionCorreo findOneById(int $id) Return the first ConfiguracionCorreo filtered by the id column
 * @method ConfiguracionCorreo findOneByHost(string $host) Return the first ConfiguracionCorreo filtered by the host column
 * @method ConfiguracionCorreo findOneByPuerto(string $puerto) Return the first ConfiguracionCorreo filtered by the puerto column
 * @method ConfiguracionCorreo findOneByEncriptacion(string $encriptacion) Return the first ConfiguracionCorreo filtered by the encriptacion column
 * @method ConfiguracionCorreo findOneByUsuario(string $usuario) Return the first ConfiguracionCorreo filtered by the usuario column
 * @method ConfiguracionCorreo findOneByClave(string $clave) Return the first ConfiguracionCorreo filtered by the clave column
 *
 * @method array findById(int $id) Return ConfiguracionCorreo objects filtered by the id column
 * @method array findByHost(string $host) Return ConfiguracionCorreo objects filtered by the host column
 * @method array findByPuerto(string $puerto) Return ConfiguracionCorreo objects filtered by the puerto column
 * @method array findByEncriptacion(string $encriptacion) Return ConfiguracionCorreo objects filtered by the encriptacion column
 * @method array findByUsuario(string $usuario) Return ConfiguracionCorreo objects filtered by the usuario column
 * @method array findByClave(string $clave) Return ConfiguracionCorreo objects filtered by the clave column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseConfiguracionCorreoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseConfiguracionCorreoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'ConfiguracionCorreo', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConfiguracionCorreoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ConfiguracionCorreoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ConfiguracionCorreoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConfiguracionCorreoQuery) {
            return $criteria;
        }
        $query = new ConfiguracionCorreoQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ConfiguracionCorreo|ConfiguracionCorreo[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ConfiguracionCorreoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ConfiguracionCorreoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return   ConfiguracionCorreo A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `HOST`, `PUERTO`, `ENCRIPTACION`, `USUARIO`, `CLAVE` FROM `configuracion_correo` WHERE `ID` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ConfiguracionCorreo();
            $obj->hydrate($row);
            ConfiguracionCorreoPeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return ConfiguracionCorreo|ConfiguracionCorreo[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ConfiguracionCorreo[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ConfiguracionCorreoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ConfiguracionCorreoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ConfiguracionCorreoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ConfiguracionCorreoPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id > 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionCorreoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ConfiguracionCorreoPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the host column
     *
     * Example usage:
     * <code>
     * $query->filterByHost('fooValue');   // WHERE host = 'fooValue'
     * $query->filterByHost('%fooValue%'); // WHERE host LIKE '%fooValue%'
     * </code>
     *
     * @param     string $host The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionCorreoQuery The current query, for fluid interface
     */
    public function filterByHost($host = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($host)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $host)) {
                $host = str_replace('*', '%', $host);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfiguracionCorreoPeer::HOST, $host, $comparison);
    }

    /**
     * Filter the query on the puerto column
     *
     * Example usage:
     * <code>
     * $query->filterByPuerto('fooValue');   // WHERE puerto = 'fooValue'
     * $query->filterByPuerto('%fooValue%'); // WHERE puerto LIKE '%fooValue%'
     * </code>
     *
     * @param     string $puerto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionCorreoQuery The current query, for fluid interface
     */
    public function filterByPuerto($puerto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($puerto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $puerto)) {
                $puerto = str_replace('*', '%', $puerto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfiguracionCorreoPeer::PUERTO, $puerto, $comparison);
    }

    /**
     * Filter the query on the encriptacion column
     *
     * Example usage:
     * <code>
     * $query->filterByEncriptacion('fooValue');   // WHERE encriptacion = 'fooValue'
     * $query->filterByEncriptacion('%fooValue%'); // WHERE encriptacion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encriptacion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionCorreoQuery The current query, for fluid interface
     */
    public function filterByEncriptacion($encriptacion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encriptacion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $encriptacion)) {
                $encriptacion = str_replace('*', '%', $encriptacion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfiguracionCorreoPeer::ENCRIPTACION, $encriptacion, $comparison);
    }

    /**
     * Filter the query on the usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuario('fooValue');   // WHERE usuario = 'fooValue'
     * $query->filterByUsuario('%fooValue%'); // WHERE usuario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usuario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionCorreoQuery The current query, for fluid interface
     */
    public function filterByUsuario($usuario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usuario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usuario)) {
                $usuario = str_replace('*', '%', $usuario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfiguracionCorreoPeer::USUARIO, $usuario, $comparison);
    }

    /**
     * Filter the query on the clave column
     *
     * Example usage:
     * <code>
     * $query->filterByClave('fooValue');   // WHERE clave = 'fooValue'
     * $query->filterByClave('%fooValue%'); // WHERE clave LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clave The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ConfiguracionCorreoQuery The current query, for fluid interface
     */
    public function filterByClave($clave = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clave)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clave)) {
                $clave = str_replace('*', '%', $clave);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ConfiguracionCorreoPeer::CLAVE, $clave, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ConfiguracionCorreo $configuracionCorreo Object to remove from the list of results
     *
     * @return ConfiguracionCorreoQuery The current query, for fluid interface
     */
    public function prune($configuracionCorreo = null)
    {
        if ($configuracionCorreo) {
            $this->addUsingAlias(ConfiguracionCorreoPeer::ID, $configuracionCorreo->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
