<?php
require('../app/DTO/Produto.class.php');
require('../app/DAO/ProdutoDAO.class.php');
require('../app/DAO/CategoriaDAO.class.php');
require('../app/DTO/Categoria.class.php');
session_start();
if($_SESSION['autenticado'] != 'OK')
	header('Location: login.php');

 /*if ($_FILES['arquivo']['type'] == 'image/gif'
   || $_FILES['arquivo']['type'] == 'image/jpeg'
   || $_FILES['arquivo']['type'] == 'image/jpg'
   || $_FILES['arquivo']['type'] == 'image/png'){
	   */
   $destino = 'img/' . @$_FILES['arquivo']['name'];
   $arquivo_tmp = @$_FILES['arquivo']['tmp_name'];
	move_uploaded_file( $arquivo_tmp, $destino  );
	
	ProdutoDAO::insert(new Produto(0,@$_POST['nome'],@$_POST['preco'],@$_POST['quantidade'],@$_FILES['arquivo']['name'],@$_POST['descricao'],@$_POST['categoria']));


  
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formulário</title>
</head>
<body>
<form enctype="multipart/form-data" method="POST"> <!-- COLOCAR UM ACTION DEPOIS -->

<fieldset><legend>Dados</legend>
Nome do Produto: <input type="text" name="nome" required><br>
Foto do Produto: <input type="file" name="arquivo"><br>
Quantidade: <input type="number" name="quantidade">
Preço: <input type="text" name="preco">
Categoria: <select name="categoria">
<?php 
$resultado = CategoriaDAO::loadAll();
foreach ($resultado as $line){

echo "<option value=".$line['id_categoria'].">". $line['nome']." </option>";
 }?>
</select>
</fieldset>
<fieldset><legend>Descrição</legend>
<textarea placeholder="Escreva alguma observação" name="descricao"></textarea><br>
<!--Deseja receber not�cias por email? <input type="checkbox" name="s" value="s"> Sim<input type="checkbox" name="n" value="n">N�o
--></fieldset>
<input type="submit">
</form>




