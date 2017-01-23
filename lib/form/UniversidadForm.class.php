<?php

/**
 * Universidad form.
 *
 * @package    plan
 * @subpackage form
 * @author     Via
 */
class UniversidadForm extends BaseUniversidadForm {

    public function configure() {
        $this->setWidget('pais_id', new sfWidgetFormPropelChoice(array('model' => 'Pais', 'add_empty' => true), array('class' => 'form-control select2me input-xlarge')));
        $this->setWidget('descripcion', new sfWidgetFormInputText(array(), array('class' => 'form-control input-xlarge')));
    }

}
