<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class CargaArchivoForm extends sfForm {

    public function configure() {
        $materia = array();
        $usuario_id = sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad');
        $MateriaQuery = MateriaQuery::create()
                ->useUsuarioMateriaQuery()
                ->filterByUsuarioId($usuario_id)
                ->endUse()
                ->find();
        foreach($MateriaQuery as $fila){
            $materia[$fila->getId()] = $fila->getDescripcion();
        }
        $profesor = array();
        $ProfesorQuery = ProfesoresQuery::create()
                ->find();
        foreach($ProfesorQuery as $fila){
            $profesor[$fila->getId()] = $fila->getNombreCompleto();
        }
        $url_mat = "http://" . $_SERVER['HTTP_HOST'] . sfContext::getInstance()->getController()->genUrl('materia/modalCargaArchivo');
        $url_profesor= "http://" . $_SERVER['HTTP_HOST'] . sfContext::getInstance()->getController()->genUrl('profesores/modalCargaArchivo');
        $this->setWidget('Archivo', new sfWidgetFormInputFile(array(), array('class' => 'kenArchivo')));
        $this->setWidget('Descripcion', new sfWidgetFormInputText(array(), array('class' => 'form-control')));
        $this->setWidget('Materia', new sfWidgetFormChoice(array('choices' => $materia,), array('class' => 'form-control input-xlarge select2me kenSave', 'url' => $url_mat)));
        $this->setWidget('Etiqueta', new sfWidgetFormInputText(array(), array('class' => 'form-control input-mini kenTags', 'autocomplete' => 'off')));
        $this->setWidget('Profesor', new sfWidgetFormChoice(array('choices' => $profesor,), array('class' => 'form-control input-xlarge select2me kenSave', 'url' => $url_profesor)));
        $this->setValidator('Archivo', new sfValidatorFile(array('required' => true)));
        $this->setValidator('Descripcion', new sfValidatorString(array('required' => true)));
        $this->setValidator('Etiqueta', new sfValidatorString(array('required' => true)));
        $this->setValidator('Materia', new sfValidatorString(array('required' => true)));
        $this->setValidator('Profesor', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('carga_archivo[%s]');
    }

}
