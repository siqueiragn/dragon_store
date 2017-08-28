<?php
require('../app/MYSQL.class.php');
class UsuarioDAO {
	public function __construct(){
		parent::__construct();
	}
	public static function insert(Usuario $user){
		$db = new MYSQL();
		$query = "INSERT INTO Usuario (Nome, Email, senha, cep, complemento, is_admin, numero, rua, bairro, cidade, uf)  VALUES ('". /* $user->getIdUsuario() . 
		"','".  */MYSQL::filtrar($user->getNome()) . 
		"','". MYSQL::filtrar($user->getEmail()). 
		"','". password_hash(MYSQL::filtrar($user->getSenha()), PASSWORD_DEFAULT) . 
		"','". MYSQL::filtrar($user->getCep()) . 
		"','". MYSQL::filtrar($user->getComplemento()) . 
		"','". MYSQL::filtrar($user->getAdmin()) . 
		"','". MYSQL::filtrar($user->getNumeroCasa()) .
		"','". MYSQL::filtrar($user->getRua()).
		"','". MYSQL::filtrar($user->getBairro()).
		"','". MYSQL::filtrar($user->getCidade()).
		"','" .MYSQL::filtrar($user->getUf()).
		"')";
		$db->exec($query);
	}

    public static function loadByName($nome){
        $db = new MYSQL();
        $query = "SELECT * FROM usuario";
        if($nome != '')
            $query .= " WHERE nome LIKE '%" . MYSQL::filtrar($nome)."%'";
        return $db->exec($query);
    }
	
	
}