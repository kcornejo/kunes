<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar" >
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true">
        <i class="icon-bell"></i>
        <span class="badge badge-default" id="contador_notificacion_archivo" url="<?php echo url_for('soporte/notificacionAjaxContador') ?>">
            0
        </span>
    </a>
    <ul class="dropdown-menu">
        <li class="external">
            <h3 ><span class="bold" style="z-index: 10000" id="alerta_notificacion_archivo"></span></h3>
        </li>
        <li >
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;">
                <ul data-initialized="1" class="dropdown-menu-list scroller ken_interval" data-handle-color="#637283" url="<?php echo url_for('soporte/notificacionAjax') ?>">
                </ul>
            </div>
        </li>
    </ul>
</li>
<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar" style="visibility:hidden;">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="icon-envelope-open"></i>
        <span class="badge badge-default">
            4 </span>
    </a>
    <ul class="dropdown-menu">
        <li class="external">
            <h3>You have <span class="bold">7 New</span> Messages</h3>
            <a href="page_inbox.html">view all</a>
        </li>
        <li>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;"><ul class="dropdown-menu-list scroller" style="height: 275px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                    <li>
                        <a href="inbox.html?a=view">
                            <span class="photo">
                                <img src="../../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                            </span>
                            <span class="subject">
                                <span class="from">
                                    Lisa Wong </span>
                                <span class="time">Just Now </span>
                            </span>
                            <span class="message">
                                Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                        </a>
                    </li>
                    <li>
                        <a href="inbox.html?a=view">
                            <span class="photo">
                                <img src="../../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                            </span>
                            <span class="subject">
                                <span class="from">
                                    Richard Doe </span>
                                <span class="time">16 mins </span>
                            </span>
                            <span class="message">
                                Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                        </a>
                    </li>
                    <li>
                        <a href="inbox.html?a=view">
                            <span class="photo">
                                <img src="../../assets/admin/layout3/img/avatar1.jpg" class="img-circle" alt="">
                            </span>
                            <span class="subject">
                                <span class="from">
                                    Bob Nilson </span>
                                <span class="time">2 hrs </span>
                            </span>
                            <span class="message">
                                Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                        </a>
                    </li>
                    <li>
                        <a href="inbox.html?a=view">
                            <span class="photo">
                                <img src="../../assets/admin/layout3/img/avatar2.jpg" class="img-circle" alt="">
                            </span>
                            <span class="subject">
                                <span class="from">
                                    Lisa Wong </span>
                                <span class="time">40 mins </span>
                            </span>
                            <span class="message">
                                Vivamus sed auctor 40% nibh congue nibh... </span>
                        </a>
                    </li>
                    <li>
                        <a href="inbox.html?a=view">
                            <span class="photo">
                                <img src="../../assets/admin/layout3/img/avatar3.jpg" class="img-circle" alt="">
                            </span>
                            <span class="subject">
                                <span class="from">
                                    Richard Doe </span>
                                <span class="time">46 mins </span>
                            </span>
                            <span class="message">
                                Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                        </a>
                    </li>
                </ul><div class="slimScrollBar" style="background: rgb(99, 114, 131) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
        </li>
    </ul>
</li>
<li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar" style="visibility:hidden;">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="icon-calendar"></i>
        <span class="badge badge-default">
            3 </span>
    </a>
    <ul class="dropdown-menu extended tasks">
        <li class="external">
            <h3>You have <span class="bold">12 pending</span> tasks</h3>
            <a href="page_todo.html">view all</a>
        </li>
        <li>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 275px;"><ul class="dropdown-menu-list scroller" style="height: 275px; overflow: hidden; width: auto;" data-handle-color="#637283" data-initialized="1">
                    <li>
                        <a href="javascript:;">
                            <span class="task">
                                <span class="desc">New release v1.2 </span>
                                <span class="percent">30%</span>
                            </span>
                            <span class="progress">
                                <span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">40% Complete</span></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="task">
                                <span class="desc">Application deployment</span>
                                <span class="percent">65%</span>
                            </span>
                            <span class="progress">
                                <span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">65% Complete</span></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="task">
                                <span class="desc">Mobile app release</span>
                                <span class="percent">98%</span>
                            </span>
                            <span class="progress">
                                <span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">98% Complete</span></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="task">
                                <span class="desc">Database migration</span>
                                <span class="percent">10%</span>
                            </span>
                            <span class="progress">
                                <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">10% Complete</span></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="task">
                                <span class="desc">Web server upgrade</span>
                                <span class="percent">58%</span>
                            </span>
                            <span class="progress">
                                <span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">58% Complete</span></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="task">
                                <span class="desc">Mobile development</span>
                                <span class="percent">85%</span>
                            </span>
                            <span class="progress">
                                <span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">85% Complete</span></span>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <span class="task">
                                <span class="desc">New UI release</span>
                                <span class="percent">38%</span>
                            </span>
                            <span class="progress progress-striped">
                                <span style="width: 38%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">38% Complete</span></span>
                            </span>
                        </a>
                    </li>
                </ul><div class="slimScrollBar" style="background: rgb(99, 114, 131) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(234, 234, 234) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
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
            <?php
            $usuario_id = sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad');
            $usuario = UsuarioQuery::create()->filterById($usuario_id)->filterByAdministrador(true)->findOne();
            ?>
            <?php if ($usuario): ?>
                <?php $administrador = sfContext::getInstance()->getUser()->getAttribute('administrador', null, 'seguridad'); ?>
                <?php if ($administrador): ?>
                    <a href="<?php echo url_for("soporte/cambiarPerfil")?>">
                        <i class="fa fa-eye"></i> Ver Como Usuario
                    </a>
                <?php else: ?>
                    <a href="<?php echo url_for("soporte/cambiarPerfil")?>">
                        <i class="fa fa-eye-slash"></i> Ver Como Admin
                    </a>
                <?php endif; ?>
            <?php endif; ?>
            <a href="<?php echo url_for('usuario/visualizar') . "?id=" . sfContext::getInstance()->getUser()->getAttribute('usuario', null, 'seguridad') ?>">
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