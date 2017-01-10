<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class ValidaArchivo extends sfForm {

    public function configure() {
        $this->setWidget('Descripcion', new sfWidgetFormInputText(array(), array('class' => 'form-control')));
        $this->setWidget('Etiqueta', new sfWidgetFormInputText(array(), array('class' => 'form-control kenTags')));
        $this->setValidator('Descripcion', new sfValidatorString(array('required' => true)));
        $this->setValidator('Etiqueta', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('valida_archivo[%s]');
    }

}
