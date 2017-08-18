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
<title>Formulário</title>
</head>
<body>
<form method="POST" action="http://www.inf.ufrgs.br/~rcpinto/testador.php/">
<fieldset><legend>Dados</legend>
Nome do Produto: <input type="text" name="nome" required><br>
Foto do Produto: <input type="file"><br>
Quantidade: <input type="number" name="quantidade">
Preço: <input type="text" name="preco">
<!--Estado Civil: <input type="radio" name="ec" value="C">Casado<input type="radio" name="ec" value="S">Solteiro<input type="radio" name="ec" value="V">Viúvo
-->
</fieldset>
<fieldset><legend>Observações</legend>
<textarea placeholder="Escreva alguma observação"></textarea><br>
<!--Deseja receber notícias por email? <input type="checkbox" name="s" value="s"> Sim<input type="checkbox" name="n" value="n">Não
--></fieldset>
<input type="submit">
</form>

