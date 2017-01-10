<?php



/**
 * This class defines the structure of the 'configuracion_correo' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Sun Dec 11 15:55:58 2016
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class ConfiguracionCorreoTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.ConfiguracionCorreoTableMap';

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
        $this->setName('configuracion_correo');
        $this->setPhpName('ConfiguracionCorreo');
        $this->setClassname('ConfiguracionCorreo');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('HOST', 'Host', 'VARCHAR', false, 100, null);
        $this->addColumn('PUERTO', 'Puerto', 'VARCHAR', false, 10, null);
        $this->addColumn('ENCRIPTACION', 'Encriptacion', 'VARCHAR', false, 100, null);
        $this->addColumn('USUARIO', 'Usuario', 'VARCHAR', false, 255, null);
        $this->addColumn('CLAVE', 'Clave', 'VARCHAR', false, 100, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
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
        );
    } // getBehaviors()

} // ConfiguracionCorreoTableMap
