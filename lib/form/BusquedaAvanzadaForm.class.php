<?php

class BusquedaAvanzadaForm extends sfForm{

	public function configure(){
		$listadoTipos = array("Usuario" => "Usuario", 'Archivo' => "Archivo");
		$this->setWidget("Tipo", new sfWidgetFormChoice(array('choices' => $listadoTipos), array('class' => 'form-control input-medium select2me')));
		$this->setWidget("Valor", new sfWidgetFormInputText(array(), array("class" => "form-control input-xlarge")));
		$this->setValidator("Tipo", new sfValidatorString(array("required" => true)));
		$this->setValidator("Valor", new sfValidatorString(array("required" => true)));
		$this->widgetSchema->setNameFormat("busqueda_avanzada[%s]");
	}
}

?>
