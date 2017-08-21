<?php

class Categoria {
	private $idCategoria;
	private $Nome;
	public function __construct($idCategoria, $nome) {
		$this->idCategoria = $idCategoria;
		$this->nome = $nome;
	}
	
	public function getIdCategoria(){
		return $this->idCategoria;
	}
	public function getNome(){ 
		return $this->nome;
	}
	
}

?>
	