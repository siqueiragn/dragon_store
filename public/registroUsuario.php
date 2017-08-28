<?php 
require('../app/DAO/UsuarioDAO.class.php');
require('../app/DTO/Usuario.class.php');
UsuarioDAO::insert(new Usuario($_POST['nome'],
		$_POST['email'],
		$_POST['password'],
		$_POST['cep'],
		$_POST['complemento'],
		0, 
		$_POST['numeroCasa'],
		$_POST['rua'],
		$_POST['bairro'],
		$_POST['cidade'],
		$_POST['uf']));
header ('Location: login.php');
?>