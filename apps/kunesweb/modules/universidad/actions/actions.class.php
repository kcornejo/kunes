<?php

require_once dirname(__FILE__) . '/../lib/universidadGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/universidadGeneratorHelper.class.php';

/**
 * universidad actions.
 *
 * @package    plan
 * @subpackage universidad
 * @author     Via
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class universidadActions extends autoUniversidadActions {

    public function executeModal(sfWebRequest $request) {
        $this->form = new UniversidadForm();
        if ($request->isMethod('POST')) {
            $retorno = array();
            $this->form->bind($request->getParameter('universidad'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                if ($valores['pais_id'] && $valores['descripcion']) {
                    $Comprobacion = UniversidadQuery::create()
                            ->filterByPaisId($valores['pais_id'])
                            ->filterByDescripcion($valores['descripcion'])
                            ->findOne();
                    if ($Comprobacion) {
                        $this->getUser()->setAttribute('error_ajax', 'Universidad creada anteriormente');
                    } else {
                        $Universidad = new Universidad();
                        $Universidad->setPaisId($valores['pais_id']);
                        $Universidad->setDescripcion($valores['descripcion']);
                        $Universidad->save();
                        $retorno = array('id' => '#universidad_usuario_Universidad', 'id_valor' => $Universidad->getId(), 'valor' => $valores['descripcion']);
                        $this->getUser()->setAttribute('exito_ajax', "Universidad creada correctamente");
                    }
                } else {
                    $this->getUser()->setAttribute('error_ajax', 'Campos faltantes');
                }
            }
            return $this->renderText(json_encode($retorno));
        }
    }

}
