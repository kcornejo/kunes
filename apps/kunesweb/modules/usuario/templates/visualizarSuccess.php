<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-blue">
                    <i class="fa fa-user"></i> Perfil
                </div>
                <div class="actions">
                    <?php if ($usuario->getId() == sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad')): ?>
                        <a class="btn btn-circle btn-info" href="<?php echo url_for('usuario/perfil') ?>">
                            <i class="fa fa-cogs"></i>
                        </a>
                        <a class="btn btn-circle btn-success" href="<?php echo url_for('usuario/universidad') ?>">
                            <i class="fa fa-university"></i>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="portlet-body">
                <div class="row">
                    <div class="col-md-3">
                        <?php if ($usuario->getImagen()): ?>
                            <img style="width:100%" alt="" class="img-circle" src="<?php echo $usuario->getImagen() ?>"/>
                        <?php else: ?>
                            <img style="width:100%" alt="" class="img-circle" src="/assets/admin/layout/img/avatar.png"/>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-12">
                                <h3><?php echo $usuario->getUsuario() ?></h3>
                                <h4>Fecha de Nacimiento: <?php echo $usuario->getFechaNacimiento() ?></h4>
                                <h4>Genero: <?php echo $usuario->getGenero() ?></h4>
                                <br/><br/>
                                <h4><i>"<?php echo $usuario->getFrase() ?>"</i></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>