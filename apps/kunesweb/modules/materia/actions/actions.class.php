<?php

require_once dirname(__FILE__) . '/../lib/materiaGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/materiaGeneratorHelper.class.php';

/**
 * materia actions.
 *
 * @package    plan
 * @subpackage materia
 * @author     Via
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class materiaActions extends autoMateriaActions {

    public function executeModal(sfWebRequest $request) {
        $this->form = new MateriaForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('materia'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $descripcion = trim($valores['descripcion']);
                $retorno = array();
                if ($descripcion) {
                    $Comprobacion = MateriaQuery::create()->findOneByDescripcion($descripcion);
                    if ($Comprobacion) {
                        $this->getUser()->setAttribute('error_ajax', 'Materia "' . $descripcion . '" ya existente');
                    } else {
                        $Materia = new Materia();
                        $Materia->setDescripcion($descripcion);
                        $Materia->save();
                        $retorno = array('id' => '#universidad_usuario_Materia', 'id_valor' => $Materia->getId(), 'valor' => $Materia->getDescripcion());
                        $this->getUser()->setAttribute('exito_ajax', 'Materia "' . $Materia->getDescripcion() . '" creado correctamente');
                    }
                } else {
                    $this->getUser()->setAttribute('error_ajax', 'Descripcion Obligatoria');
                }
                return $this->renderText(json_encode($retorno));
            }
        }
    }

    public function executeModalCargaArchivo(sfWebRequest $request) {
        
        $this->form = new MateriaForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('materia'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $descripcion = trim($valores['descripcion']);
                $retorno = array();
                if ($descripcion) {
                    $Materia = MateriaQuery::create()->findOneByDescripcion($descripcion);
                    if (!$Materia) {
                        $Materia = new Materia();
                        $Materia->setDescripcion($descripcion);
                        $Materia->save();
                    }
                    $usuario_id = $this->getUser()->getAttribute('usuario', null, 'seguridad');
                    $Usuario = UsuarioMateriaQuery::create()
                            ->filterByMateriaId($Materia->getId())
                            ->filterByUsuarioId($usuario_id)
                            ->findOne();
                    if (!$Usuario) {
                        $Usuario = new UsuarioMateria();
                        $Usuario->setUsuarioId($usuario_id);
                        $Usuario->setMateriaId($Materia->getId());
                        $Usuario->save();
                    }
                    $retorno = array('id' => '#carga_archivo_Materia', 'id_valor' => $Materia->getId(), 'valor' => $Materia->getDescripcion());
                    $this->getUser()->setAttribute('exito_ajax', 'Materia "' . $Materia->getDescripcion() . '" creado correctamente');
                } else {
                    $this->getUser()->setAttribute('error_ajax', 'Descripcion Obligatoria');
                }
                return $this->renderText(json_encode($retorno));
            }
        }
    }

}
