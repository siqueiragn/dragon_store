<?php
require('MYSQL.php');

class ProdutoDAO {
	public function __construct(){
		
	}

	public static function insert(Produto $prod){
		$db = new MYSQL();
		$query = "INSERT INTO Produto VALUES ('". $prod->getIdProduto() . 
		"','". $prod->getNome() . 
		"','". $prod->getPreco() . 
		"','". $prod->getFoto() . 
		"','". $prod->getQuantidade() . 
		"','". $prod->getObservacoes() . "')";
		$db->execute($query);
	}
	
}
	?>