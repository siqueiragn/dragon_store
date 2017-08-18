<?php

class Produto
{
	private $idProduto;
	private $nome;
	private $preco;
	private $quantidade;
	private $observacoes;
	private $foto;

	public function __construct ($idProduto, $nome, $preco, $quantidade, $foto, $observacoes){
		$this->idProduto = $idProduto;
		$this->nome = $nome;
		$this->preco = $preco;
		$this->quantidade = $quantidade;
		$this->foto = $foto;
		$this->observacoes = $observacoes;
	}

	/*public function toString() {
			return $this->nome;
	}*/
	
	public function getIdProduto(){
		return $this->idProduto;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getPreco(){
		return $this->preco;
	}
	public function getQuantidade(){
		return $this->quantidade;
	}
	public function getObservacoes(){
		return $this->observacoes;
	}
	public function getFoto(){
		return $this->foto;
	}
	
}


?>