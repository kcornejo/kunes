<?php

/**
 * Materia form.
 *
 * @package    plan
 * @subpackage form
 * @author     Via
 */
class MateriaForm extends BaseMateriaForm {

    public function configure() {
        $this->setWidget('descripcion', new sfWidgetFormInputText(array(), array('class' => 'form-control input-xlarge')));
    }

}
