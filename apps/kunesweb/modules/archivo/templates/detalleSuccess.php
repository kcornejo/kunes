<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption  font-green-jungle">
                    <b>Visualizar Archivo (<?php echo $Archivo->getNombreArchivoOriginal() ?>)</b>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-8">
                            <h3>Vista Previa</h3>
                            <hr/>
                            <?php if ($Archivo->getExtension() == 'mp4'): ?>
                                <video class="col-md-12" style="width:100%" controls>
                                    <source src="/uploads/carga_archivos/<?php echo $Archivo->getNombreArchivoActual() ?>" type="video/mp4">
                                    Tu explorador no es compatible
                                </video>
                            <?php elseif ($Archivo->getExtension() == 'mp3'): ?>
                                <audio class="col-md-12" style="width:100%" controls>
                                    <source src="/uploads/carga_archivos/<?php echo $Archivo->getNombreArchivoActual() ?>" type="audio/mpeg">
                                    Tu explorador no es compatible
                                </audio> 
                            <?php elseif ($Archivo->getExtension() == 'jpg' || $Archivo->getExtension() == 'png'): ?>
                                <img style="width:100%;" class="col-md-12" src="/uploads/carga_archivos/<?php echo $Archivo->getNombreArchivoActual() ?>"/>
                            <?php else: ?>
                                <iframe src="http://docs.google.com/viewer?url=http://anarchivos.com/web/uploads/carga_archivos/<?php echo $Archivo->getNombreArchivoActual() ?>&amp;embedded=true" width="100%" height="780"></iframe>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-4">
                            <div class="col-md-12">
                                <h3>Datos del Archivo</h3>
                                <hr/>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <th>Nombre Archivo:</th>
                                            <td><?php echo $Archivo->getNombreArchivoOriginal() ?></td>
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
                                                <a class="btn btn-default btn-circle btn-default-focus" href="/uploads/carga_archivos/<?php echo $Archivo->getNombreArchivoActual() ?>">
                                                    <i class="fa fa-download"></i>
                                                    Descargar
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>Profesor: <?php echo $Archivo->getProfesoresId() ? $Archivo->getProfesores()->getNombreCompleto() : "[Sin Profesor Asignado]" ?></h3>

                            </div>
                            <div class="col-md-12">
                                <h3>Calificacion</h3>
                                <hr/>
                                <div class="kenStars" url_envio="<?php echo url_for("archivo/calificacion") . "?id=" . $Archivo->getId() ?>" punteo="
                                <?php
                                $punteo = 0;
                                if ($Archivo->getRating() > 0 && $Archivo->getCantidadRating() > 0) {
                                    $punteo = $Archivo->getRating() / $Archivo->getCantidadRating();
                                };
                                echo $punteo;
                                ?>">
                                </div>
                                <span class="help-block">
                                    Cantidad de veces punteado <?php echo $Archivo->getCantidadRating() > 0 ? $Archivo->getCantidadRating() : '0' ?>
                                </span>
                            </div>
                            <div class="col-md-12">
                                <h3>Datos del Usuario</h3>
                                <hr/>
                                <?php if ($Archivo->getUsuario()->getImagen()): ?>
                                    <img alt="" style="width:30px"  class="img-circle" src="<?php echo$Archivo->getUsuario()->getImagen() ?>"/>
                                <?php else: ?>
                                    <img alt="" style="width:30px"  class="img-circle" src="/assets/admin/layout/img/avatar.png"/>
                                <?php endif; ?>
                                <?php echo $Archivo->getUsuario()->getUsuario() ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>