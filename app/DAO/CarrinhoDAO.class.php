<?php
require '../app/MYSQL.class.php';

class CarrinhoDAO {
	public function __construct(){
		
	}
	
	public static function loadBuyed($id){
		$db = new MYSQL();
		$query = "SELECT * FROM Carrinho WHERE id_usuario = ".MYSQL::filtrar($id)." AND comprou = 1"; 
		return $db->exec($query);
	}
	
	public static function loadProdutoByChart($id,$comprou = 0){
		$db = new MYSQL();
		$query = "SELECT * FROM Produto INNER JOIN Carrinho ON Produto.id_produto = Carrinho.id_produto WHERE carrinho.id_usuario = ".MYSQL::filtrar($id);
		if($comprou == 1)
		$query .=" AND comprou = 1";
		return $db->exec($query);
	}
}
	
	?>