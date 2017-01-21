<?php

require_once dirname(__FILE__) . '/../lib/paisGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/paisGeneratorHelper.class.php';

/**
 * pais actions.
 *
 * @package    plan
 * @subpackage pais
 * @author     Via
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class paisActions extends autoPaisActions {

    public function executeModal(sfWebRequest $request) {
        $this->form = new PaisForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('pais'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $descripcion = $valores['descripcion'];
                $retorno = array();
                if ($descripcion) {
                    $Comprobacion = PaisQuery::create()->findOneByDescripcion($descripcion);
                    if ($Comprobacion) {
                        $this->getUser()->setAttribute('error_ajax', 'Pais "'. $descripcion .'" ya existente');
                    } else {
                        $Pais = new Pais();
                        $Pais->setDescripcion($valores['descripcion']);
                        $Pais->save();
                        $retorno = array('id' => '#perfil_Pais', 'id_valor' => $Pais->getId(), 'valor' => $Pais->getDescripcion());
                        $this->getUser()->setAttribute('exito_ajax', 'Pais creado correctamente');
                    }
                } else {
                    $this->getUser()->setAttribute('error_ajax', 'Descripcion Obligatoria');
                }
                return $this->renderText(json_encode($retorno));
            }
        }
    }

}
