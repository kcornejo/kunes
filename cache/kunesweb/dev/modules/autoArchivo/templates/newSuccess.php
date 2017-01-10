<?php use_helper('I18N', 'Date') ?>
<?php include_partial('archivo/assets') ?>
<div class="portlet light bg-inverse">
    <div class="portlet-title">
        <div class="caption font-purple-plum">
            <i class="fa fa-plus"></i>
            <span class="caption-subject bold uppercase"> <?php echo __('New Archivo', array(), 'messages') ?></span>
        </div>
    </div>
    <div class="portlet-body">
        <?php include_partial('archivo/flashes') ?>

        <div id="sf_admin_header">
            <?php include_partial('archivo/form_header', array('archivo' => $archivo, 'form' => $form, 'configuration' => $configuration)) ?>
        </div>

        <div id="sf_admin_content">
            <?php include_partial('archivo/form', array('archivo' => $archivo, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
        </div>

        <div id="sf_admin_footer">
            <?php include_partial('archivo/form_footer', array('archivo' => $archivo, 'form' => $form, 'configuration' => $configuration)) ?>
        </div>
    </div>
</div>