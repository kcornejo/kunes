<?php

require_once dirname(__FILE__) . '/../lib/carreraGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/carreraGeneratorHelper.class.php';

/**
 * carrera actions.
 *
 * @package    plan
 * @subpackage carrera
 * @author     Via
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class carreraActions extends autoCarreraActions {

    public function executeModal(sfWebRequest $request) {
        $this->form = new CarreraForm();
        $retorno = array();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('carrera'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $descripcion = $valores['descripcion'];
                if ($descripcion) {
                    $Comprobacion = CarreraQuery::create()->findOneByDescripcion($descripcion);
                    if ($Comprobacion) {
                        $this->getUser()->setAttribute('error_ajax', 'Carrera "' . $descripcion . '" ya existente');
                    } else {
                        $Carrera = new Carrera();
                        $Carrera->setDescripcion($valores['descripcion']);
                        $Carrera->save();
                        $retorno = array('id' => '#universidad_usuario_Carrera', 'id_valor' => $Carrera->getId(), 'valor' => $Carrera->getDescripcion());
                        $this->getUser()->setAttribute('exito_ajax', 'Carrera creado correctamente');
                    }
                } else {
                    $this->getUser()->setAttribute('error_ajax', 'Descripcion Obligatoria');
                }
            }
            return $this->renderText(json_encode($retorno));
        }
    }

}
