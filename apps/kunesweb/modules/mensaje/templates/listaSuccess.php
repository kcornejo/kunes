<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-purple-sharp">
                    <i class="fa fa-list"></i>
                    Listado de Mensajes
                </div>
                <div class="actions">
                    <a class="btn btn-info btn-circle" href="<?php echo url_for('mensaje/nuevo') ?>">
                        <i class="fa fa-plus"></i>
                        Nuevo
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Usuario</th>
                                <th>Mensaje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mensaje as $unico): ?>
                                <?php if ($unico->getUltimoMensaje()): ?>
                                    <tr>
                                        <td><?php echo $unico->getUltimoMensaje()->getCreatedAt('d/m/Y H:i:s') ?></td>
                                        <td>
                                            <?php if ($unico->getUltimoMensaje()->getImagenUsuario()): ?>
                                                <img style="width: 15%" alt="" class="img-circle" src="<?php echo $unico->getUltimoMensaje()->getImagenUsuario() ?>"/>
                                            <?php else: ?>
                                                <img style="width: 15%" alt="" class="img-circle" src="/assets/admin/layout/img/avatar.png"/>
                                            <?php endif; ?>
                                            &nbsp;&nbsp;&nbsp;
                                            <b><?php echo $unico->getUltimoMensaje()->getUsuario() ?></b>
                                        </td>
                                        <td>
                                            <?php echo $unico->getUltimoMensaje()->getContenido() ?>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>