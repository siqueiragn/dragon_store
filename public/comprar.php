<?php 
session_start();
require('../app/DAO/CarrinhoDAO.class.php');

echo $_SESSION['carrinho'];
CarrinhoDAO::updateComprados($_SESSION['idUsuario'],$_SESSION['carrinho']);
header("Location: dashboard.php")
?>