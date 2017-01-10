<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CargaArchivoForm extends sfForm {

    public function configure() {
        $this->setWidget('Archivo', new sfWidgetFormInputFile(array(), array('class' => 'kenArchivo')));
        $this->setWidget('Descripcion', new sfWidgetFormInputText(array(), array('class' => 'form-control')));
        $this->setWidget('Etiqueta', new sfWidgetFormInputText(array(), array('class' => 'form-control input-mini kenTags', 'autocomplete' => 'off')));
        $this->setValidator('Archivo', new sfValidatorFile(array('required' => true)));
        $this->setValidator('Descripcion', new sfValidatorString(array('required' => true)));
        $this->setValidator('Etiqueta', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('carga_archivo[%s]');
    }

}
