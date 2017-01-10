<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption  font-green-jungle">
                    <b>Validar Archivo (<?php echo $Archivo->getNombreArchivoOriginal() ?>)</b>
                </div>
            </div>
            <div class="portlet-body">
                <form class="form" method="POST" action="<?php echo url_for('archivo/validar') . '?id=' . $id ?>">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                <h3>Vista Previa</h3>
                                <hr/>
                                <iframe src="http://docs.google.com/viewer?url=http://anarchivos.com/kunes/web/uploads/carga_archivos/<?php echo $Archivo->getNombreArchivoActual() ?>&amp;embedded=true" width="100%" height="780"></iframe>
                            </div>
                            <div class="col-md-6">
                                <h3>Datos del Archivo</h3>
                                <hr/>
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th>Nombre Archivo:</th>
                                        <td><?php echo $Archivo->getNombreArchivoOriginal() ?></td>
                                    </tr>
                                    <tr>
                                        <th>Subido por:</th>
                                        <td><?php echo $Archivo->getUsuario()->getUsuario() ?></td>
                                    </tr>
                                    <tr>
                                        <th>Fecha y Hora de Subida:</th>
                                        <td><?php echo $Archivo->getCreatedAt('d/m/Y H:i') ?></td>
                                    </tr>
                                    <tr>
                                        <th>Peso de Archivo:</th>
                                        <td><?php echo $Archivo->getTamanio() ?></td>
                                    </tr>
                                    <tr>
                                        <th>Descargar:</th>
                                        <td>
                                            <a class="btn btn-default btn-default-focus" href="/uploads/carga_archivos/<?php echo $Archivo->getNombreArchivoActual() ?>">
                                                <i class="fa fa-download"></i>
                                                Descargar
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <h3>Descripcion del Archivo</h3>
                                <hr/>
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th>Descripcion:</th>
                                        <td><?php echo $Archivo->getDescripcion() ?></td>
                                    </tr>
                                    <tr>
                                        <th>Etiquetas:</th>
                                        <td><?php echo $Archivo->getEtiqueta() ?></td>
                                    </tr>
                                </table>
                                <h3>Modificaciones:</h3>
                                <hr/>
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th>Descripcion:</th>
                                        <td><?php echo $form['Descripcion'] ?></td>
                                    </tr>
                                    <tr>
                                        <th>Etiquetas:</th>
                                        <td><?php echo $form['Etiqueta'] ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-actions">
                                <button name="Valido" type="submit" class="btn btn-success">
                                    <i class="fa fa-check"></i>
                                    Archivo Valido
                                </button>
                                <a class="btn btn-danger" href="<?php echo url_for('archivo/rechazado') . "?id=" . $Archivo->getId() ?>">
                                    <i class="fa fa-times"></i>
                                    Archivo Rechazado
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php echo $form->renderHiddenFields() ?>
                </form>
            </div>
        </div>
    </div>
</div>