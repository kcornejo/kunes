<?php

require_once dirname(__FILE__) . '/../lib/archivoGeneratorConfiguration.class.php';
require_once dirname(__FILE__) . '/../lib/archivoGeneratorHelper.class.php';

/**
 * archivo actions.
 *
 * @package    plan
 * @subpackage archivo
 * @author     Via
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class archivoActions extends autoArchivoActions {

    public function executeCarga(sfWebRequest $request) {
        $this->form = new CargaArchivoForm();
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('carga_archivo'), $request->getFiles('carga_archivo'));
            if ($this->form->isValid()) {
                $con = Propel::getConnection();
                $con->beginTransaction();
                $usuario_id = $this->getUser()->getAttribute('usuario', null, 'seguridad');
                $valores = $this->form->getValues();
                $archivoValores = $valores['Archivo'];
                $Archivo = new Archivo();
                $usuario = UsuarioQuery::create()->findOneById($usuario_id);
                if ($usuario->getAdministrador()) {
                    $Archivo->setEstado('Verificado');
                } else {
                    $Archivo->setEstado('Pendiente');
                    $UsuariosAdmin = UsuarioQuery::create()->findByAdministrador(true);
                    $correoUsuarios = null;
                    foreach ($UsuariosAdmin as $fila) {
                        $correoUsuarios .= $fila->getCorreo() . ',';
                    }
                    $Correo = new Correo();
                    $Correo->setReceptor(substr($correoUsuarios, 0, -1));
                    $Correo->setAsunto('Nuevo Archivo');
                    $datos = array();
                    $formato = FormatoCorreoQuery::create()->findOneByTipo('Alerta_Archivo');
                    $contenido = $formato->getFormatoPlano($datos);
                    $Correo->setContenido($contenido);
                    $Correo->save();
                }
                $Archivo->setDescripcion($valores['Descripcion']);
                $Archivo->setEtiqueta($valores['Etiqueta']);
                $Archivo->setUsuarioId($usuario_id);
                $Archivo->setNombreArchivoOriginal($archivoValores->getOriginalName());
                $Archivo->setNombreArchivoActual(sha1(date('Y-m-d His') . uniqid()) . $archivoValores->getExtension());
                $Archivo->save();
                $archivoValores->save(sfConfig::get('sf_upload_dir') . '/carga_archivos/' . $Archivo->getNombreArchivoActual());
                chmod(sfConfig::get('sf_upload_dir') . '/carga_archivos/' . $Archivo->getNombreArchivoActual(), 0777);
                $con->commit();
                $this->getUser()->setFlash('exito', 'Carga exitosa de archivo.');
                $this->redirect('inicio/index');
            }
        }
    }

    public function executeValidar(sfWebRequest $request) {
        $id = $request->getParameter('id');
        $Archivo = ArchivoQuery::create()
                ->findOneById($id);
        $this->Archivo = $Archivo;
        $defaults = array();
        $defaults['Descripcion'] = $Archivo->getDescripcion();
        $defaults['Etiqueta'] = $Archivo->getEtiqueta();
        $this->form = new ValidaArchivo($defaults);
        if ($request->isMethod('POST')) {
            $this->form->bind($request->getParameter('valida_archivo'));
            if ($this->form->isValid()) {
                $Valores = $this->form->getValues();
                $Archivo->setDescripcion($Valores['Descripcion']);
                $Archivo->setEtiqueta($valores['Etiqueta']);
                $Archivo->setEstado('Verificado');
                $Archivo->save();
                $this->getUser()->setFlash('exito', 'Archivo Validado');
                $this->redirect('inicio/index');
            }
        }
        $this->id = $id;
    }

    public function executeRechazado(sfWebRequest $request) {
        $id = $request->getParameter('id');
        $Archivo = ArchivoQuery::create()->findOneById($id);
        $Archivo->setEstado('Rechazado');
        $Archivo->save();
        $this->getUser()->setFlash('exito', 'Archivo Rechazado');
        $this->redirect('inicio/index');
    }

    public function executeDetalle(sfWebRequest $request) {
        $id = $request->getParameter('id');
        $Archivo = ArchivoQuery::create()
                ->findOneById($id);
        if ($Archivo) {
            $this->Archivo = $Archivo;
        } else {
            $this->getUser()->setFlash('error', 'Archivo no existente');
            $this->redirect('inicio/index');
        }
    }

}
