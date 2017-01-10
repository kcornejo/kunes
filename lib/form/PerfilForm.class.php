<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PerfilForm extends sfForm {

    public function configure() {
        $idUsuario = sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad');
        $Usuario = UsuarioQuery::create()->findOneById($idUsuario);
        $listaTema = array(
            '/assets/admin/layout/css/themes/default.css' => 'Por Defecto',
            '/assets/admin/layout/css/themes/darkblue.css' => 'Azul Oscuro',
            '/assets/admin/layout/css/themes/blue.css' => 'Azul',
            '/assets/admin/layout/css/themes/grey.css' => 'Gris',
            '/assets/admin/layout/css/themes/light.css' => 'Blanco',
            '/assets/admin/layout/css/themes/light2.css' => 'Blanco 2',
        );
        $this->setWidget('Archivo', new sfWidgetFormInputFile(array(), array('class' => ' input-large')));
        $this->setWidget('Nombre', new sfWidgetFormInputText(array(), array('class' => 'form-control input-medium', 'placeholder' => $Usuario->getUsuario())));
        $this->setWidget('Tema', new sfWidgetFormChoice(array('choices' => $listaTema), array('class' => 'form-control select2me')));
        $this->setValidator('Archivo', new sfValidatorFile(array('required' => false)));
        $this->setValidator('Nombre', new sfValidatorString(array('required' => false)));
        $this->setValidator('Tema', new sfValidatorString(array('required' => false)));
        $this->widgetSchema->setNameFormat('perfil[%s]');
    }

}
