<?php
require('../MYSQL.php');

class UsuarioDAO {
	public function __construct(){
		
	}
	public static function insert(Usuario $user){
		$db = new MYSQL();
		$query = "INSERT INTO Usuario VALUES ('". $user->getIdUsuario() . 
		"','". $user->getNome() . 
		"','". $user->getEmail() . 
		"','". $user->getSenha() . 
		"','". $user->getCep() . 
		"','". $user->getComplemento() . 
		"','". $user->getAdmin() . "')";
		$db->execute($query);
	}
	
	
}