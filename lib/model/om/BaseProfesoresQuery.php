<?php


/**
 * Base class that represents a query for the 'profesores' table.
 *
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Thu Feb 23 06:33:16 2017
 *
 * @method ProfesoresQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ProfesoresQuery orderByNombreCompleto($order = Criteria::ASC) Order by the nombre_completo column
 * @method ProfesoresQuery orderByUbicacionImagen($order = Criteria::ASC) Order by the ubicacion_imagen column
 * @method ProfesoresQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method ProfesoresQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 * @method ProfesoresQuery orderByCreatedBy($order = Criteria::ASC) Order by the created_by column
 * @method ProfesoresQuery orderByUpdatedBy($order = Criteria::ASC) Order by the updated_by column
 *
 * @method ProfesoresQuery groupById() Group by the id column
 * @method ProfesoresQuery groupByNombreCompleto() Group by the nombre_completo column
 * @method ProfesoresQuery groupByUbicacionImagen() Group by the ubicacion_imagen column
 * @method ProfesoresQuery groupByCreatedAt() Group by the created_at column
 * @method ProfesoresQuery groupByUpdatedAt() Group by the updated_at column
 * @method ProfesoresQuery groupByCreatedBy() Group by the created_by column
 * @method ProfesoresQuery groupByUpdatedBy() Group by the updated_by column
 *
 * @method ProfesoresQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProfesoresQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProfesoresQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ProfesoresQuery leftJoinArchivo($relationAlias = null) Adds a LEFT JOIN clause to the query using the Archivo relation
 * @method ProfesoresQuery rightJoinArchivo($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Archivo relation
 * @method ProfesoresQuery innerJoinArchivo($relationAlias = null) Adds a INNER JOIN clause to the query using the Archivo relation
 *
 * @method Profesores findOne(PropelPDO $con = null) Return the first Profesores matching the query
 * @method Profesores findOneOrCreate(PropelPDO $con = null) Return the first Profesores matching the query, or a new Profesores object populated from the query conditions when no match is found
 *
 * @method Profesores findOneById(int $id) Return the first Profesores filtered by the id column
 * @method Profesores findOneByNombreCompleto(string $nombre_completo) Return the first Profesores filtered by the nombre_completo column
 * @method Profesores findOneByUbicacionImagen(string $ubicacion_imagen) Return the first Profesores filtered by the ubicacion_imagen column
 * @method Profesores findOneByCreatedAt(string $created_at) Return the first Profesores filtered by the created_at column
 * @method Profesores findOneByUpdatedAt(string $updated_at) Return the first Profesores filtered by the updated_at column
 * @method Profesores findOneByCreatedBy(string $created_by) Return the first Profesores filtered by the created_by column
 * @method Profesores findOneByUpdatedBy(string $updated_by) Return the first Profesores filtered by the updated_by column
 *
 * @method array findById(int $id) Return Profesores objects filtered by the id column
 * @method array findByNombreCompleto(string $nombre_completo) Return Profesores objects filtered by the nombre_completo column
 * @method array findByUbicacionImagen(string $ubicacion_imagen) Return Profesores objects filtered by the ubicacion_imagen column
 * @method array findByCreatedAt(string $created_at) Return Profesores objects filtered by the created_at column
 * @method array findByUpdatedAt(string $updated_at) Return Profesores objects filtered by the updated_at column
 * @method array findByCreatedBy(string $created_by) Return Profesores objects filtered by the created_by column
 * @method array findByUpdatedBy(string $updated_by) Return Profesores objects filtered by the updated_by column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseProfesoresQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProfesoresQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'propel', $modelName = 'Profesores', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProfesoresQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     ProfesoresQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProfesoresQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProfesoresQuery) {
            return $criteria;
        }
        $query = new ProfesoresQuery();
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
     * @return   Profesores|Profesores[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProfesoresPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is alredy in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProfesoresPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return   Profesores A model object, or null if the key is not found
     * @throws   PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `NOMBRE_COMPLETO`, `UBICACION_IMAGEN`, `CREATED_AT`, `UPDATED_AT`, `CREATED_BY`, `UPDATED_BY` FROM `profesores` WHERE `ID` = :p0';
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
            $obj = new Profesores();
            $obj->hydrate($row);
            ProfesoresPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Profesores|Profesores[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Profesores[]|mixed the list of results, formatted by the current formatter
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
     * @return ProfesoresQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProfesoresPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProfesoresQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProfesoresPeer::ID, $keys, Criteria::IN);
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
     * @return ProfesoresQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id) && null === $comparison) {
            $comparison = Criteria::IN;
        }

        return $this->addUsingAlias(ProfesoresPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nombre_completo column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreCompleto('fooValue');   // WHERE nombre_completo = 'fooValue'
     * $query->filterByNombreCompleto('%fooValue%'); // WHERE nombre_completo LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nombreCompleto The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfesoresQuery The current query, for fluid interface
     */
    public function filterByNombreCompleto($nombreCompleto = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nombreCompleto)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nombreCompleto)) {
                $nombreCompleto = str_replace('*', '%', $nombreCompleto);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfesoresPeer::NOMBRE_COMPLETO, $nombreCompleto, $comparison);
    }

    /**
     * Filter the query on the ubicacion_imagen column
     *
     * Example usage:
     * <code>
     * $query->filterByUbicacionImagen('fooValue');   // WHERE ubicacion_imagen = 'fooValue'
     * $query->filterByUbicacionImagen('%fooValue%'); // WHERE ubicacion_imagen LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ubicacionImagen The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProfesoresQuery The current query, for fluid interface
     */
    public function filterByUbicacionImagen($ubicacionImagen = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ubicacionImagen)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ubicacionImagen)) {
                $ubicacionImagen = str_replace('*', '%', $ubicacionImagen);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ProfesoresPeer::UBICACION_IMAGEN, $ubicacionImagen, $comparison);
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
     * @return ProfesoresQuery The current query, for fluid interface
     */
    public function filterByCreatedAt($createdAt = null, $comparison = null)
    {
        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                $this->addUsingAlias(ProfesoresPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                $this->addUsingAlias(ProfesoresPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProfesoresPeer::CREATED_AT, $createdAt, $comparison);
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
     * @return ProfesoresQuery The current query, for fluid interface
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = null)
    {
        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                $this->addUsingAlias(ProfesoresPeer::UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                $this->addUsingAlias(ProfesoresPeer::UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProfesoresPeer::UPDATED_AT, $updatedAt, $comparison);
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
     * @return ProfesoresQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProfesoresPeer::CREATED_BY, $createdBy, $comparison);
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
     * @return ProfesoresQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProfesoresPeer::UPDATED_BY, $updatedBy, $comparison);
    }

    /**
     * Filter the query by a related Archivo object
     *
     * @param   Archivo|PropelObjectCollection $archivo  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return   ProfesoresQuery The current query, for fluid interface
     * @throws   PropelException - if the provided filter is invalid.
     */
    public function filterByArchivo($archivo, $comparison = null)
    {
        if ($archivo instanceof Archivo) {
            return $this
                ->addUsingAlias(ProfesoresPeer::ID, $archivo->getProfesoresId(), $comparison);
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
     * @return ProfesoresQuery The current query, for fluid interface
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
     * @param   Profesores $profesores Object to remove from the list of results
     *
     * @return ProfesoresQuery The current query, for fluid interface
     */
    public function prune($profesores = null)
    {
        if ($profesores) {
            $this->addUsingAlias(ProfesoresPeer::ID, $profesores->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}