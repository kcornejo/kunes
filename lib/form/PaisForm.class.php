<?php

/**
 * Pais form.
 *
 * @package    plan
 * @subpackage form
 * @author     Via
 */
class PaisForm extends BasePaisForm
{
  public function configure()
  {
      $this->setWidget('descripcion', new sfWidgetFormInputText(array(), array('class' => 'form-control')));
  }
}
