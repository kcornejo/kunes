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
                <?php echo form_tag('archivo/carga', 'multipart=true') ?>
                    <div class="row">
                        <div class="col-md-8">
                            Descripcion:
                            <?php echo $form['Descripcion'] ?>
                        </div>
                    </div>
                <div class="row">
                        <div class="col-md-5">
                            Materia:
                            <?php echo $form['Materia'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            Carga de Archivo:
                            <?php echo $form['Archivo'] ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            Etiqueta:
                            <?php echo $form['Etiqueta'] ?>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-success btn-circle" type="submit">
                            <i class="fa fa-upload"></i>
                            Cargar
                        </button>
                    </div>
                    <?php echo $form->renderHiddenFields()?>
                <?php echo "</form>";?>
            </div>
        </div>
    </div>
</div>