<?php


/**
 * Base class that represents a query for the 'bitacora_acceso' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Tue Feb 21 23:33:57 2017
 *
 * @method BitacoraAccesoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method BitacoraAccesoQuery orderByCorreoUsuario($order = Criteria::ASC) Order by the correo_usuario column
 * @method BitacoraAccesoQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method BitacoraAccesoQuery orderByRespuesta($order = Criteria::ASC) Order by the respuesta column
 *
 * @method BitacoraAccesoQuery groupById() Group by the id column
 * @method BitacoraAccesoQuery groupByCorreoUsuario() Group by the correo_usuario column
 * @method BitacoraAccesoQuery groupByCreatedAt() Group by the created_at column
 * @method BitacoraAccesoQuery groupByRespuesta() Group by the respuesta column
 *
 * @method BitacoraAccesoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method BitacoraAccesoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method BitacoraAccesoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method BitacoraAcceso findOne(PropelPDO $con = null) Return the first BitacoraAcceso matching the query
 * @method BitacoraAcceso findOneOrCreate(PropelPDO $con = null) Return the first BitacoraAcceso matching the query, or a new BitacoraAcceso object populated from the query conditions when no match is found
 *
 * @method BitacoraAcceso findOneById(int $id) Return the first BitacoraAcceso filtered by the id column
 * @method BitacoraAcceso findOneByCorreoUsuario(string $correo_usuario) Return the first BitacoraAcceso filtered by the correo_usuario column
 * @method BitacoraAcceso findOneByCreatedAt(string $created_at) Return the first BitacoraAcceso filtered by the created_at column
 * @method BitacoraAcceso findOneByRespuesta(string $respuesta) Return the first BitacoraAcceso filtered by the respuesta column
 *
 * @method array findById(int $id) Return BitacoraAcceso objects filtered by the id column
 * @method array findByCorreoUsuario(string $correo_usuario) Return BitacoraAcceso objects filtered by the correo_usuario column
 * @method array findByCreatedAt(string $created_at) Return BitacoraAcceso objects filtered by the created_at column
 * @method array findByRespuesta(string $respuesta) Return BitacoraAcceso objects filtered by the respuesta column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseBitacoraAccesoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseBitacoraAccesoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'BitacoraAcceso', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new BitacoraAccesoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     BitacoraAccesoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return BitacoraAccesoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof BitacoraAccesoQuery) {
            return $criteria;
        }
        $query = new BitacoraAccesoQuery();
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
     * @return   BitacoraAcceso|BitacoraAcceso[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = BitacoraAccesoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(BitacoraAccesoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   BitacoraAcceso A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `CORREO_USUARIO`, `CREATED_AT`, `RESPUESTA` FROM `bitacora_acceso` WHERE `ID` = :p0';
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
            $obj = new BitacoraAcceso();
            $obj->hydrate($row);
            BitacoraAccesoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return BitacoraAcceso|BitacoraAcceso[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|BitacoraAcceso[]|mixed the list of results, formatted by the current formatter
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
     * @return BitacoraAccesoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(BitacoraAccesoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return BitacoraAccesoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(BitacoraAccesoPeer::ID, $keys, Criteria::IN);
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
     * @return BitacoraAccesoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(BitacoraAccesoPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the correo_usuario column
     *
     * Example usage:
     * <code>
     * $query->filterByCorreoUsuario('fooValue');   // WHERE correo_usuario = 'fooValue'
     * $query->filterByCorreoUsuario('%fooValue%'); // WHERE correo_usuario LIKE '%fooValue%'
     * </code>
     *
     * @param     string $correoUsuario The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BitacoraAccesoQuery The current query, for fluid interface
     */
    public function filterByCorreoUsuario($correoUsuario = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($correoUsuario)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $correoUsuario)) {
                $correoUsuario = str_replace('*', '%', $correoUsuario);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BitacoraAccesoPeer::CORREO_USUARIO, $correoUsuario, $comparison);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday')); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BitacoraAccesoQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(BitacoraAccesoPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(BitacoraAccesoPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(BitacoraAccesoPeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the respuesta column
     *
     * Example usage:
     * <code>
     * $query->filterByRespuesta('fooValue');   // WHERE respuesta = 'fooValue'
     * $query->filterByRespuesta('%fooValue%'); // WHERE respuesta LIKE '%fooValue%'
     * </code>
     *
     * @param     string $respuesta The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return BitacoraAccesoQuery The current query, for fluid interface
     */
    public function filterByRespuesta($respuesta = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($respuesta)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $respuesta)) {
                $respuesta = str_replace('*', '%', $respuesta);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(BitacoraAccesoPeer::RESPUESTA, $respuesta, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   BitacoraAcceso $bitacoraAcceso Object to remove from the list of results
     *
     * @return BitacoraAccesoQuery The current query, for fluid interface
     */
    public function prune($bitacoraAcceso = null)
    {
        if ($bitacoraAcceso) {
            $this->addUsingAlias(BitacoraAccesoPeer::ID, $bitacoraAcceso->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
