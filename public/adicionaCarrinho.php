<?php 
session_start();
if($_SESSION['autenticado'] != 'OK')
	header('Location: login.php');

require('../app/DAO/CarrinhoDAO.class.php');
CarrinhoDAO::insert($_POST['idProd'], $_SESSION['idUsuario'], $_POST['qtde'], $_POST['preco']);
CarrinhoDAO::updateQuantidade($_POST['idProd'],$_POST['qtde'],'-');
header("Location: carrinho.php"); 


?>