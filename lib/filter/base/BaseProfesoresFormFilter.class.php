<?php

/**
 * Profesores filter form base class.
 *
 * @package    plan
 * @subpackage filter
 * @author     Via
 */
abstract class BaseProfesoresFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre_completo'  => new sfWidgetFormFilterInput(),
      'ubicacion_imagen' => new sfWidgetFormFilterInput(),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by'       => new sfWidgetFormFilterInput(),
      'updated_by'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre_completo'  => new sfValidatorPass(array('required' => false)),
      'ubicacion_imagen' => new sfValidatorPass(array('required' => false)),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by'       => new sfValidatorPass(array('required' => false)),
      'updated_by'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('profesores_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profesores';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'nombre_completo'  => 'Text',
      'ubicacion_imagen' => 'Text',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
      'created_by'       => 'Text',
      'updated_by'       => 'Text',
    );
  }
}
