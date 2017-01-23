<?php

/**
 * Usuario filter form base class.
 *
 * @package    plan
 * @subpackage filter
 * @author     Via
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'clave'            => new sfWidgetFormFilterInput(),
      'correo'           => new sfWidgetFormFilterInput(),
      'estado'           => new sfWidgetFormFilterInput(),
      'imagen'           => new sfWidgetFormFilterInput(),
      'administrador'    => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'validado'         => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'ultimo_ingreso'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'tema'             => new sfWidgetFormFilterInput(),
      'frase'            => new sfWidgetFormFilterInput(),
      'genero'           => new sfWidgetFormFilterInput(),
      'fecha_nacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'pais_id'          => new sfWidgetFormPropelChoice(array('model' => 'Pais', 'add_empty' => true)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'updated_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'created_by'       => new sfWidgetFormFilterInput(),
      'updated_by'       => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'usuario'          => new sfValidatorPass(array('required' => false)),
      'clave'            => new sfValidatorPass(array('required' => false)),
      'correo'           => new sfValidatorPass(array('required' => false)),
      'estado'           => new sfValidatorPass(array('required' => false)),
      'imagen'           => new sfValidatorPass(array('required' => false)),
      'administrador'    => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'validado'         => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'ultimo_ingreso'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'tema'             => new sfValidatorPass(array('required' => false)),
      'frase'            => new sfValidatorPass(array('required' => false)),
      'genero'           => new sfValidatorPass(array('required' => false)),
      'fecha_nacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'pais_id'          => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Pais', 'column' => 'id')),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'created_by'       => new sfValidatorPass(array('required' => false)),
      'updated_by'       => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'usuario'          => 'Text',
      'clave'            => 'Text',
      'correo'           => 'Text',
      'estado'           => 'Text',
      'imagen'           => 'Text',
      'administrador'    => 'Boolean',
      'validado'         => 'Boolean',
      'ultimo_ingreso'   => 'Date',
      'tema'             => 'Text',
      'frase'            => 'Text',
      'genero'           => 'Text',
      'fecha_nacimiento' => 'Date',
      'pais_id'          => 'ForeignKey',
      'created_at'       => 'Date',
      'updated_at'       => 'Date',
      'created_by'       => 'Text',
      'updated_by'       => 'Text',
    );
  }
}
