<?php
require ('../app/Login.php');
?>
<html lang="pt-br">
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
<body>


<nav class="navbar navbar-default black-back-transparent fixed-top">

    <?php if ($_SESSION['autenticado'] == 'NOK') { ?>

        <a class="navbar-brand text-white" href="index.php"> Dragon Store </a>
        <a class="nav-link text-white" href="login.php"> Login</a>
        <a class="nav-link text-white" href="cadastro.php"> Cadastre - se</a>

    <?php }
    if ($_SESSION['autenticado'] == 'OK') {
        require('../app/DAO/UsuarioDAO.class.php');
        $result = UsuarioDAO::loadByName(@$_GET['nome']);
        foreach ($result as $line) {
            echo "<b class='text-white'>Bem vindo " . $line['nome'] . "</b>";
        }
    } ?>


    <div class="form-inline my-2 my-lg-0">
        <form class="form-inline my-2 my-lg-0" action="resultado.php" method="POST">
            <input class="form-control mr-sm-2" name="pesquisa" type="text" placeholder="Search"
                   aria-label="Search">
            <input class="btn btn-outline-success my-2 my-sm-0" value="Search" type="submit">
        </form>
    </div>
    <?php if ($_SESSION['autenticado'] == 'OK') { ?>

        <a class="nav-link text-white" href="carrinho.php">
            <i class="material-icons"> shopping_cart</i>
        </a>
        <a class="nav-link bg-danger text-white" href="../app/logout.php">logout</a>
    <?php } ?>

</nav>


<div class="fixed back">

    <div class="header-content">

        <div class="header-content-inner left my-2 my-lg-0">

            <h1 id="homeHeading">Dragon store</h1>

            <hr class="line">

            <p>A maior loja de dragões do Brasil</p>

            <hr class="line">

        </div>

    </div>

</div>

<br/>

<div class="container">
    <div class="row">

        <?php require('../app/DAO/ProdutoDAO.class.php');
        $result = ProdutoDAO::loadMPrice(3);
        foreach ($result as $line) { ?>

            <div class="col-lg-4">
                <div class="text-center">
                    <?php echo "<img class='rounded-circle' src='img/" . $line['foto'] . "'alt='Imagem' width='140' height='140'/>";
                    echo "<h2>" . $line['nome'] . "</h2>";
                    echo "<p><b>DESCRIÇÃO</b><br/>" . $line['descricao'] . "</p>";
                    echo "<b>R$: " . $line['preco'] . "</b>";

                    echo "<br/>
                <p><a class='btn btn-secondary' href='../public/produto.php?id=" . $line['id_produto'] . "' role='button'>Ver mais</a></p>"; ?>
                </div>
            </div>

        <?php } ?>

    </div>
</div>

<br/>
<hr class="featurette-divider">

<footer>
    <div class="text-center">
        <p><a href="http://canoas.ifrs.edu.br">2017 - IFRS Campus Canoas</a></p>
        <p>Feito por: Gabriel Nunes, Lucas Matos, Raul Steffen</p>
    </div>
</footer>

</div><!-- /.container -->

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>

</body>