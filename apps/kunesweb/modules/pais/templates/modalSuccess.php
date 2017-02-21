<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Nuevo Pais</h4>
        </div>
        <div class="modal-body">
            <form class="form form_ajax" method="POST" action="<?php echo url_for("pais/modal") ?>">
                <div class="form-body">
                    <div class="form-row">
                        Descripcion: 
                        <?php echo $form['descripcion'] ?>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i>
                        Guardar
                    </button>
                    <button type="button" data-dismiss="modal" class="btn btn-danger">
                        <i class="fa fa-times-circle"></i>
                        Cerrar
                    </button>
                </div>
                <?php echo $form->renderHiddenFields() ?>
            </form>
        </div>
    </div>
</div>
