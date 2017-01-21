<?php


/**
 * Base class that represents a query for the 'universidad' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Sun Jan 15 23:38:52 2017
 *
 * @method UniversidadQuery orderById($order = Criteria::ASC) Order by the id column
 * @method UniversidadQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method UniversidadQuery orderByPaisId($order = Criteria::ASC) Order by the pais_id column
 * @method UniversidadQuery orderByCantidadRating($order = Criteria::ASC) Order by the cantidad_rating column
 * @method UniversidadQuery orderByRating($order = Criteria::ASC) Order by the rating column
 * @method UniversidadQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method UniversidadQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method UniversidadQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method UniversidadQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 *
 * @method UniversidadQuery groupById() Group by the id column
 * @method UniversidadQuery groupByDescripcion() Group by the descripcion column
 * @method UniversidadQuery groupByPaisId() Group by the pais_id column
 * @method UniversidadQuery groupByCantidadRating() Group by the cantidad_rating column
 * @method UniversidadQuery groupByRating() Group by the rating column
 * @method UniversidadQuery groupByCreatedAt() Group by the created_at column
 * @method UniversidadQuery groupByUpdatedAt() Group by the updated_at column
 * @method UniversidadQuery groupByCreatedBy() Group by the created_by column
 * @method UniversidadQuery groupByUpdatedBy() Group by the updated_by column
 *
 * @method UniversidadQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method UniversidadQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method UniversidadQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method UniversidadQuery leftJoinPais($relationAlias = null) Adds a LEFT JOIN clause to the query using the Pais relation
 * @method UniversidadQuery rightJoinPais($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Pais relation
 * @method UniversidadQuery innerJoinPais($relationAlias = null) Adds a INNER JOIN clause to the query using the Pais relation
 *
 * @method Universidad findOne(PropelPDO $con = null) Return the first Universidad matching the query
 * @method Universidad findOneOrCreate(PropelPDO $con = null) Return the first Universidad matching the query, or a new Universidad object populated from the query conditions when no match is found
 *
 * @method Universidad findOneById(int $id) Return the first Universidad filtered by the id column
 * @method Universidad findOneByDescripcion(string $descripcion) Return the first Universidad filtered by the descripcion column
 * @method Universidad findOneByPaisId(int $pais_id) Return the first Universidad filtered by the pais_id column
 * @method Universidad findOneByCantidadRating(int $cantidad_rating) Return the first Universidad filtered by the cantidad_rating column
 * @method Universidad findOneByRating(double $rating) Return the first Universidad filtered by the rating column
 * @method Universidad findOneByCreatedAt(string $created_at) Return the first Universidad filtered by the created_at column
 * @method Universidad findOneByUpdatedAt(string $updated_at) Return the first Universidad filtered by the updated_at column
 * @method Universidad findOneByCreatedBy(string $created_by) Return the first Universidad filtered by the created_by column
 * @method Universidad findOneByUpdatedBy(string $updated_by) Return the first Universidad filtered by the updated_by column
 *
 * @method array findById(int $id) Return Universidad objects filtered by the id column
 * @method array findByDescripcion(string $descripcion) Return Universidad objects filtered by the descripcion column
 * @method array findByPaisId(int $pais_id) Return Universidad objects filtered by the pais_id column
 * @method array findByCantidadRating(int $cantidad_rating) Return Universidad objects filtered by the cantidad_rating column
 * @method array findByRating(double $rating) Return Universidad objects filtered by the rating column
 * @method array findByCreatedAt(string $created_at) Return Universidad objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Universidad objects filtered by the updated_at column
 * @method array findByCreatedBy(string $created_by) Return Universidad objects filtered by the created_by column
 * @method array findByUpdatedBy(string $updated_by) Return Universidad objects filtered by the updated_by column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseUniversidadQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseUniversidadQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Universidad', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new UniversidadQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     UniversidadQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return UniversidadQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof UniversidadQuery) {
            return $criteria;
        }
        $query = new UniversidadQuery();
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
     * @return   Universidad|Universidad[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = UniversidadPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(UniversidadPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Universidad A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `DESCRIPCION`, `PAIS_ID`, `CANTIDAD_RATING`, `RATING`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY` FROM `universidad` WHERE `ID` = :p0';
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
            $obj = new Universidad();
            $obj->hydrate($row);
            UniversidadPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Universidad|Universidad[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Universidad[]|mixed the list of results, formatted by the current formatter
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
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(UniversidadPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(UniversidadPeer::ID, $keys, Criteria::IN);
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
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(UniversidadPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the descripcion column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripcion('fooValue');   // WHERE descripcion = 'fooValue'
     * $query->filterByDescripcion('%fooValue%'); // WHERE descripcion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripcion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterByDescripcion($descripcion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripcion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripcion)) {
                $descripcion = str_replace('*', '%', $descripcion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UniversidadPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the pais_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPaisId(1234); // WHERE pais_id = 1234
     * $query->filterByPaisId(array(12, 34)); // WHERE pais_id IN (12, 34)
     * $query->filterByPaisId(array('min' => 12)); // WHERE pais_id > 12
     * </code>
     *
     * @see       filterByPais()
     *
     * @param     mixed $paisId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterByPaisId($paisId = null, $comparison = null)
    {
        if (is_array($paisId)) {
            $useMinMax = false;
            if (isset($paisId['min'])) {
                $this->addUsingAlias(UniversidadPeer::PAIS_ID, $paisId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($paisId['max'])) {
                $this->addUsingAlias(UniversidadPeer::PAIS_ID, $paisId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UniversidadPeer::PAIS_ID, $paisId, $comparison);
    }

    /**
     * Filter the query on the cantidad_rating column
     *
     * Example usage:
     * <code>
     * $query->filterByCantidadRating(1234); // WHERE cantidad_rating = 1234
     * $query->filterByCantidadRating(array(12, 34)); // WHERE cantidad_rating IN (12, 34)
     * $query->filterByCantidadRating(array('min' => 12)); // WHERE cantidad_rating > 12
     * </code>
     *
     * @param     mixed $cantidadRating The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterByCantidadRating($cantidadRating = null, $comparison = null)
    {
        if (is_array($cantidadRating)) {
            $useMinMax = false;
            if (isset($cantidadRating['min'])) {
                $this->addUsingAlias(UniversidadPeer::CANTIDAD_RATING, $cantidadRating['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cantidadRating['max'])) {
                $this->addUsingAlias(UniversidadPeer::CANTIDAD_RATING, $cantidadRating['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UniversidadPeer::CANTIDAD_RATING, $cantidadRating, $comparison);
    }

    /**
     * Filter the query on the rating column
     *
     * Example usage:
     * <code>
     * $query->filterByRating(1234); // WHERE rating = 1234
     * $query->filterByRating(array(12, 34)); // WHERE rating IN (12, 34)
     * $query->filterByRating(array('min' => 12)); // WHERE rating > 12
     * </code>
     *
     * @param     mixed $rating The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterByRating($rating = null, $comparison = null)
    {
        if (is_array($rating)) {
            $useMinMax = false;
            if (isset($rating['min'])) {
                $this->addUsingAlias(UniversidadPeer::RATING, $rating['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rating['max'])) {
                $this->addUsingAlias(UniversidadPeer::RATING, $rating['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UniversidadPeer::RATING, $rating, $comparison);
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
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(UniversidadPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(UniversidadPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UniversidadPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(UniversidadPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(UniversidadPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(UniversidadPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query on the created_by column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedBy('fooValue');   // WHERE created_by = 'fooValue'
     * $query->filterByCreatedBy('%fooValue%'); // WHERE created_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $createdBy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterByCreatedBy($createdBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($createdBy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $createdBy)) {
                $createdBy = str_replace('*', '%', $createdBy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UniversidadPeer::CREATED_BY, $createdBy, $comparison);
    }

    /**
     * Filter the query on the updated_by column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedBy('fooValue');   // WHERE updated_by = 'fooValue'
     * $query->filterByUpdatedBy('%fooValue%'); // WHERE updated_by LIKE '%fooValue%'
     * </code>
     *
     * @param     string $updatedBy The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function filterByUpdatedBy($updatedBy = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($updatedBy)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $updatedBy)) {
                $updatedBy = str_replace('*', '%', $updatedBy);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(UniversidadPeer::UPDATED_BY, $updatedBy, $comparison);
    }

    /**
     * Filter the query by a related Pais object
     *
     * @param   Pais|PropelObjectCollection $pais The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   UniversidadQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByPais($pais, $comparison = null)
    {
        if ($pais instanceof Pais) {
            return $this
                ->addUsingAlias(UniversidadPeer::PAIS_ID, $pais->getId(), $comparison);
        } elseif ($pais instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(UniversidadPeer::PAIS_ID, $pais->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByPais() only accepts arguments of type Pais or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Pais relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function joinPais($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Pais');

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
            $this->addJoinObject($join, 'Pais');
        }

        return $this;
    }

    /**
     * Use the Pais relation Pais object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   PaisQuery A secondary query class using the current class as primary query
     */
    public function usePaisQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinPais($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Pais', 'PaisQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Universidad $universidad Object to remove from the list of results
     *
     * @return UniversidadQuery The current query, for fluid interface
     */
    public function prune($universidad = null)
    {
        if ($universidad) {
            $this->addUsingAlias(UniversidadPeer::ID, $universidad->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
