<?php

/**
 * Materia form base class.
 *
 * @method Materia getObject() Returns the current form's model object
 *
 * @package    plan
 * @subpackage form
 * @author     Via
 */
abstract class BaseMateriaForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'descripcion'          => new sfWidgetFormInputText(),
      'categoria_materia_id' => new sfWidgetFormPropelChoice(array('model' => 'CategoriaMateria', 'add_empty' => true)),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
      'created_by'           => new sfWidgetFormInputText(),
      'updated_by'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'descripcion'          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'categoria_materia_id' => new sfValidatorPropelChoice(array('model' => 'CategoriaMateria', 'column' => 'id', 'required' => false)),
      'created_at'           => new sfValidatorDateTime(array('required' => false)),
      'updated_at'           => new sfValidatorDateTime(array('required' => false)),
      'created_by'           => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'updated_by'           => new sfValidatorString(array('max_length' => 32, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('materia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Materia';
  }


}
