<?php 
session_start();
require('../app/DAO/CarrinhoDAO.class.php');


CarrinhoDAO::insert($_SESSION['idProd'], $_SESSION['idUsuario'], $_POST['qtde'], $_SESSION['preco']);
CarrinhoDAO::updateQuantidade($_SESSION['idProd'],$_SESSION['quantidadeTotal']-$_POST['qtde']);
header("Location: carrinho.php");
?>