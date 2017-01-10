<?php

/**
 * FormatoCorreo form base class.
 *
 * @method FormatoCorreo getObject() Returns the current form's model object
 *
 * @package    plan
 * @subpackage form
 * @author     Via
 */
abstract class BaseFormatoCorreoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'      => new sfWidgetFormInputHidden(),
      'tipo'    => new sfWidgetFormInputText(),
      'formato' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'      => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'tipo'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'formato' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('formato_correo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'FormatoCorreo';
  }


}
