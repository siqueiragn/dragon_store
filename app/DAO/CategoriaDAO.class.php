<?php

class CategoriaDAO {
	public function __construct(){
	}
	
	public static function loadAll(){
		$db = new MYSQL();
		$db->execute("SELECT * FROM Categoria");
		return $db->get_result();
	}
	
	
	
	
}