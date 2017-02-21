<?php

/**
 * Carrera form.
 *
 * @package    plan
 * @subpackage form
 * @author     Via
 */
class CarreraForm extends BaseCarreraForm {

    public function configure() {
        $this->setWidget('descripcion', new sfWidgetFormInputText(array(), array('class' => 'form-control input-xlarge')));
    }

}
