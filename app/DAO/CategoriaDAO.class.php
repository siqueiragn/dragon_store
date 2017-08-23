<?php

class CategoriaDAO {
	public function __construct(){
	}
	
	public static function loadAll(){
		$db = new MYSQL();
		return $db->exec("SELECT * FROM Categoria");;
	}
	
	public static function loadCategoriaByID($id){
		$db = new MYSQL();
		$result = $db->exec("SELECT nome FROM Categoria WHERE id_categoria = ".MYSQL::filtrar($id));
		$linha = $result->fetch_assoc();
		return $linha['nome'];
	}
	
	
	
}