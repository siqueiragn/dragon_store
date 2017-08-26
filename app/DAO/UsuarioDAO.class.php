<?php
require('../app/MYSQL.class.php');
class UsuarioDAO {
	public function __construct(){
		parent::__construct();
	}
	public static function insert(Usuario $user){
		$db = new MYSQL();
		$query = "INSERT INTO Usuario VALUES ('". $user->getIdUsuario() . 
		"','". MYSQL::filtrar($user->getNome()) . 
		"','". MYSQL::filtrar($user->getEmail()). 
		"','". password_hash(MYSQL::filtrar($user->getSenha()), PASSWORD_DEFAULT) . 
		"','". MYSQL::filtrar($user->getCep()) . 
		"','". MYSQL::filtrar($user->getComplemento()) . 
		"','". MYSQL::filtrar($user->getAdmin()) . "')";
		$db->exec($query);
	}
	
	
}