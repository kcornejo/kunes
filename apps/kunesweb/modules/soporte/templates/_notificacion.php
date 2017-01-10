<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar" >
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="icon-bell"></i>
        <span class="badge badge-default" id="contador_notificacion_archivo" url="<?php echo url_for('soporte/notificacionAjaxContador') ?>">
            0
        </span>
    </a>
    <ul class="dropdown-menu">
        <li class="external">
            <h3 ><span class="bold"  id="alerta_notificacion_archivo">12 pending notifications</span></h3>
        </li>
        <li >
            <ul class="dropdown-menu-list scroller ken_interval" style="height: 250px;" data-handle-color="#637283" url="<?php echo url_for('soporte/notificacionAjax') ?>">

            </ul>
        </li>
    </ul>
</li>
<li class="dropdown dropdown-user">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <?php if (sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'imagen')): ?>
            <img alt="" class="img-circle" src="<?php echo sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'imagen') ?>"/>
        <?php else: ?>
            <img alt="" class="img-circle" src="/assets/admin/layout/img/avatar.png"/>
        <?php endif; ?>
        <span class="username username-hide-on-mobile">
            <?php echo ucfirst(sfContext::getInstance()->getUser()->getAttribute('usuarioNombre', null, 'seguridad')); ?>
        </span>
        <i class="fa fa-angle-down"></i>
    </a>
    <ul class="dropdown-menu dropdown-menu-default">
        <li>
            <a href="<?php echo url_for('usuario/perfil') ?>">
                <i class="icon-user"></i> Mi Perfil
            </a>
            <a href="<?php echo url_for('seguridad/cambioclave') ?>">
                <i class="icon-refresh"></i> Cambio de Clave
            </a>
        </li>
        <li class="divider">
        </li>
        <li>
            <a href="<?php echo url_for('seguridad/logout') ?>">
                <i class="icon-key"></i> Cerrar Sesion </a>
        </li>
    </ul>
</li>
<li class="dropdown">
    <a href="<?php echo url_for('archivo/carga') ?>" class="dropdown-toggle" title="Cargar Archivo">
        <i class="fa fa-upload"></i>
        &nbsp;
    </a>
</li>