<?php


/**
 * Base class that represents a query for the 'mensaje_cabecera' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Sun Jan 22 22:29:09 2017
 *
 * @method MensajeCabeceraQuery orderById($order = Criteria::ASC) Order by the id column
 * @method MensajeCabeceraQuery orderByUsuario1($order = Criteria::ASC) Order by the usuario1 column
 * @method MensajeCabeceraQuery orderByUsuario2($order = Criteria::ASC) Order by the usuario2 column
 * @method MensajeCabeceraQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method MensajeCabeceraQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method MensajeCabeceraQuery groupById() Group by the id column
 * @method MensajeCabeceraQuery groupByUsuario1() Group by the usuario1 column
 * @method MensajeCabeceraQuery groupByUsuario2() Group by the usuario2 column
 * @method MensajeCabeceraQuery groupByCreatedAt() Group by the created_at column
 * @method MensajeCabeceraQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method MensajeCabeceraQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MensajeCabeceraQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MensajeCabeceraQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MensajeCabeceraQuery leftJoinUsuarioRelatedByUsuario1($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByUsuario1 relation
 * @method MensajeCabeceraQuery rightJoinUsuarioRelatedByUsuario1($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByUsuario1 relation
 * @method MensajeCabeceraQuery innerJoinUsuarioRelatedByUsuario1($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByUsuario1 relation
 *
 * @method MensajeCabeceraQuery leftJoinUsuarioRelatedByUsuario2($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioRelatedByUsuario2 relation
 * @method MensajeCabeceraQuery rightJoinUsuarioRelatedByUsuario2($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioRelatedByUsuario2 relation
 * @method MensajeCabeceraQuery innerJoinUsuarioRelatedByUsuario2($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioRelatedByUsuario2 relation
 *
 * @method MensajeCabeceraQuery leftJoinMensaje($relationAlias = null) Adds a LEFT JOIN clause to the query using the Mensaje relation
 * @method MensajeCabeceraQuery rightJoinMensaje($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Mensaje relation
 * @method MensajeCabeceraQuery innerJoinMensaje($relationAlias = null) Adds a INNER JOIN clause to the query using the Mensaje relation
 *
 * @method MensajeCabecera findOne(PropelPDO $con = null) Return the first MensajeCabecera matching the query
 * @method MensajeCabecera findOneOrCreate(PropelPDO $con = null) Return the first MensajeCabecera matching the query, or a new MensajeCabecera object populated from the query conditions when no match is found
 *
 * @method MensajeCabecera findOneById(int $id) Return the first MensajeCabecera filtered by the id column
 * @method MensajeCabecera findOneByUsuario1(int $usuario1) Return the first MensajeCabecera filtered by the usuario1 column
 * @method MensajeCabecera findOneByUsuario2(int $usuario2) Return the first MensajeCabecera filtered by the usuario2 column
 * @method MensajeCabecera findOneByCreatedAt(string $created_at) Return the first MensajeCabecera filtered by the created_at column
 * @method MensajeCabecera findOneByUpdatedAt(string $updated_at) Return the first MensajeCabecera filtered by the updated_at column
 *
 * @method array findById(int $id) Return MensajeCabecera objects filtered by the id column
 * @method array findByUsuario1(int $usuario1) Return MensajeCabecera objects filtered by the usuario1 column
 * @method array findByUsuario2(int $usuario2) Return MensajeCabecera objects filtered by the usuario2 column
 * @method array findByCreatedAt(string $created_at) Return MensajeCabecera objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return MensajeCabecera objects filtered by the updated_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMensajeCabeceraQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMensajeCabeceraQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'MensajeCabecera', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MensajeCabeceraQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     MensajeCabeceraQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MensajeCabeceraQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MensajeCabeceraQuery) {
            return $criteria;
        }
        $query = new MensajeCabeceraQuery();
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
     * @return   MensajeCabecera|MensajeCabecera[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MensajeCabeceraPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MensajeCabeceraPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   MensajeCabecera A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `USUARIO1`, `USUARIO2`, `CREATED_AT`, `UPDATED_AT` FROM `mensaje_cabecera` WHERE `ID` = :p0';
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
            $obj = new MensajeCabecera();
            $obj->hydrate($row);
            MensajeCabeceraPeer::addInstanceToPool($obj, (string) $key);
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
     * @return MensajeCabecera|MensajeCabecera[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|MensajeCabecera[]|mixed the list of results, formatted by the current formatter
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
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MensajeCabeceraPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MensajeCabeceraPeer::ID, $keys, Criteria::IN);
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
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(MensajeCabeceraPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the usuario1 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuario1(1234); // WHERE usuario1 = 1234
     * $query->filterByUsuario1(array(12, 34)); // WHERE usuario1 IN (12, 34)
     * $query->filterByUsuario1(array('min' => 12)); // WHERE usuario1 > 12
     * </code>
     *
     * @see       filterByUsuarioRelatedByUsuario1()
     *
     * @param     mixed $usuario1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function filterByUsuario1($usuario1 = null, $comparison = null)
    {
        if (is_array($usuario1)) {
            $useMinMax = false;
            if (isset($usuario1['min'])) {
                $this->addUsingAlias(MensajeCabeceraPeer::USUARIO1, $usuario1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuario1['max'])) {
                $this->addUsingAlias(MensajeCabeceraPeer::USUARIO1, $usuario1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MensajeCabeceraPeer::USUARIO1, $usuario1, $comparison);
    }

    /**
     * Filter the query on the usuario2 column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuario2(1234); // WHERE usuario2 = 1234
     * $query->filterByUsuario2(array(12, 34)); // WHERE usuario2 IN (12, 34)
     * $query->filterByUsuario2(array('min' => 12)); // WHERE usuario2 > 12
     * </code>
     *
     * @see       filterByUsuarioRelatedByUsuario2()
     *
     * @param     mixed $usuario2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function filterByUsuario2($usuario2 = null, $comparison = null)
    {
        if (is_array($usuario2)) {
            $useMinMax = false;
            if (isset($usuario2['min'])) {
                $this->addUsingAlias(MensajeCabeceraPeer::USUARIO2, $usuario2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuario2['max'])) {
                $this->addUsingAlias(MensajeCabeceraPeer::USUARIO2, $usuario2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MensajeCabeceraPeer::USUARIO2, $usuario2, $comparison);
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
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(MensajeCabeceraPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(MensajeCabeceraPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MensajeCabeceraPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(MensajeCabeceraPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(MensajeCabeceraPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MensajeCabeceraPeer::UPDATED_AT, $updatedAt, $comparison);
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MensajeCabeceraQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByUsuario1($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(MensajeCabeceraPeer::USUARIO1, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MensajeCabeceraPeer::USUARIO1, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByUsuario1() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByUsuario1 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByUsuario1($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByUsuario1');

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
            $this->addJoinObject($join, 'UsuarioRelatedByUsuario1');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByUsuario1 relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByUsuario1Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByUsuario1($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByUsuario1', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MensajeCabeceraQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioRelatedByUsuario2($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(MensajeCabeceraPeer::USUARIO2, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MensajeCabeceraPeer::USUARIO2, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsuarioRelatedByUsuario2() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioRelatedByUsuario2 relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function joinUsuarioRelatedByUsuario2($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioRelatedByUsuario2');

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
            $this->addJoinObject($join, 'UsuarioRelatedByUsuario2');
        }

        return $this;
    }

    /**
     * Use the UsuarioRelatedByUsuario2 relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioRelatedByUsuario2Query($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuarioRelatedByUsuario2($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioRelatedByUsuario2', 'UsuarioQuery');
    }

    /**
     * Filter the query by a related Mensaje object
     *
     * @param   Mensaje|PropelObjectCollection $mensaje  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MensajeCabeceraQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByMensaje($mensaje, $comparison = null)
    {
        if ($mensaje instanceof Mensaje) {
            return $this
                ->addUsingAlias(MensajeCabeceraPeer::ID, $mensaje->getMensajeCabeceraId(), $comparison);
        } elseif ($mensaje instanceof PropelObjectCollection) {
            return $this
                ->useMensajeQuery()
                ->filterByPrimaryKeys($mensaje->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByMensaje() only accepts arguments of type Mensaje or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Mensaje relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function joinMensaje($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Mensaje');

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
            $this->addJoinObject($join, 'Mensaje');
        }

        return $this;
    }

    /**
     * Use the Mensaje relation Mensaje object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   MensajeQuery A secondary query class using the current class as primary query
     */
    public function useMensajeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinMensaje($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Mensaje', 'MensajeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   MensajeCabecera $mensajeCabecera Object to remove from the list of results
     *
     * @return MensajeCabeceraQuery The current query, for fluid interface
     */
    public function prune($mensajeCabecera = null)
    {
        if ($mensajeCabecera) {
            $this->addUsingAlias(MensajeCabeceraPeer::ID, $mensajeCabecera->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
