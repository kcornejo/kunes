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
        $this->setWidget('Archivo', new sfWidgetFormInputFile(array(), array('class' => 'kenArchivo')));
        $this->setWidget('Descripcion', new sfWidgetFormInputText(array(), array('class' => 'form-control')));
        $this->setWidget('Materia', new sfWidgetFormChoice(array('choices' => $materia), array('class' => 'form-control select2me')));
        $this->setWidget('Etiqueta', new sfWidgetFormInputText(array(), array('class' => 'form-control input-mini kenTags', 'autocomplete' => 'off')));
        $this->setValidator('Archivo', new sfValidatorFile(array('required' => true)));
        $this->setValidator('Descripcion', new sfValidatorString(array('required' => true)));
        $this->setValidator('Etiqueta', new sfValidatorString(array('required' => true)));
        $this->setValidator('Materia', new sfValidatorString(array('required' => true)));
        $this->widgetSchema->setNameFormat('carga_archivo[%s]');
    }

}
