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
                $descripcion = $valores['descripcion'];
                $retorno = array();
                if ($descripcion) {
                    $Comprobacion = MateriaQuery::create()->findOneByDescripcion($descripcion);
                    if ($Comprobacion) {
                        $this->getUser()->setAttribute('error_ajax', 'Materia "' . $descripcion . '" ya existente');
                    } else {
                        $Materia = new Materia();
                        $Materia->setDescripcion($valores['descripcion']);
                        $Materia->save();
                        $retorno = array('id' => '#universidad_usuario_Materia', 'id_valor' => $Materia->getId(), 'valor' => $Materia->getDescripcion());
                        $this->getUser()->setAttribute('exito_ajax', 'Materia creado correctamente');
                    }
                } else {
                    $this->getUser()->setAttribute('error_ajax', 'Descripcion Obligatoria');
                }
                return $this->renderText(json_encode($retorno));
            }
        }
    }

}
