<?php

/**
 * soporte actions.
 *
 * @package    plan
 * @subpackage soporte
 * @author     Via
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class soporteActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->forward('default', 'module');
    }

    public function executeAvisos(sfWebRequest $request) {
        
    }

    public function executeNotificacionAjax(sfWebRequest $request) {
        $this->archivos = ArchivoQuery::create()
                ->where("estado = 'Pendiente' or estado is null")
                ->find();
    }

    public function executeNotificacionAjaxContador(sfWebRequest $request) {
        return $this->renderText(ArchivoQuery::create()->where("estado = 'Pendiente' or estado is null")->find()->count());
        throw new sfStopException();
    }

    public function executeAutocompletar(sfWebRequest $request) {
        $busqueda = $request->getParameter('busqueda');
        if (strlen($busqueda) > 2) {
            $this->archivos = ArchivoQuery::create()
                    ->filterByDescripcion("%$busqueda%")
                    ->find();
        } else {
            $this->archivos = array();
        }
    }

}
