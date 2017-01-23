<?php

/**
 * Archivo filter form base class.
 *
 * @package    plan
 * @subpackage filter
 * @author     Via
 */
abstract class BaseArchivoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_archivo_original' => new sfWidgetFormFilterInput(),
      'nombre_archivo_actual'   => new sfWidgetFormFilterInput(),
      'usuario_id'              => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => true)),
      'created_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by'              => new sfWidgetFormFilterInput(),
      'updated_by'              => new sfWidgetFormFilterInput(),
      'cantidad_rating'         => new sfWidgetFormFilterInput(),
      'rating'                  => new sfWidgetFormFilterInput(),
      'estado'                  => new sfWidgetFormFilterInput(),
      'descripcion'             => new sfWidgetFormFilterInput(),
      'etiqueta'                => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre_archivo_original' => new sfValidatorPass(array('required' => false)),
      'nombre_archivo_actual'   => new sfValidatorPass(array('required' => false)),
      'usuario_id'              => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Usuario', 'column' => 'id')),
      'created_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by'              => new sfValidatorPass(array('required' => false)),
      'updated_by'              => new sfValidatorPass(array('required' => false)),
      'cantidad_rating'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rating'                  => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'estado'                  => new sfValidatorPass(array('required' => false)),
      'descripcion'             => new sfValidatorPass(array('required' => false)),
      'etiqueta'                => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('archivo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Archivo';
  }

  public function getFields()
  {
    return array(
      'id'                      => 'Number',
      'nombre_archivo_original' => 'Text',
      'nombre_archivo_actual'   => 'Text',
      'usuario_id'              => 'ForeignKey',
      'created_at'              => 'Date',
      'updated_at'              => 'Date',
      'created_by'              => 'Text',
      'updated_by'              => 'Text',
      'cantidad_rating'         => 'Number',
      'rating'                  => 'Number',
      'estado'                  => 'Text',
      'descripcion'             => 'Text',
      'etiqueta'                => 'Text',
    );
  }
}
