<?php

class CategoriaDAO {
	public function __construct(){
	}
	
	public static function loadAll(){
		$db = new MYSQL();
		return $db->exec("SELECT * FROM Categoria");;
	}
	
	
	
	
}