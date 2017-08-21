<?php
require 'app/MYSQL.class.php';

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
		"','". $prod->getCategoria() . 
		"','". $prod->getDescricao() . "')";
		$db->execute($query);
	}
	
}
	?>