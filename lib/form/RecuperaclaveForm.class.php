<?php

class RecuperaclaveForm extends sfForm {

    public function configure() {
        $this->setWidget('Correo', new sfWidgetFormInputText(array(), array('class' => 'form-control', 'placeholder' => "Ingrese su correo")));
        $this->setValidator('Correo', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('recupera_clave[%s]');
    }

}
