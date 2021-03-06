<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CambioClaveForm extends sfForm {

    public function configure() {
        $this->setWidget('Clave', new sfWidgetFormInputPassword(array(), array('class' => 'form-control', 'placeholder' => 'Ingrese su nueva clave')));
        $this->setWidget('Repetir', new sfWidgetFormInputPassword(array('label' => 'Repite la clave'), array('class' => 'form-control', 'placeholder' => 'Repita su nueva clave')));
        $this->setValidator('Clave', new sfValidatorString(array('required' => true)));
        $this->setValidator('Repetir', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('cambio_clave_form[%s]');
        $this->validatorSchema->setPostValidator(new sfValidatorCallback(array(
            'callback' => array($this, "validaClave")
        )));

        $this->widgetSchema->setNameFormat('cambio_clave[%s]');
    }

    public function validaClave(sfValidatorBase $validator, array $values) {
        $clave = $values['Clave'];
        $clave2 = $values['Repetir'];
        if ($clave != $clave2) {
            throw new sfValidatorErrorSchema($validator, array("Clave" => new sfValidatorError($validator, 'Claves no Coinciden')));
        } else {
            return $values;
        }
    }

}
