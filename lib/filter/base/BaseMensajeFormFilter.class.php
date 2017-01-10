<?php

/**
 * Mensaje filter form base class.
 *
 * @package    plan
 * @subpackage filter
 * @author     Via
 */
abstract class BaseMensajeFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario_emisor'      => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => true)),
      'usuario_receptor'    => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => true)),
      'contenido'           => new sfWidgetFormFilterInput(),
      'created_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'visto'               => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'mensaje_cabecera_id' => new sfWidgetFormPropelChoice(array('model' => 'MensajeCabecera', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'usuario_emisor'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Usuario', 'column' => 'id')),
      'usuario_receptor'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Usuario', 'column' => 'id')),
      'contenido'           => new sfValidatorPass(array('required' => false)),
      'created_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'visto'               => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'mensaje_cabecera_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'MensajeCabecera', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('mensaje_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mensaje';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'usuario_emisor'      => 'ForeignKey',
      'usuario_receptor'    => 'ForeignKey',
      'contenido'           => 'Text',
      'created_at'          => 'Date',
      'updated_at'          => 'Date',
      'visto'               => 'Boolean',
      'mensaje_cabecera_id' => 'ForeignKey',
    );
  }
}
