<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class UniversidadUsuarioForm extends sfForm {

    public function configure() {
        $Universidad = array();
        $UniversidadBd = UniversidadQuery::create()
                ->find();
        foreach ($UniversidadBd as $fila) {
            $Universidad[$fila->getId()] = $fila->getDescripcion();
        }
        $Carreras = array();
        $CarreraDb = CarreraQuery::create()
                ->find();
        foreach ($CarreraDb as $fila) {
            $Carreras[$fila->getId()] = $fila->getDescripcion();
        }
        $Materias = array();
        $materiaDb = MateriaQuery::create()->find();
        foreach($materiaDb as $fila){
            $Materias[$fila->getId()] = $fila->getDescripcion();
        }
        $url = "http://" . $_SERVER['HTTP_HOST'] . sfContext::getInstance()->getController()->genUrl('universidad/modal');
        $url_car = "http://" . $_SERVER['HTTP_HOST'] . sfContext::getInstance()->getController()->genUrl('carrera/modal');
        $url_mat = "http://" . $_SERVER['HTTP_HOST'] . sfContext::getInstance()->getController()->genUrl('materia/modal');
        $this->setWidget('Universidad', new sfWidgetFormChoice(array('choices' => $Universidad), array('class' => 'form-control input-xlarge select2me kenSave', 'url' => $url)));
        $this->setWidget('Carrera', new sfWidgetFormChoice(array('choices' => $Carreras,), array('class' => 'form-control input-xlarge select2me kenSave', 'url' => $url_car)));
        $this->setWidget('Materia', new sfWidgetFormChoice(array('choices' => $Materias,'multiple' => true), array('class' => 'form-control input-xlarge select2me kenSave', 'url' => $url_mat)));
        $this->setValidator('Universidad', new sfValidatorString(array('required' => true)));
        $this->setValidator('Carrera', new sfValidatorString(array('required' => true)));
        $this->setValidator('Materia', new sfValidatorChoice(array('required' => true, 'multiple' => true, 'choices' => array_keys($Materias))));
        $this->widgetSchema->setNameFormat('universidad_usuario[%s]');
    }

}
