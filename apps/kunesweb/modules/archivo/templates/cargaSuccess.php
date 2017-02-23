<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered">
            <div class="portlet-title">
                <div class="caption font-purple-sharp">
                    <i class="fa fa-upload"></i>
                    Carga Archivo
                </div>
            </div>
            <div class="portlet-body">
                <?php echo form_tag('archivo/carga', 'multipart=true;class=form') ?>
                <div class="form-group">
                    Materia:
                    <?php echo $form['Materia'] ?>
                </div>
                <div class="form-group">
                    Profesor:
                    <?php echo $form['Profesor'] ?>
                </div>
                <div class="form-group">
                    Carga de Archivo:
                    <?php echo $form['Archivo'] ?>
                </div>
                <div class="form-group">
                    Descripcion:
                    <?php echo $form['Descripcion'] ?>
                </div>
                <div class="form-group">
                    Etiqueta:
                    <?php echo $form['Etiqueta'] ?>
                </div>
                <div class="form-actions">
                    <button class="btn btn-success btn-circle" type="submit">
                        <i class="fa fa-upload"></i>
                        Cargar
                    </button>
                </div>
                <?php echo $form->renderHiddenFields() ?>
                <?php echo "</form>"; ?>
            </div>
        </div>
    </div>
</div>