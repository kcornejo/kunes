<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title">Nueva Materia</h4>
        </div>
        <div class="modal-body">
            <form class="form form_ajax" method="POST" action="<?php echo url_for("materia/modal") ?>">
                <div class="row">
                    <div class="col-md-3">
                        Descripcion:
                    </div>
                    <div class="col-md-9">
                        <?php echo $form['descripcion'] ?>
                    </div>
                </div>
                <br/>
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
