<?php


/**
 * Base class that represents a query for the 'materia' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Tue Feb 21 05:59:14 2017
 *
 * @method MateriaQuery orderById($order = Criteria::ASC) Order by the id column
 * @method MateriaQuery orderByDescripcion($order = Criteria::ASC) Order by the descripcion column
 * @method MateriaQuery orderByCategoriaMateriaId($order = Criteria::ASC) Order by the categoria_materia_id column
 * @method MateriaQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method MateriaQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method MateriaQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method MateriaQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 *
 * @method MateriaQuery groupById() Group by the id column
 * @method MateriaQuery groupByDescripcion() Group by the descripcion column
 * @method MateriaQuery groupByCategoriaMateriaId() Group by the categoria_materia_id column
 * @method MateriaQuery groupByCreatedAt() Group by the created_at column
 * @method MateriaQuery groupByUpdatedAt() Group by the updated_at column
 * @method MateriaQuery groupByCreatedBy() Group by the created_by column
 * @method MateriaQuery groupByUpdatedBy() Group by the updated_by column
 *
 * @method MateriaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method MateriaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method MateriaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method MateriaQuery leftJoinCategoriaMateria($relationAlias = null) Adds a LEFT JOIN clause to the query using the CategoriaMateria relation
 * @method MateriaQuery rightJoinCategoriaMateria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CategoriaMateria relation
 * @method MateriaQuery innerJoinCategoriaMateria($relationAlias = null) Adds a INNER JOIN clause to the query using the CategoriaMateria relation
 *
 * @method MateriaQuery leftJoinUsuarioMateria($relationAlias = null) Adds a LEFT JOIN clause to the query using the UsuarioMateria relation
 * @method MateriaQuery rightJoinUsuarioMateria($relationAlias = null) Adds a RIGHT JOIN clause to the query using the UsuarioMateria relation
 * @method MateriaQuery innerJoinUsuarioMateria($relationAlias = null) Adds a INNER JOIN clause to the query using the UsuarioMateria relation
 *
 * @method MateriaQuery leftJoinArchivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Archivo relation
 * @method MateriaQuery rightJoinArchivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Archivo relation
 * @method MateriaQuery innerJoinArchivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Archivo relation
 *
 * @method Materia findOne(PropelPDO $con = null) Return the first Materia matching the query
 * @method Materia findOneOrCreate(PropelPDO $con = null) Return the first Materia matching the query, or a new Materia object populated from the query conditions when no match is found
 *
 * @method Materia findOneById(int $id) Return the first Materia filtered by the id column
 * @method Materia findOneByDescripcion(string $descripcion) Return the first Materia filtered by the descripcion column
 * @method Materia findOneByCategoriaMateriaId(int $categoria_materia_id) Return the first Materia filtered by the categoria_materia_id column
 * @method Materia findOneByCreatedAt(string $created_at) Return the first Materia filtered by the created_at column
 * @method Materia findOneByUpdatedAt(string $updated_at) Return the first Materia filtered by the updated_at column
 * @method Materia findOneByCreatedBy(string $created_by) Return the first Materia filtered by the created_by column
 * @method Materia findOneByUpdatedBy(string $updated_by) Return the first Materia filtered by the updated_by column
 *
 * @method array findById(int $id) Return Materia objects filtered by the id column
 * @method array findByDescripcion(string $descripcion) Return Materia objects filtered by the descripcion column
 * @method array findByCategoriaMateriaId(int $categoria_materia_id) Return Materia objects filtered by the categoria_materia_id column
 * @method array findByCreatedAt(string $created_at) Return Materia objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Materia objects filtered by the updated_at column
 * @method array findByCreatedBy(string $created_by) Return Materia objects filtered by the created_by column
 * @method array findByUpdatedBy(string $updated_by) Return Materia objects filtered by the updated_by column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseMateriaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseMateriaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Materia', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new MateriaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     MateriaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return MateriaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof MateriaQuery) {
            return $criteria;
        }
        $query = new MateriaQuery();
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
     * @return   Materia|Materia[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = MateriaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(MateriaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Materia A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `DESCRIPCION`, `CATEGORIA_MATERIA_ID`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY` FROM `materia` WHERE `ID` = :p0';
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
            $obj = new Materia();
            $obj->hydrate($row);
            MateriaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Materia|Materia[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Materia[]|mixed the list of results, formatted by the current formatter
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
     * @return MateriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(MateriaPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return MateriaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(MateriaPeer::ID, $keys, Criteria::IN);
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
     * @return MateriaQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(MateriaPeer::ID, $id, $comparison);
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
     * @return MateriaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MateriaPeer::DESCRIPCION, $descripcion, $comparison);
    }

    /**
     * Filter the query on the categoria_materia_id column
     *
     * Example usage:
     * <code>
     * $query->filterByCategoriaMateriaId(1234); // WHERE categoria_materia_id = 1234
     * $query->filterByCategoriaMateriaId(array(12, 34)); // WHERE categoria_materia_id IN (12, 34)
     * $query->filterByCategoriaMateriaId(array('min' => 12)); // WHERE categoria_materia_id > 12
     * </code>
     *
     * @see       filterByCategoriaMateria()
     *
     * @param     mixed $categoriaMateriaId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return MateriaQuery The current query, for fluid interface
     */
    public function filterByCategoriaMateriaId($categoriaMateriaId = null, $comparison = null)
    {
        if (is_array($categoriaMateriaId)) {
            $useMinMax = false;
            if (isset($categoriaMateriaId['min'])) {
                $this->addUsingAlias(MateriaPeer::CATEGORIA_MATERIA_ID, $categoriaMateriaId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categoriaMateriaId['max'])) {
                $this->addUsingAlias(MateriaPeer::CATEGORIA_MATERIA_ID, $categoriaMateriaId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MateriaPeer::CATEGORIA_MATERIA_ID, $categoriaMateriaId, $comparison);
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
     * @return MateriaQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(MateriaPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(MateriaPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MateriaPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return MateriaQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(MateriaPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(MateriaPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(MateriaPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return MateriaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MateriaPeer::CREATED_BY, $createdBy, $comparison);
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
     * @return MateriaQuery The current query, for fluid interface
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

        return $this->addUsingAlias(MateriaPeer::UPDATED_BY, $updatedBy, $comparison);
    }

    /**
     * Filter the query by a related CategoriaMateria object
     *
     * @param   CategoriaMateria|PropelObjectCollection $categoriaMateria The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MateriaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByCategoriaMateria($categoriaMateria, $comparison = null)
    {
        if ($categoriaMateria instanceof CategoriaMateria) {
            return $this
                ->addUsingAlias(MateriaPeer::CATEGORIA_MATERIA_ID, $categoriaMateria->getId(), $comparison);
        } elseif ($categoriaMateria instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(MateriaPeer::CATEGORIA_MATERIA_ID, $categoriaMateria->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCategoriaMateria() only accepts arguments of type CategoriaMateria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CategoriaMateria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MateriaQuery The current query, for fluid interface
     */
    public function joinCategoriaMateria($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CategoriaMateria');

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
            $this->addJoinObject($join, 'CategoriaMateria');
        }

        return $this;
    }

    /**
     * Use the CategoriaMateria relation CategoriaMateria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CategoriaMateriaQuery A secondary query class using the current class as primary query
     */
    public function useCategoriaMateriaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCategoriaMateria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CategoriaMateria', 'CategoriaMateriaQuery');
    }

    /**
     * Filter the query by a related UsuarioMateria object
     *
     * @param   UsuarioMateria|PropelObjectCollection $usuarioMateria  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MateriaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByUsuarioMateria($usuarioMateria, $comparison = null)
    {
        if ($usuarioMateria instanceof UsuarioMateria) {
            return $this
                ->addUsingAlias(MateriaPeer::ID, $usuarioMateria->getMateriaId(), $comparison);
        } elseif ($usuarioMateria instanceof PropelObjectCollection) {
            return $this
                ->useUsuarioMateriaQuery()
                ->filterByPrimaryKeys($usuarioMateria->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByUsuarioMateria() only accepts arguments of type UsuarioMateria or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the UsuarioMateria relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return MateriaQuery The current query, for fluid interface
     */
    public function joinUsuarioMateria($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('UsuarioMateria');

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
            $this->addJoinObject($join, 'UsuarioMateria');
        }

        return $this;
    }

    /**
     * Use the UsuarioMateria relation UsuarioMateria object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   UsuarioMateriaQuery A secondary query class using the current class as primary query
     */
    public function useUsuarioMateriaQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinUsuarioMateria($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'UsuarioMateria', 'UsuarioMateriaQuery');
    }

    /**
     * Filter the query by a related Archivo object
     *
     * @param   Archivo|PropelObjectCollection $archivo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   MateriaQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByArchivo($archivo, $comparison = null)
    {
        if ($archivo instanceof Archivo) {
            return $this
                ->addUsingAlias(MateriaPeer::ID, $archivo->getMateriaId(), $comparison);
        } elseif ($archivo instanceof PropelObjectCollection) {
            return $this
                ->useArchivoQuery()
                ->filterByPrimaryKeys($archivo->getPrimaryKeys())
                ->endUse();
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
     * @return MateriaQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   Materia $materia Object to remove from the list of results
     *
     * @return MateriaQuery The current query, for fluid interface
     */
    public function prune($materia = null)
    {
        if ($materia) {
            $this->addUsingAlias(MateriaPeer::ID, $materia->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
