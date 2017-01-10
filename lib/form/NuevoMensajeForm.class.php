<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class NuevoMensajeForm extends sfForm {

    public function configure() {
        $idUsuario = sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad');
        $UsuarioQuery = UsuarioQuery::create()
                ->where("id <> $idUsuario")
                ->find();
        $listado = array();
        foreach($UsuarioQuery as $u){
            $listado[$u->getId()] = $u->getUsuario();
        }
        $this->setWidget('Receptor', new sfWidgetFormChoice(array('choices' => $listado), array('class' => 'form-control select2me')));
        $this->setWidget('Contenido', new sfWidgetFormTextarea(array(), array('class' => 'form-control', 'data-provide' => 'markdown')));
        $this->setValidator('Contenido', new sfValidatorString(array('required' => true)));
        $this->setValidator('Receptor', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('nuevo_mensaje[%s]');
    }

}
