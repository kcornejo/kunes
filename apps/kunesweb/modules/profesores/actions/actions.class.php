<?php

require_once dirname(__FILE__) . '/../lib/profesoresGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/profesoresGeneratorHelper.class.php';

/**
 * profesores actions.
 *
 * @package    plan
 * @subpackage profesores
 * @author     Via
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class profesoresActions extends autoProfesoresActions {

    public function executeModalCargaArchivo(sfWebRequest $request) {

        $this->form = new MateriaForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('materia'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $descripcion = trim($valores['descripcion']);
                $retorno = array();
                if ($descripcion) {
                    $Profesor = ProfesoresQuery::create()->findOneByNombreCompleto($descripcion);
                    if (!$Profesor) {
                        $Profesor = new Profesores();
                        $Profesor->setNombreCompleto($descripcion);
                        $Profesor->save();
                    }
                    $retorno = array('id' => '#carga_archivo_Profesor', 'id_valor' => $Profesor->getId(), 'valor' => $Profesor->getNombreCompleto());
                    $this->getUser()->setAttribute('exito_ajax', 'Profesor "' . $Profesor->getNombreCompleto() . '" creado correctamente');
                } else {
                    $this->getUser()->setAttribute('error_ajax', 'Descripcion Obligatoria');
                }
                return $this->renderText(json_encode($retorno));
            }
        }
    }

}
