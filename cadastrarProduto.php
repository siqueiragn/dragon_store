<?php
include('app/Produto.class.php');
include('app/ProdutoDAO.class.php');

$prod = new Produto(1,"Teste",123,123,"123","123");

ProdutoDAO::insert($prod);

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Formul�rio</title>
</head>
<body>
<form method="POST" action="http://www.inf.ufrgs.br/~rcpinto/testador.php/">
<fieldset><legend>Dados</legend>
Nome do Produto: <input type="text" name="nome" required><br>
Foto do Produto: <input type="file"><br>
Quantidade: <input type="number" name="quantidade">
Pre�o: <input type="text" name="preco">
<!--Estado Civil: <input type="radio" name="ec" value="C">Casado<input type="radio" name="ec" value="S">Solteiro<input type="radio" name="ec" value="V">Vi�vo
-->
</fieldset>
<fieldset><legend>Observa��es</legend>
<textarea placeholder="Escreva alguma observa��o"></textarea><br>
<!--Deseja receber not�cias por email? <input type="checkbox" name="s" value="s"> Sim<input type="checkbox" name="n" value="n">N�o
--></fieldset>
<input type="submit">
</form>

