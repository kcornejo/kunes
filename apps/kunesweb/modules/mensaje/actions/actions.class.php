<?php

/**
 * mensaje actions.
 *
 * @package    plan
 * @subpackage mensaje
 * @author     Via
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class mensajeActions extends sfActions {

    /**
     * Executes index action
     *
     * @param sfRequest $request A request object
     */
    public function executeIndex(sfWebRequest $request) {
        $this->redirect('mensaje/lista');
    }

    public function executeLista(sfWebRequest $request) {
        $idUsuario = sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad');
        $this->mensaje = MensajeCabeceraQuery::create()
                ->useMensajeQuery()
                ->orderById('DESC')
                ->endUse()
                ->where("usuario1 = $idUsuario or usuario2 = $idUsuario")
                ->groupBy("id")
                ->find();
    }

    public function executeNuevo(sfWebRequest $request) {
        $idUsuario = sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad');
        $this->form = new NuevoMensajeForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('nuevo_mensaje'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $NuevoMensaje = new Mensaje();
                $NuevoMensaje->setUsuarioEmisor($idUsuario);
                $NuevoMensaje->setUsuarioReceptor($valores['Receptor']);
                $NuevoMensaje->setContenido($valores['Contenido']);
                $NuevoMensaje->save();
                $this->getUser()->setFlash('exito', 'Mensaje enviado!');
                $this->redirect('mensaje/lista');
            }
        }
    }

}
