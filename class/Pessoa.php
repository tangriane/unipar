<?php

abstract class Pessoa extends Cliente { //apenas uma abstração por isso o abstract

	private $tipo;

	public function getTipo() {
		return $this->tipo;
	}

	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}

	
}

?>