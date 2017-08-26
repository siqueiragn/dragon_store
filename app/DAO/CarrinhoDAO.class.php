<?php
require('../app/MYSQL.class.php');

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
		else 
			$query .=" AND comprou = 0";
		return $db->exec($query);
	}
	
	public static function insert($idProd, $idUsuario, $qtd, $preco){
				$db = new MYSQL();
				$query = "INSERT INTO Carrinho VALUES (0," .MYSQL::filtrar($idProd) .
				"," . MYSQL::filtrar($idUsuario) . 
				"," . MYSQL::filtrar($qtd) . 
				"," . MYSQL::filtrar($preco) * MYSQL::filtrar($qtd).
				",0)";
				$db->exec($query);
			
	}
	public static function updateQuantidade($id, $qtde, $signal){
		$db = new MYSQL();
		if($signal != '-')
			$signal = '+';
		$query = "UPDATE Produto SET Quantidade = Quantidade ". $signal . MYSQL::filtrar($qtde)." WHERE id_produto = ".MYSQL::filtrar($id);
		$db->exec($query);
	}
	
	public static function updateComprados($idUsuario, $produtos){
		$db = new MYSQL(); 
		$arr = explode(',', $produtos);
		foreach ($arr as $item){
			$query = "UPDATE Carrinho SET Comprou = 1 WHERE id_produto = ".$item. " AND id_usuario =" . $idUsuario;
			$db->exec($query);
		}
	}
	public static function delete($idCarrinho){
		$db = new MYSQL();
		$query = "DELETE FROM Carrinho WHERE id_Carrinho = ". MYSQL::filtrar($idCarrinho);
		$db->exec($query);
	}
}
	
	?>