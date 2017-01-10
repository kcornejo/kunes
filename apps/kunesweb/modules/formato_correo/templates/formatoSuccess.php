<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-purple-sharp">
                    <i class="fa fa-inbox"></i>
                    Formato
                </div>
                <div class="actions">
                    <a class="btn btn-warning" href="<?php echo url_for('formato_correo/index') ?>">
                        <i class="fa fa-arrow-circle-left"></i>
                        Regresar
                    </a>
                    <a class="btn btn-info" href="<?php echo url_for('inicio/index') ?>">
                        <i class="fa fa-home"></i>
                        Inicio
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <form method="POST" action="<?php echo url_for('formato_correo/formato') . '?id=' . $id ?>" class="form">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-body">
                                <div class="form-group">
                                    <?php echo $form ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Comodin</th>
                                        <th>Descripcion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($tabla as $comodin => $descripcion): ?>
                                        <tr>
                                            <td><?php echo $comodin ?></td>
                                            <td><?php echo $descripcion ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="form-actions">
                        <a class="btn btn-warning" href="<?php echo url_for('formato_correo/index') ?>">
                            <i class="fa fa-arrow-circle-left"></i>
                            Regresar
                        </a>
                        <button class="btn btn-success" type="submit">
                            <i class="fa fa-save"></i>
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>