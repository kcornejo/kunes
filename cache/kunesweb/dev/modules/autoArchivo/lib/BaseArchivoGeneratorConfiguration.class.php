<?php

/**
 * archivo module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage archivo
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseArchivoGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
        return array(  '_delete' => NULL,);
      }

  public function getListActions()
  {
    return array();
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%id%% - %%nombre_archivo_original%% - %%nombre_archivo_actual%% - %%usuario_id%% - %%created_at%% - %%updated_at%% - %%created_by%% - %%updated_by%% - %%cantidad_rating%% - %%rating%% - %%estado%% - %%descripcion%% - %%etiqueta%% - %%materia_id%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Archivo List';
  }

  public function getEditTitle()
  {
    return 'Edit Archivo';
  }

  public function getNewTitle()
  {
    return 'New Archivo';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'nombre_archivo_original',  2 => 'nombre_archivo_actual',  3 => 'usuario_id',  4 => 'created_at',  5 => 'updated_at',  6 => 'created_by',  7 => 'updated_by',  8 => 'cantidad_rating',  9 => 'rating',  10 => 'estado',  11 => 'descripcion',  12 => 'etiqueta',  13 => 'materia_id',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombre_archivo_original' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nombre_archivo_actual' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'usuario_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'created_by' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'updated_by' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cantidad_rating' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'rating' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'estado' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'descripcion' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'etiqueta' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'materia_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'nombre_archivo_original' => array(),
      'nombre_archivo_actual' => array(),
      'usuario_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'created_by' => array(),
      'updated_by' => array(),
      'cantidad_rating' => array(),
      'rating' => array(),
      'estado' => array(),
      'descripcion' => array(),
      'etiqueta' => array(),
      'materia_id' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'nombre_archivo_original' => array(),
      'nombre_archivo_actual' => array(),
      'usuario_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'created_by' => array(),
      'updated_by' => array(),
      'cantidad_rating' => array(),
      'rating' => array(),
      'estado' => array(),
      'descripcion' => array(),
      'etiqueta' => array(),
      'materia_id' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'nombre_archivo_original' => array(),
      'nombre_archivo_actual' => array(),
      'usuario_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'created_by' => array(),
      'updated_by' => array(),
      'cantidad_rating' => array(),
      'rating' => array(),
      'estado' => array(),
      'descripcion' => array(),
      'etiqueta' => array(),
      'materia_id' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'nombre_archivo_original' => array(),
      'nombre_archivo_actual' => array(),
      'usuario_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'created_by' => array(),
      'updated_by' => array(),
      'cantidad_rating' => array(),
      'rating' => array(),
      'estado' => array(),
      'descripcion' => array(),
      'etiqueta' => array(),
      'materia_id' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'nombre_archivo_original' => array(),
      'nombre_archivo_actual' => array(),
      'usuario_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
      'created_by' => array(),
      'updated_by' => array(),
      'cantidad_rating' => array(),
      'rating' => array(),
      'estado' => array(),
      'descripcion' => array(),
      'etiqueta' => array(),
      'materia_id' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'archivoForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'archivoFormFilter';
  }

  public function getPaginateMethod()
  {
    return 'paginate';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getWiths()
  {
    return array();
  }

  public function getQueryMethods()
  {
    return array();
  }
}
