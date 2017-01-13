<?php

/**
 * inicio actions.
 *
 * @package    plan
 * @subpackage inicio
 * @author     Via
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inicioActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        
    }

    public function executeActualizaciones(sfWebRequest $request) {
        $this->archivos = ArchivoQuery::create()
                ->where("estado = 'Verificado'")
                ->orderById('DESC')
                ->limit(5)
                ->find();
    }
    public function executeUsuarios(sfWebRequest $request){
        $this->usuarios = UsuarioQuery::create()
                ->limit(5)
                ->find();
    }
}
