<?php



/**
 * This class defines the structure of the 'universidad' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Tue Feb 21 23:33:57 2017
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class UniversidadTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.UniversidadTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('universidad');
        $this->setPhpName('Universidad');
        $this->setClassname('Universidad');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('DESCRIPCION', 'Descripcion', 'VARCHAR', false, 200, null);
        $this->addForeignKey('PAIS_ID', 'PaisId', 'INTEGER', 'pais', 'ID', false, null, null);
        $this->addColumn('CANTIDAD_RATING', 'CantidadRating', 'INTEGER', false, null, null);
        $this->addColumn('RATING', 'Rating', 'DOUBLE', false, null, null);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('CREATED_BY', 'CreatedBy', 'VARCHAR', false, 32, null);
        $this->addColumn('UPDATED_BY', 'UpdatedBy', 'VARCHAR', false, 32, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pais', 'Pais', RelationMap::MANY_TO_ONE, array('pais_id' => 'id', ), null, null);
        $this->addRelation('Usuario', 'Usuario', RelationMap::ONE_TO_MANY, array('id' => 'universidad_id', ), null, null, 'Usuarios');
    } // buildRelations()

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array Associative array (name => parameters) of behaviors
     */
    public function getBehaviors()
    {
        return array(
            'symfony' => array('form' => 'true', 'filter' => 'true', ),
            'symfony_behaviors' => array(),
            'symfony_timestampable' => array('create_column' => 'created_at', 'update_column' => 'updated_at', ),
        );
    } // getBehaviors()

} // UniversidadTableMap
