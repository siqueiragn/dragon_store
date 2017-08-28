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
	
	function __construct($idUsuario,$nome,$email,$senha,$cep,$numeroCasa, $rua, $bairro, $cidade, $uf,$complemento,$isAdmin){
		$this->idUsuario = $idUsuario;
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

    /**
     * @return mixed
     */
    public function getNumeroCasa()
    {
        return $this->numeroCasa;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @return mixed
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }
}