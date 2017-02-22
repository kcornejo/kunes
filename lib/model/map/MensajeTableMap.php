<?php



/**
 * This class defines the structure of the 'mensaje' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Tue Feb 21 23:33:55 2017
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class MensajeTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.MensajeTableMap';

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
        $this->setName('mensaje');
        $this->setPhpName('Mensaje');
        $this->setClassname('Mensaje');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addForeignKey('USUARIO_EMISOR', 'UsuarioEmisor', 'INTEGER', 'usuario', 'ID', false, null, null);
        $this->addForeignKey('USUARIO_RECEPTOR', 'UsuarioReceptor', 'INTEGER', 'usuario', 'ID', false, null, null);
        $this->addColumn('CONTENIDO', 'Contenido', 'LONGVARCHAR', false, null, null);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('VISTO', 'Visto', 'BOOLEAN', false, 1, false);
        $this->addForeignKey('MENSAJE_CABECERA_ID', 'MensajeCabeceraId', 'INTEGER', 'mensaje_cabecera', 'ID', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('UsuarioRelatedByUsuarioEmisor', 'Usuario', RelationMap::MANY_TO_ONE, array('usuario_emisor' => 'id', ), null, null);
        $this->addRelation('UsuarioRelatedByUsuarioReceptor', 'Usuario', RelationMap::MANY_TO_ONE, array('usuario_receptor' => 'id', ), null, null);
        $this->addRelation('MensajeCabecera', 'MensajeCabecera', RelationMap::MANY_TO_ONE, array('mensaje_cabecera_id' => 'id', ), null, null);
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

} // MensajeTableMap
