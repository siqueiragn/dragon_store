<?php

class Produto
{
	private $idProduto;
	private $nome;
	private $preco;
	private $quantidade;
	private $descricao;
	private $categoria;
	private $foto;

	public function __construct ($idProduto, $nome, $preco, $quantidade, $foto, $descricao, $categoria){
		$this->idProduto = $idProduto;
		$this->nome = $nome;
		$this->preco = $preco;
		$this->quantidade = $quantidade;
		$this->foto = $foto;
		$this->descricao = $descricao;
		$this->categoria = $categoria;
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
	public function getDescricao(){
		return $this->descricao;
	}
	public function getFoto(){
		return $this->foto;
	}
	public function getCategoria(){
		return $this->categoria;
	}
	
}


?>