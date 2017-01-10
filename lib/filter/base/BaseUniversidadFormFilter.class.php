<?php

/**
 * Universidad filter form base class.
 *
 * @package    plan
 * @subpackage filter
 * @author     Via
 */
abstract class BaseUniversidadFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'descripcion'     => new sfWidgetFormFilterInput(),
      'pais_id'         => new sfWidgetFormPropelChoice(array('model' => 'Pais', 'add_empty' => true)),
      'cantidad_rating' => new sfWidgetFormFilterInput(),
      'rating'          => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by'      => new sfWidgetFormFilterInput(),
      'updated_by'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'descripcion'     => new sfValidatorPass(array('required' => false)),
      'pais_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Pais', 'column' => 'id')),
      'cantidad_rating' => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'rating'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by'      => new sfValidatorPass(array('required' => false)),
      'updated_by'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('universidad_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Universidad';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'descripcion'     => 'Text',
      'pais_id'         => 'ForeignKey',
      'cantidad_rating' => 'Number',
      'rating'          => 'Number',
      'created_at'      => 'Date',
      'updated_at'      => 'Date',
      'created_by'      => 'Text',
      'updated_by'      => 'Text',
    );
  }
}
