<?php
class Usuario{
	private $idUsuario;
	private $nome;
	private $email;
	private $senha;
	private $cep;
	private $numeroCasa;
    private $rua;
	private $bairro;
	private $cidade;
	private $uf;
	private $complemento;
	private $isAdmin;
	
	
	
	function __construct($nome,$email,$senha,$cep,$complemento, $isAdmin, $numeroCasa, $rua, $bairro, $cidade, $uf){
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = $senha;
		$this->cep = $cep;
        $this->numeroCasa = $numeroCasa;
		$this->rua = $rua;
		$this->bairro = $bairro;
		$this->cidade = $cidade;
		$this->uf = $uf;
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

    public function getNumeroCasa()
    {
        return $this->numeroCasa;
    }
    public function getBairro()
    {
        return $this->bairro;
    }
    public function getRua()
    {
        return $this->rua;
    }
    public function getUf()
    {
        return $this->uf;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
}