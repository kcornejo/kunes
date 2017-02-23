<?php


/**
 * Base class that represents a query for the 'mensaje' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Thu Feb 23 06:33:16 2017
 *
 * @method MensajeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method MensajeQuery orderByUsuarioEmisor($order = Criteria::ASC) Order by the usuario_emisor column
 * @method MensajeQuery orderByUsuarioReceptor($order = Criteria::ASC) Order by the usuario_receptor column
 * @method MensajeQuery orderByContenido($order = Criteria::ASC) Order by the contenido column
 * @method MensajeQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method MensajeQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method MensajeQuery orderByVisto($order = Criteria::ASC) Order by the visto column
 * @method MensajeQuery orderByMensajeCabeceraId($order = Criteria::ASC) Order by the mensaje_cabecera_id column
 *
 * @method MensajeQuery groupById() Group by the id column
 * @method MensajeQuery groupByUsuarioEmisor() Group by the usuario_emisor column
 * @method MensajeQuery groupByUsuarioReceptor() Group by the usuario_receptor column
 * @method MensajeQuery groupByContenido() Group by the contenido column
 * @method MensajeQuery groupByCreatedAt() Group by the created_at column
 * @method MensajeQuery groupByUpdatedAt() Group by the updated_at column
 * @method MensajeQuery groupByVisto() Group by the visto column
 * @method MensajeQuery groupByMensajeCabeceraId() Group by the mensaje_cabecera_id column
 *
 * @method MensajeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MensajeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MensajeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MensajeQuery leftJoinUsuarioRelatedByUsuarioEmisor($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByUsuarioEmisor relation
 * @method MensajeQuery rightJoinUsuarioRelatedByUsuarioEmisor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByUsuarioEmisor relation
 * @method MensajeQuery innerJoinUsuarioRelatedByUsuarioEmisor($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByUsuarioEmisor relation
 *
 * @method MensajeQuery leftJoinUsuarioRelatedByUsuarioReceptor($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByUsuarioReceptor relation
 * @method MensajeQuery rightJoinUsuarioRelatedByUsuarioReceptor($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByUsuarioReceptor relation
 * @method MensajeQuery innerJoinUsuarioRelatedByUsuarioReceptor($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByUsuarioReceptor relation
 *
 * @method MensajeQuery leftJoinMensajeCabecera($relationAlias = null) Adds a LEFT JOIN clause to the query using the MensajeCabecera relation
 * @method MensajeQuery rightJoinMensajeCabecera($relationAlias = null) Adds a RIGHT JOIN clause to the query using the MensajeCabecera relation
 * @method MensajeQuery innerJoinMensajeCabecera($relationAlias = null) Adds a INNER JOIN clause to the query using the MensajeCabecera relation
 *
 * @method Mensaje findOne(PropelPDO $con = null) Return the first Mensaje matching the query
 * @method Mensaje findOneOrCreate(PropelPDO $con = null) Return the first Mensaje matching the query, or a new Mensaje object populated from the query conditions when no match is found
 *
 * @method Mensaje findOneById(int $id) Return the first Mensaje filtered by the id column
 * @method Mensaje findOneByUsuarioEmisor(int $usuario_emisor) Return the first Mensaje filtered by the usuario_emisor column
 * @method Mensaje findOneByUsuarioReceptor(int $usuario_receptor) Return the first Mensaje filtered by the usuario_receptor column
 * @method Mensaje findOneByContenido(string $contenido) Return the first Mensaje filtered by the contenido column
 * @method Mensaje findOneByCreatedAt(string $created_at) Return the first Mensaje filtered by the created_at column
 * @method Mensaje findOneByUpdatedAt(string $updated_at) Return the first Mensaje filtered by the updated_at column
 * @method Mensaje findOneByVisto(boolean $visto) Return the first Mensaje filtered by the visto column
 * @method Mensaje findOneByMensajeCabeceraId(int $mensaje_cabecera_id) Return the first Mensaje filtered by the mensaje_cabecera_id column
 *
 * @method array findById(int $id) Return Mensaje objects filtered by the id column
 * @method array findByUsuarioEmisor(int $usuario_emisor) Return Mensaje objects filtered by the usuario_emisor column
 * @method array findByUsuarioReceptor(int $usuario_receptor) Return Mensaje objects filtered by the usuario_receptor column
 * @method array findByContenido(string $contenido) Return Mensaje objects filtered by the contenido column
 * @method array findByCreatedAt(string $created_at) Return Mensaje objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Mensaje objects filtered by the updated_at column
 * @method array findByVisto(boolean $visto) Return Mensaje objects filtered by the visto column
 * @method array findByMensajeCabeceraId(int $mensaje_cabecera_id) Return Mensaje objects filtered by the mensaje_cabecera_id column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMensajeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMensajeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Mensaje', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MensajeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     MensajeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MensajeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MensajeQuery) {
            return $criteria;
        }
        $query = new MensajeQuery();
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
     * @return   Mensaje|Mensaje[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MensajePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MensajePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Mensaje A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `USUARIO_EMISOR`, `USUARIO_RECEPTOR`, `CONTENIDO`, `CREATED_AT`, `UPDATED_AT`, `VISTO`, `MENSAJE_CABECERA_ID` FROM `mensaje` WHERE `ID` = :p0';
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
            $obj = new Mensaje();
            $obj->hydrate($row);
            MensajePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Mensaje|Mensaje[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Mensaje[]|mixed the list of results, formatted by the current formatter
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
     * @return MensajeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MensajePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MensajePeer::ID, $keys, Criteria::IN);
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
     * @return MensajeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(MensajePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the usuario_emisor column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioEmisor(1234); // WHERE usuario_emisor = 1234
     * $query->filterByUsuarioEmisor(array(12, 34)); // WHERE usuario_emisor IN (12, 34)
     * $query->filterByUsuarioEmisor(array('min' => 12)); // WHERE usuario_emisor > 12
     * </code>
     *
     * @see       filterByUsuarioRelatedByUsuarioEmisor()
     *
     * @param     mixed $usuarioEmisor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function filterByUsuarioEmisor($usuarioEmisor = null, $comparison = null)
    {
        if (is_array($usuarioEmisor)) {
            $useMinMax = false;
            if (isset($usuarioEmisor['min'])) {
                $this->addUsingAlias(MensajePeer::USUARIO_EMISOR, $usuarioEmisor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioEmisor['max'])) {
                $this->addUsingAlias(MensajePeer::USUARIO_EMISOR, $usuarioEmisor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MensajePeer::USUARIO_EMISOR, $usuarioEmisor, $comparison);
    }

    /**
     * Filter the query on the usuario_receptor column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioReceptor(1234); // WHERE usuario_receptor = 1234
     * $query->filterByUsuarioReceptor(array(12, 34)); // WHERE usuario_receptor IN (12, 34)
     * $query->filterByUsuarioReceptor(array('min' => 12)); // WHERE usuario_receptor > 12
     * </code>
     *
     * @see       filterByUsuarioRelatedByUsuarioReceptor()
     *
     * @param     mixed $usuarioReceptor The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function filterByUsuarioReceptor($usuarioReceptor = null, $comparison = null)
    {
        if (is_array($usuarioReceptor)) {
            $useMinMax = false;
            if (isset($usuarioReceptor['min'])) {
                $this->addUsingAlias(MensajePeer::USUARIO_RECEPTOR, $usuarioReceptor['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioReceptor['max'])) {
                $this->addUsingAlias(MensajePeer::USUARIO_RECEPTOR, $usuarioReceptor['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MensajePeer::USUARIO_RECEPTOR, $usuarioReceptor, $comparison);
    }

    /**
     * Filter the query on the contenido column
     *
     * Example usage:
     * <code>
     * $query->filterByContenido('fooValue');   // WHERE contenido = 'fooValue'
     * $query->filterByContenido('%fooValue%'); // WHERE contenido LIKE '%fooValue%'
     * </code>
     *
     * @param     string $contenido The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function filterByContenido($contenido = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($contenido)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $contenido)) {
                $contenido = str_replace('*', '%', $contenido);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(MensajePeer::CONTENIDO, $contenido, $comparison);
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
     * @return MensajeQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(MensajePeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(MensajePeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MensajePeer::CREATED_AT, $createdAt, $comparison);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday')); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(MensajePeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(MensajePeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MensajePeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the visto column
     *
     * Example usage:
     * <code>
     * $query->filterByVisto(true); // WHERE visto = true
     * $query->filterByVisto('yes'); // WHERE visto = true
     * </code>
     *
     * @param     boolean|string $visto The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function filterByVisto($visto = null, $comparison = null)
    {
        if (is_string($visto)) {
            $visto = in_array(strtolower($visto), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(MensajePeer::VISTO, $visto, $comparison);
    }

    /**
     * Filter the query on the mensaje_cabecera_id column
     *
     * Example usage:
     * <code>
     * $query->filterByMensajeCabeceraId(1234); // WHERE mensaje_cabecera_id = 1234
     * $query->filterByMensajeCabeceraId(array(12, 34)); // WHERE mensaje_cabecera_id IN (12, 34)
     * $query->filterByMensajeCabeceraId(array('min' => 12)); // WHERE mensaje_cabecera_id > 12
     * </code>
     *
     * @see       filterByMensajeCabecera()
     *
     * @param     mixed $mensajeCabeceraId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function filterByMensajeCabeceraId($mensajeCabeceraId = null, $comparison = null)
    {
        if (is_array($mensajeCabeceraId)) {
            $useMinMax = false;
            if (isset($mensajeCabeceraId['min'])) {
                $this->addUsingAlias(MensajePeer::MENSAJE_CABECERA_ID, $mensajeCabeceraId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mensajeCabeceraId['max'])) {
                $this->addUsingAlias(MensajePeer::MENSAJE_CABECERA_ID, $mensajeCabeceraId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MensajePeer::MENSAJE_CABECERA_ID, $mensajeCabeceraId, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MensajeQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByUsuarioEmisor($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(MensajePeer::USUARIO_EMISOR, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MensajePeer::USUARIO_EMISOR, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByUsuarioEmisor() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByUsuarioEmisor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByUsuarioEmisor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByUsuarioEmisor');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'UsuarioRelatedByUsuarioEmisor');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByUsuarioEmisor relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByUsuarioEmisorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByUsuarioEmisor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByUsuarioEmisor', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MensajeQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByUsuarioReceptor($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(MensajePeer::USUARIO_RECEPTOR, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MensajePeer::USUARIO_RECEPTOR, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByUsuarioReceptor() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByUsuarioReceptor relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByUsuarioReceptor($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByUsuarioReceptor');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'UsuarioRelatedByUsuarioReceptor');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByUsuarioReceptor relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByUsuarioReceptorQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByUsuarioReceptor($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByUsuarioReceptor', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related MensajeCabecera object
     *
     * @param   MensajeCabecera|PropelObjectCollection $mensajeCabecera The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MensajeQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMensajeCabecera($mensajeCabecera, $comparison = null)
    {
        if ($mensajeCabecera instanceof MensajeCabecera) {
            return $this
                ->addUsingAlias(MensajePeer::MENSAJE_CABECERA_ID, $mensajeCabecera->getId(), $comparison);
        } elseif ($mensajeCabecera instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MensajePeer::MENSAJE_CABECERA_ID, $mensajeCabecera->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByMensajeCabecera() only accepts arguments of type MensajeCabecera or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the MensajeCabecera relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function joinMensajeCabecera($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('MensajeCabecera');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'MensajeCabecera');
        }

        return $this;
    }

    /**
     * Use the MensajeCabecera relation MensajeCabecera object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MensajeCabeceraQuery A secondary query class using the current class as primary query
     */
    public function useMensajeCabeceraQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinMensajeCabecera($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'MensajeCabecera', 'MensajeCabeceraQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Mensaje $mensaje Object to remove from the list of results
     *
     * @return MensajeQuery The current query, for fluid interface
     */
    public function prune($mensaje = null)
    {
        if ($mensaje) {
            $this->addUsingAlias(MensajePeer::ID, $mensaje->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
