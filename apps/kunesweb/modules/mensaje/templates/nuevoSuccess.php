<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-green-haze">
                    <i class="fa fa-plus-circle"></i>
                    Nuevo Mensaje
                </div>
                <div class="actions">
                    <a class="btn btn-info btn-circle" href="<?php echo url_for('mensaje/index') ?>">
                        <i class="fa fa-list"></i>
                        Listado de Mensajes
                    </a>
                </div>
            </div>
            <div class="portlet-body">
                <?php echo $form->renderFormTag(url_for('mensaje/nuevo'), array('class' => 'form')) ?>
                <div class="form-body">
                    <?php echo $form ?>
                </div>
                <div class="form-actions">
                    <button class="btn btn-success btn-circle" type="submit">
                        <i class="fa fa-send"></i>
                        Enviar
                    </button>
                </div>
                <?php echo '</form>'; ?>
            </div>
        </div>
    </div>
</div>