<?php

require_once dirname(__FILE__) . '/../lib/formato_correoGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/formato_correoGeneratorHelper.class.php';

/**
 * formato_correo actions.
 *
 * @package    plan
 * @subpackage formato_correo
 * @author     Via
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class formato_correoActions extends autoFormato_correoActions {

    public function executeFormato(sfWebRequest $request) {
        $id = $request->getParameter('id');
        $Formato = FormatoCorreoQuery::create()->findOneById($id);
        $defaults = array();
        $defaults['Formato'] = $Formato->getFormato();
        $this->form = new EditaFormatoCorreoForm($defaults);
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('formato_correo'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $Formato->setFormato($valores['Formato']);
                $Formato->save();
                $this->getUser()->setFlash('exito', 'Edicion de Formata realizada correctamente');
                $this->redirect('formato_correo/index');
            }
        }
        $this->tabla = $Formato->getComodin();
        $this->id = $id;
    }

}
