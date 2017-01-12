<?php

/**
 * Pais filter form base class.
 *
 * @package    plan
 * @subpackage filter
 * @author     Via
 */
abstract class BasePaisFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'codigo_iso'  => new sfWidgetFormFilterInput(),
      'descripcion' => new sfWidgetFormFilterInput(),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by'  => new sfWidgetFormFilterInput(),
      'updated_by'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'codigo_iso'  => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by'  => new sfValidatorPass(array('required' => false)),
      'updated_by'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pais_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pais';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'codigo_iso'  => 'Text',
      'descripcion' => 'Text',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
      'created_by'  => 'Text',
      'updated_by'  => 'Text',
    );
  }
}