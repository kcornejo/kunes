<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class RegistrarForm extends sfForm {

    public function configure() {
        $this->setWidget('Correo', new sfWidgetFormInputText(array('label' =>  'Correo'), array('class' => 'validate form-control', 'placeholder' => 'Correo')));
        $this->setWidget('Usuario', new sfWidgetFormInputText(array('label' =>  'Usuario'), array('class' => 'validate form-control', 'placeholder' => 'Nombre')));
        $this->setWidget('Clave', new sfWidgetFormInputPassword(array(), array('class' => 'form-control', 'placeholder' => 'Clave')));
        $this->setWidget('Repetir', new sfWidgetFormInputPassword(array('label' => 'Repite la clave'), array('class' => 'form-control', 'placeholder' => 'Repita la Clave')));
        $this->setValidator('Correo', new sfValidatorString(array('required' => true)));
        $this->setValidator('Usuario', new sfValidatorString(array('required' => true)));
        $this->setValidator('Clave', new sfValidatorString(array('required' => true)));
        $this->setValidator('Repetir', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('cambio_clave_form[%s]');
        $this->validatorSchema->setPostValidator(new sfValidatorCallback(array(
            'callback' => array($this, "validaClave")
        )));

        $this->widgetSchema->setNameFormat('registro_usuario[%s]');
    }

    public function validaClave(sfValidatorBase $validator, array $values) {
        $clave = $values['Clave'];
        $clave2 = $values['Repetir'];
        if ($clave != $clave2) {
            throw new sfValidatorErrorSchema($validator, array("Clave" => new sfValidatorError($validator, 'Claves no Coinciden')));
        } else {
            $Usuario = UsuarioQuery::create()->findOneByCorreo($values['Correo']);
            if (!$Usuario) {
                return $values;
            } else {
                throw new sfValidatorErrorSchema($validator, array("Correo" => new sfValidatorError($validator, 'Usuario ya existente.')));
            }
        }
    }

}
