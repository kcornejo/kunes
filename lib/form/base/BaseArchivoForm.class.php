<?php

/**
 * Archivo form base class.
 *
 * @method Archivo getObject() Returns the current form's model object
 *
 * @package    plan
 * @subpackage form
 * @author     Via
 */
abstract class BaseArchivoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                      => new sfWidgetFormInputHidden(),
      'nombre_archivo_original' => new sfWidgetFormInputText(),
      'nombre_archivo_actual'   => new sfWidgetFormInputText(),
      'usuario_id'              => new sfWidgetFormPropelChoice(array('model' => 'Usuario', 'add_empty' => true)),
      'created_at'              => new sfWidgetFormDateTime(),
      'updated_at'              => new sfWidgetFormDateTime(),
      'created_by'              => new sfWidgetFormInputText(),
      'updated_by'              => new sfWidgetFormInputText(),
      'cantidad_rating'         => new sfWidgetFormInputText(),
      'rating'                  => new sfWidgetFormInputText(),
      'estado'                  => new sfWidgetFormInputText(),
      'descripcion'             => new sfWidgetFormInputText(),
      'etiqueta'                => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                      => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre_archivo_original' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'nombre_archivo_actual'   => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'usuario_id'              => new sfValidatorPropelChoice(array('model' => 'Usuario', 'column' => 'id', 'required' => false)),
      'created_at'              => new sfValidatorDateTime(array('required' => false)),
      'updated_at'              => new sfValidatorDateTime(array('required' => false)),
      'created_by'              => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'updated_by'              => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'cantidad_rating'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'rating'                  => new sfValidatorNumber(array('required' => false)),
      'estado'                  => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'descripcion'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'etiqueta'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('archivo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Archivo';
  }


}
