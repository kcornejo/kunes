<?php


/**
 * Base class that represents a query for the 'archivo_comentario' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Sun Dec 11 15:55:59 2016
 *
 * @method ArchivoComentarioQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ArchivoComentarioQuery orderByArchivoId($order = Criteria::ASC) Order by the archivo_id column
 * @method ArchivoComentarioQuery orderByUsuarioId($order = Criteria::ASC) Order by the usuario_id column
 * @method ArchivoComentarioQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method ArchivoComentarioQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method ArchivoComentarioQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method ArchivoComentarioQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 *
 * @method ArchivoComentarioQuery groupById() Group by the id column
 * @method ArchivoComentarioQuery groupByArchivoId() Group by the archivo_id column
 * @method ArchivoComentarioQuery groupByUsuarioId() Group by the usuario_id column
 * @method ArchivoComentarioQuery groupByCreatedAt() Group by the created_at column
 * @method ArchivoComentarioQuery groupByUpdatedAt() Group by the updated_at column
 * @method ArchivoComentarioQuery groupByCreatedBy() Group by the created_by column
 * @method ArchivoComentarioQuery groupByUpdatedBy() Group by the updated_by column
 *
 * @method ArchivoComentarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ArchivoComentarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ArchivoComentarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ArchivoComentarioQuery leftJoinArchivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Archivo relation
 * @method ArchivoComentarioQuery rightJoinArchivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Archivo relation
 * @method ArchivoComentarioQuery innerJoinArchivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Archivo relation
 *
 * @method ArchivoComentarioQuery leftJoinUsuario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Usuario relation
 * @method ArchivoComentarioQuery rightJoinUsuario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Usuario relation
 * @method ArchivoComentarioQuery innerJoinUsuario($relationAlias = null) Adds a INNER JOIN clause to the query using the Usuario relation
 *
 * @method ArchivoComentario findOne(PropelPDO $con = null) Return the first ArchivoComentario matching the query
 * @method ArchivoComentario findOneOrCreate(PropelPDO $con = null) Return the first ArchivoComentario matching the query, or a new ArchivoComentario object populated from the query conditions when no match is found
 *
 * @method ArchivoComentario findOneById(int $id) Return the first ArchivoComentario filtered by the id column
 * @method ArchivoComentario findOneByArchivoId(int $archivo_id) Return the first ArchivoComentario filtered by the archivo_id column
 * @method ArchivoComentario findOneByUsuarioId(int $usuario_id) Return the first ArchivoComentario filtered by the usuario_id column
 * @method ArchivoComentario findOneByCreatedAt(string $created_at) Return the first ArchivoComentario filtered by the created_at column
 * @method ArchivoComentario findOneByUpdatedAt(string $updated_at) Return the first ArchivoComentario filtered by the updated_at column
 * @method ArchivoComentario findOneByCreatedBy(string $created_by) Return the first ArchivoComentario filtered by the created_by column
 * @method ArchivoComentario findOneByUpdatedBy(string $updated_by) Return the first ArchivoComentario filtered by the updated_by column
 *
 * @method array findById(int $id) Return ArchivoComentario objects filtered by the id column
 * @method array findByArchivoId(int $archivo_id) Return ArchivoComentario objects filtered by the archivo_id column
 * @method array findByUsuarioId(int $usuario_id) Return ArchivoComentario objects filtered by the usuario_id column
 * @method array findByCreatedAt(string $created_at) Return ArchivoComentario objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return ArchivoComentario objects filtered by the updated_at column
 * @method array findByCreatedBy(string $created_by) Return ArchivoComentario objects filtered by the created_by column
 * @method array findByUpdatedBy(string $updated_by) Return ArchivoComentario objects filtered by the updated_by column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseArchivoComentarioQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseArchivoComentarioQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'ArchivoComentario', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ArchivoComentarioQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ArchivoComentarioQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ArchivoComentarioQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ArchivoComentarioQuery) {
            return $criteria;
        }
        $query = new ArchivoComentarioQuery();
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
     * @return   ArchivoComentario|ArchivoComentario[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ArchivoComentarioPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ArchivoComentarioPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   ArchivoComentario A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ARCHIVO_ID`, `USUARIO_ID`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY` FROM `archivo_comentario` WHERE `ID` = :p0';
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
            $obj = new ArchivoComentario();
            $obj->hydrate($row);
            ArchivoComentarioPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ArchivoComentario|ArchivoComentario[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ArchivoComentario[]|mixed the list of results, formatted by the current formatter
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
     * @return ArchivoComentarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ArchivoComentarioPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ArchivoComentarioQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ArchivoComentarioPeer::ID, $keys, Criteria::IN);
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
     * @return ArchivoComentarioQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ArchivoComentarioPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the archivo_id column
     *
     * Example usage:
     * <code>
     * $query->filterByArchivoId(1234); // WHERE archivo_id = 1234
     * $query->filterByArchivoId(array(12, 34)); // WHERE archivo_id IN (12, 34)
     * $query->filterByArchivoId(array('min' => 12)); // WHERE archivo_id > 12
     * </code>
     *
     * @see       filterByArchivo()
     *
     * @param     mixed $archivoId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArchivoComentarioQuery The current query, for fluid interface
     */
    public function filterByArchivoId($archivoId = null, $comparison = null)
    {
        if (is_array($archivoId)) {
            $useMinMax = false;
            if (isset($archivoId['min'])) {
                $this->addUsingAlias(ArchivoComentarioPeer::ARCHIVO_ID, $archivoId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($archivoId['max'])) {
                $this->addUsingAlias(ArchivoComentarioPeer::ARCHIVO_ID, $archivoId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchivoComentarioPeer::ARCHIVO_ID, $archivoId, $comparison);
    }

    /**
     * Filter the query on the usuario_id column
     *
     * Example usage:
     * <code>
     * $query->filterByUsuarioId(1234); // WHERE usuario_id = 1234
     * $query->filterByUsuarioId(array(12, 34)); // WHERE usuario_id IN (12, 34)
     * $query->filterByUsuarioId(array('min' => 12)); // WHERE usuario_id > 12
     * </code>
     *
     * @see       filterByUsuario()
     *
     * @param     mixed $usuarioId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ArchivoComentarioQuery The current query, for fluid interface
     */
    public function filterByUsuarioId($usuarioId = null, $comparison = null)
    {
        if (is_array($usuarioId)) {
            $useMinMax = false;
            if (isset($usuarioId['min'])) {
                $this->addUsingAlias(ArchivoComentarioPeer::USUARIO_ID, $usuarioId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($usuarioId['max'])) {
                $this->addUsingAlias(ArchivoComentarioPeer::USUARIO_ID, $usuarioId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchivoComentarioPeer::USUARIO_ID, $usuarioId, $comparison);
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
     * @return ArchivoComentarioQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(ArchivoComentarioPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(ArchivoComentarioPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchivoComentarioPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return ArchivoComentarioQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(ArchivoComentarioPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(ArchivoComentarioPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ArchivoComentarioPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return ArchivoComentarioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ArchivoComentarioPeer::CREATED_BY, $createdBy, $comparison);
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
     * @return ArchivoComentarioQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ArchivoComentarioPeer::UPDATED_BY, $updatedBy, $comparison);
    }

    /**
     * Filter the query by a related Archivo object
     *
     * @param   Archivo|PropelObjectCollection $archivo The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ArchivoComentarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByArchivo($archivo, $comparison = null)
    {
        if ($archivo instanceof Archivo) {
            return $this
                ->addUsingAlias(ArchivoComentarioPeer::ARCHIVO_ID, $archivo->getId(), $comparison);
        } elseif ($archivo instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArchivoComentarioPeer::ARCHIVO_ID, $archivo->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByArchivo() only accepts arguments of type Archivo or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Archivo relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArchivoComentarioQuery The current query, for fluid interface
     */
    public function joinArchivo($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Archivo');

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
            $this->addJoinObject($join, 'Archivo');
        }

        return $this;
    }

    /**
     * Use the Archivo relation Archivo object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ArchivoQuery A secondary query class using the current class as primary query
     */
    public function useArchivoQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinArchivo($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Archivo', 'ArchivoQuery');
    }

    /**
     * Filter the query by a related Usuario object
     *
     * @param   Usuario|PropelObjectCollection $usuario The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ArchivoComentarioQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuario($usuario, $comparison = null)
    {
        if ($usuario instanceof Usuario) {
            return $this
                ->addUsingAlias(ArchivoComentarioPeer::USUARIO_ID, $usuario->getId(), $comparison);
        } elseif ($usuario instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ArchivoComentarioPeer::USUARIO_ID, $usuario->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByUsuario() only accepts arguments of type Usuario or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Usuario relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ArchivoComentarioQuery The current query, for fluid interface
     */
    public function joinUsuario($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Usuario');

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
            $this->addJoinObject($join, 'Usuario');
        }

        return $this;
    }

    /**
     * Use the Usuario relation Usuario object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuario($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Usuario', 'UsuarioQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ArchivoComentario $archivoComentario Object to remove from the list of results
     *
     * @return ArchivoComentarioQuery The current query, for fluid interface
     */
    public function prune($archivoComentario = null)
    {
        if ($archivoComentario) {
            $this->addUsingAlias(ArchivoComentarioPeer::ID, $archivoComentario->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
