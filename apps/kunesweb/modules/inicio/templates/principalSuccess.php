<?php foreach ($archivos as $archivo): ?>
<div class="row color-blue"  style="cursor:pointer;" onclick="window.location.href = '<?php echo url_for('archivo/detalle') . '?id=' . $archivo->getId() ?>'">
        <div class="col-md-2">
            <?php if ($archivo->getUsuario()->getImagen()): ?>
                <img alt="" style="width:100%"  class="img-circle" src="<?php echo$archivo->getUsuario()->getImagen() ?>"/>
            <?php else: ?>
                <img alt="" style="width:100%"  class="img-circle" src="/assets/admin/layout/img/avatar.png"/>
            <?php endif; ?>
        </div>
        <div class="col-md-7">
            <h3><?php echo $archivo->getUsuario() ? $archivo->getUsuario()->getUsuario() : '[SIN USUARIO]' ?></h3>
        </div>
        <div class="col-md-3">
            <i><?php echo $archivo->getCreatedAt('d/m/Y H:i') ?></i>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-7">
            subio
            <b><?php echo $archivo->getNombreArchivoOriginal() ?></b>
        </div>
    </div>
<?php endforeach; ?>
