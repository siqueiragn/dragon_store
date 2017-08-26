<?php
class Usuario{
	private $idUsuario;
	private $nome;
	private $email;
	private $senha;
	private $cep;
	private $complemento;
	private $isAdmin;
	
	function __construct($idUsuario,$nome,$email,$senha,$cep,$complemento,$isAdmin){
		$this->idUsuario = $idUsuario;
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
		$this->cep = $cep;
		$this->complemento = $complemento;
		$this->isAdmin = $isAdmin;
	}
	
	public function getSenha(){
		return $this->senha;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getIdUsuario(){
		return $this->idUsuario;
	}
	public function getNome(){
		return $this->nome;
	}
	public function getCep(){
		return $this->cep;
	}
	public function getComplemento(){
		return $this->complemento;
	}
	public function getAdmin(){
		return $this->isAdmin;
	}
}