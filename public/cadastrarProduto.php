<?php
require('../app/DTO/Produto.class.php');
require('../app/DAO/ProdutoDAO.class.php');
require('../app/DAO/CategoriaDAO.class.php');
require('../app/DTO/Categoria.class.php');
session_start();
if ($_SESSION['autenticado'] != 'OK' AND $_SESSION['isAdmin'] != 1)
    header('Location: login.php');
?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dragon Store</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body class="fixed rei">

<nav class="navbar navbar-expand-md fixed-top black-back-transparent ">
    <a class="navbar-brand text-white" href="index.php">Dragon Store</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active text-white">
                <a class="nav-link text-white" href="dashboard.php">Meus Dragões<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="perfil.php">Perfil</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="resultado.php" method="POST">
            <input class="form-control mr-sm-2" name="pesquisa" type="text" placeholder="Search" aria-label="Search">
            <input class="btn btn-outline-success my-2 my-sm-0" value="Search" type="submit">
        </form>
        <a class="nav-link text-white" href="carrinho.php"><i
                    class="material-icons"> shopping_cart</i></a>
        <a class="nav-link bg-danger text-white" href="../app/logout.php">logout</a>
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-12 align-items-center">

            <form class="black-back-transparent card" enctype="multipart/form-data" method="POST">
                <!-- COLOCAR UM ACTION DEPOIS -->

                <legend>Dados</legend>

                <div class="row">
                    <div class="col-6 align-self-center">
                        <label for="nome" class="sr-only"> Nome do Produto: </label>
                        <input class="form-control" placeholder="Nome do produto" type="text" name="nome" required><br>

                        <label for="arquivo" class="custom-file-input sr-only"> Foto do Produto: </label>
                        <input class="form-control" placeholder="Arquivo" type="file" name="arquivo"><br>

                        <label for="quantidade" class="sr-only"> Quantidade: </label>
                        <input class="form-control" placeholder="Quantidade" type="number" name="quantidade">

                        <label for="preco" class="sr-only"> Preço:</label>
                        <input class="form-control" placeholder="Preço" type="text" name="preco">

                        <legend style="text-white">Categoria</legend>
                        <select name="categoria">
                            <?php
                            $resultado = CategoriaDAO::loadAll();
                            foreach ($resultado as $line) {

                                echo "<option value=" . $line['id_categoria'] . ">" . $line['nome'] . " </option>";
                            } ?>
                        </select>

                        <legend>Descrição</legend>
                        <textarea class="form-control" placeholder="Descricao do produto"
                                  name="descricao"></textarea><br>

                        <input class="btn btn-success" type="submit">
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>



<?php 
/*if ($_FILES['arquivo']['type'] == 'image/gif'
 || $_FILES['arquivo']['type'] == 'image/jpeg'
 || $_FILES['arquivo']['type'] == 'image/jpg'
 || $_FILES['arquivo']['type'] == 'image/png'){
 */
$destino = 'img/' . @$_FILES['arquivo']['name'];
$arquivo_tmp = @$_FILES['arquivo']['tmp_name'];
move_uploaded_file( $arquivo_tmp, $destino  );
if(isset($_POST['nome']))
	ProdutoDAO::insert(new Produto(0,@$_POST['nome'],@$_POST['preco'],@$_POST['quantidade'],@$_FILES['arquivo']['name'],@$_POST['descricao'],@$_POST['categoria']));
	$_POST['nome'] = '';
	unset($_POST);
	
?>
