<?php

require_once dirname(__FILE__) . '/../lib/usuarioGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/usuarioGeneratorHelper.class.php';

/**
 * usuario actions.
 *
 * @package    plan
 * @subpackage usuario
 * @author     Via
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class usuarioActions extends autoUsuarioActions {

    public function executeDetalle(sfWebRequest $request) {
        
    }

    public function executePerfil(sfWebRequest $request) {
        $idUsuario = sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad');
        $Usuario = UsuarioQuery::create()->findOneById($idUsuario);
        $defecto['Tema'] = $Usuario->getTema();
        $this->form = new PerfilForm($defecto);
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('perfil'), $request->getFiles('perfil'));
            if ($this->form->isValid()) {
                $valores = $this->form->getValues();
                $archivo = $valores['Archivo'];

                if ($archivo) {
                    $carpeta = sfConfig::get('sf_upload_dir') . '/imagen_perfil';
                    mkdir($carpeta);
                    chmod($carpeta, 0777);
                    $nombreNuevo = sha1($idUsuario);
                    $archivo_guardar = sfConfig::get('sf_upload_dir') . '/imagen_perfil/' . $nombreNuevo . $archivo->getExtension();
                    $archivo->save($archivo_guardar);
                    $archivo_referencia = '/uploads/imagen_perfil/' . $nombreNuevo . $archivo->getExtension();
                    sfContext::getInstance()->getUser()->setAttribute('usuario', $archivo_referencia, 'imagen');
                    $Usuario->setImagen($archivo_referencia);
                }
                $nombreUsuario = $valores['Nombre'];
                if ($nombreUsuario) {
                    $Usuario->setUsuario($nombreUsuario);
                    sfContext::getInstance()->getUser()->setAttribute('usuarioNombre', $nombreUsuario, 'seguridad');
                }
                $tema = $valores['Tema'];
                if ($tema) {
                    $Usuario->setTema($tema);
                }
                $Usuario->save();
                $this->getUser()->setFlash('exito', 'Foto de Perfil cambiada correctamente');
                $this->redirect("inicio/index");
            }
        }
    }

}
