<?php
require 'app/MYSQL.class.php';

class ProdutoDAO {
	public function __construct(){
		
	}

	public static function insert(Produto $prod){
		if(is_null($prod))
		echo "Erro!";	
			else{
		$db = new MYSQL();
		$query = "INSERT INTO Produto VALUES ('". $prod->getIdProduto() . 
		"','". $prod->getNome() . 
		"','". $prod->getPreco() . 
		"','". $prod->getFoto() . 
		"','". $prod->getQuantidade() . 
		"','". $prod->getCategoria() . 
		"','". $prod->getDescricao() . "')";
		$db->exec($query);
		}
	}
	
	public static function loadByID($id){
		$db = new MYSQL();
		$query = "SELECT * FROM Produto WHERE id = " . $id;
		return $db->exec($query);
	}
	
}
	?>