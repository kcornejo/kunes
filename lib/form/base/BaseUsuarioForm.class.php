<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    plan
 * @subpackage form
 * @author     Via
 */
abstract class BaseUsuarioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'             => new sfWidgetFormInputHidden(),
      'usuario'        => new sfWidgetFormInputText(),
      'clave'          => new sfWidgetFormInputText(),
      'correo'         => new sfWidgetFormInputText(),
      'estado'         => new sfWidgetFormInputText(),
      'imagen'         => new sfWidgetFormInputText(),
      'administrador'  => new sfWidgetFormInputCheckbox(),
      'validado'       => new sfWidgetFormInputCheckbox(),
      'ultimo_ingreso' => new sfWidgetFormDate(),
      'tema'           => new sfWidgetFormInputText(),
      'created_at'     => new sfWidgetFormDateTime(),
      'updated_at'     => new sfWidgetFormDateTime(),
      'created_by'     => new sfWidgetFormInputText(),
      'updated_by'     => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'             => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'usuario'        => new sfValidatorString(array('max_length' => 32)),
      'clave'          => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'correo'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'estado'         => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'imagen'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'administrador'  => new sfValidatorBoolean(array('required' => false)),
      'validado'       => new sfValidatorBoolean(array('required' => false)),
      'ultimo_ingreso' => new sfValidatorDate(array('required' => false)),
      'tema'           => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'     => new sfValidatorDateTime(array('required' => false)),
      'updated_at'     => new sfValidatorDateTime(array('required' => false)),
      'created_by'     => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'updated_by'     => new sfValidatorString(array('max_length' => 32, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Usuario', 'column' => array('usuario')))
    );

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }


}
