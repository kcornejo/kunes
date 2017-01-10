<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class EditaFormatoCorreoForm extends sfForm {

    public function configure() {
        $this->setWidget('Formato', new sfWidgetFormTextarea(array(), array('class' => 'form-control', 'data-provide' => 'markdown')));
        $this->setValidator('Formato', new sfValidatorString(array('required' => false)));
        $this->widgetSchema->setNameFormat('formato_correo[%s]');
    }

}
