<?php 
require('../app/DAO/ProdutoDAO.class.php');

$resultado = ProdutoDAO::loadByID(2);

foreach ($resultado as $line){
	echo "<br>".$line['id_produto'] . "<br>";
}
?>