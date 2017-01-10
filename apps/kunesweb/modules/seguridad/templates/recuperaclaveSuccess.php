<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Registro - KUNES</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <meta content="" name="description"/>
        <meta content="" name="author"/>
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
        <link href="/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="/assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME STYLES -->
        <link href="/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
        <link href="/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
        <link id="style_color" href="/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css"/>
        <link href="/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
        <link href="/css/kunesStyle.css" rel="stylesheet" type="text/css"/>
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="login">
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="index.html">
                <img src="/assets/admin/layout/img/logo-big.png" alt=""/>
            </a>
        </div>
        <div class="menu-toggler sidebar-toggler">
        </div>
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form" action="<?php echo url_for('seguridad/recuperaclave') ?>" method="post">
                <?php include_partial('soporte/avisos') ?>
                <h3 class="form-title">Registro</h3>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Correo</label>
                    <div class="input-icon">
                        <i class="fa fa-inbox"></i>
                        <?php echo $form['Correo'] ?>
                    </div>
                    <span class="error">
                        <?php echo $form['Correo']->renderError() ?>
                    </span>
                </div>
                <hr/>
                <div class="form-actions">
                    <a class="btn btn-warning" href="<?php echo url_for('seguridad/login') ?>">
                        <i class="m-icon-swapleft m-icon-white"></i>
                        Regresar 
                    </a>
                    <button type="submit"  style="float:right" class="btn green">
                        <i class="fa fa-key"></i>
                        Recuperar Clave
                    </button>

                </div>
                <?php echo $form->renderHiddenFields(); ?>
            </form>
        </div>
        <div class="copyright">
            <?php echo date('Y') ?> &copy; KUNES
        </div>
        <script src="/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="/assets/global/plugins/select2/select2.min.js"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/assets/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
        <script src="/assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
        <script src="/assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function () {
                Metronic.init(); // init metronic core components
                Layout.init(); // init current layout
                Login.init();
                Demo.init();
                // init background slide images
                $.backstretch([
                    "/assets/admin/pages/media/bg/1.jpg",
                    "/assets/admin/pages/media/bg/2.jpg",
                    "/assets/admin/pages/media/bg/3.jpg",
                    "/assets/admin/pages/media/bg/4.jpg"
                ], {
                    fade: 1000,
                    duration: 8000
                }
                );
            });
        </script>
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->
</html>