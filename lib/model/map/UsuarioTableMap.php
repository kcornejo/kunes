<?php



/**
 * This class defines the structure of the 'usuario' table.
 *
 *
 * This class was autogenerated by Propel 1.6.7 on:
 *
 * Thu Feb 23 06:33:16 2017
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class UsuarioTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lib.model.map.UsuarioTableMap';

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
        $this->setName('usuario');
        $this->setPhpName('Usuario');
        $this->setClassname('Usuario');
        $this->setPackage('lib.model');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('USUARIO', 'Usuario', 'VARCHAR', true, 32, null);
        $this->getColumn('USUARIO', false)->setPrimaryString(true);
        $this->addColumn('CLAVE', 'Clave', 'VARCHAR', false, 60, null);
        $this->addColumn('CORREO', 'Correo', 'VARCHAR', false, 255, null);
        $this->addColumn('ESTADO', 'Estado', 'VARCHAR', false, 32, null);
        $this->addColumn('IMAGEN', 'Imagen', 'VARCHAR', false, 255, null);
        $this->addColumn('ADMINISTRADOR', 'Administrador', 'BOOLEAN', false, 1, false);
        $this->addColumn('VALIDADO', 'Validado', 'BOOLEAN', false, 1, true);
        $this->addColumn('ULTIMO_INGRESO', 'UltimoIngreso', 'DATE', false, null, null);
        $this->addColumn('TEMA', 'Tema', 'VARCHAR', false, 255, null);
        $this->addColumn('FRASE', 'Frase', 'VARCHAR', false, 255, null);
        $this->addColumn('GENERO', 'Genero', 'VARCHAR', false, 30, null);
        $this->addColumn('FECHA_NACIMIENTO', 'FechaNacimiento', 'DATE', false, null, null);
        $this->addForeignKey('PAIS_ID', 'PaisId', 'INTEGER', 'pais', 'ID', false, null, null);
        $this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('UPDATED_AT', 'UpdatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('CREATED_BY', 'CreatedBy', 'VARCHAR', false, 32, null);
        $this->addColumn('UPDATED_BY', 'UpdatedBy', 'VARCHAR', false, 32, null);
        $this->addForeignKey('UNIVERSIDAD_ID', 'UniversidadId', 'INTEGER', 'universidad', 'ID', false, null, null);
        $this->addForeignKey('CARRERA_ID', 'CarreraId', 'INTEGER', 'carrera', 'ID', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('Pais', 'Pais', RelationMap::MANY_TO_ONE, array('pais_id' => 'id', ), null, null);
        $this->addRelation('Universidad', 'Universidad', RelationMap::MANY_TO_ONE, array('universidad_id' => 'id', ), null, null);
        $this->addRelation('Carrera', 'Carrera', RelationMap::MANY_TO_ONE, array('carrera_id' => 'id', ), null, null);
        $this->addRelation('UsuarioMateria', 'UsuarioMateria', RelationMap::ONE_TO_MANY, array('id' => 'usuario_id', ), null, null, 'UsuarioMaterias');
        $this->addRelation('MensajeCabeceraRelatedByUsuario1', 'MensajeCabecera', RelationMap::ONE_TO_MANY, array('id' => 'usuario1', ), null, null, 'MensajeCabecerasRelatedByUsuario1');
        $this->addRelation('MensajeCabeceraRelatedByUsuario2', 'MensajeCabecera', RelationMap::ONE_TO_MANY, array('id' => 'usuario2', ), null, null, 'MensajeCabecerasRelatedByUsuario2');
        $this->addRelation('MensajeRelatedByUsuarioEmisor', 'Mensaje', RelationMap::ONE_TO_MANY, array('id' => 'usuario_emisor', ), null, null, 'MensajesRelatedByUsuarioEmisor');
        $this->addRelation('MensajeRelatedByUsuarioReceptor', 'Mensaje', RelationMap::ONE_TO_MANY, array('id' => 'usuario_receptor', ), null, null, 'MensajesRelatedByUsuarioReceptor');
        $this->addRelation('TokenUsuario', 'TokenUsuario', RelationMap::ONE_TO_MANY, array('id' => 'usuario_id', ), null, null, 'TokenUsuarios');
        $this->addRelation('Archivo', 'Archivo', RelationMap::ONE_TO_MANY, array('id' => 'usuario_id', ), null, null, 'Archivos');
        $this->addRelation('ArchivoComentario', 'ArchivoComentario', RelationMap::ONE_TO_MANY, array('id' => 'usuario_id', ), null, null, 'ArchivoComentarios');
        $this->addRelation('ArchivoCalificacion', 'ArchivoCalificacion', RelationMap::ONE_TO_MANY, array('id' => 'usuario_id', ), null, null, 'ArchivoCalificacions');
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

} // UsuarioTableMap
