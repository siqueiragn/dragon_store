<!--http://www.codigosnaweb.com/forum/viewtopic.php?t=8031 - CALCULO DE FRETE-->

<?php
require('../app/DAO/CarrinhoDAO.class.php');
session_start();
?>

<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="deion" content="">
    <meta name="author" content="">

    <title>Dragon Store - Carrinho</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="css/carrinho.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md">

                <div class="col-md-8">
                    <ul class="nav navbar-nav">
                        <li class="nav-item col-2"><a class="navbar-brand" href="index.php"> Dragon Store </a></li>
                        <!--colocar if para verificar se o usuário está logado, se estiver mostra o bloco do próximo
                        comentário-->
                        <li class="nav-item col-2"><a class="nav-link" href="login.php"> Login</a></li>
                        <li class="nav-item col-2"><a class="nav-link" href="cadastro.php"> Cadastre - se</a></li>
                        <!--
                            <div class="dropdown">
                            <ul class="dropdown-menu">
                                <li class="nav-item col">Bem vindo //nome</li>
                                <li class="nav-item col"><img src="" class="rounded"></li>
                                <div class="preview-thumbnail nav nav-tabs">
                        <li class="active"><a data-target="#pic-1" data-toggle="tab"><img
                                        src="img/gretchen.jpg"/></a></li>
                    </div>
                            </ul>
                        </div>-->

                    </ul>
                </div>

                <div class="col-md-3 form-inline my-2 my-lg-0">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-md-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-md-0" type="submit">Search</button>
                    </form>
                </div>

                <div class="col-md-1">
                    <a class="nav-link text-white" href="carrinho.php"><i
                                class="material-icons"> shopping_cart</i></a>
            </nav>


            </nav>
        </div>
    </div>
</div>

<br/>

<hr class="featurette-divider">

<?php
$result = CarrinhoDAO::loadProdutoByChart($_SESSION['idUsuario']);
foreach ($result as $line) {
    ?>

    <div class="container">
        <div class="col-sm-12">
            <div class="card black text-white">

                <div class="row">

                    <div class="col-md-4 cta-contents">
                        <?php echo "<img class='rounded-circle'
                     src='img/" . $line['foto'] . "'alt='Imagem' width='140' height='140'>"; ?>
                    </div>

                    <div class="col-md-8 cta-contents">
                        <h1 class="cta-title">
                            <?php echo "<h3 class='product-title'>" . $line['nome'] . "</h3><br/>"; ?>
                        </h1>
                        <div class="cta-desc">
                            <?php echo "<p class='product-description'>" . $line['descricao'] . "</p><br/>"; ?>
                            <br/>
                            <?php echo "<small>Estoque:<span> " . $line['quantidade'] . "</span></small><br/>"; ?>
                            <?php echo "<h4 class='price'>Preço R$:<span> " . $line['preco'] . "</span></h4>"; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


<?php } ?>

<br/>

<hr class="featurette-divider">

<div class="container-fluid">
    <div class="row">
        <div class="col-md-9">
        </div>
        <div class="col-md-3">
            <div class="d-flex ml-3">
                <button class="btn-lg btn btn-danger" type="button"><a class="text-white"
                                                                       href="carrinho.php"> Comprar</a>
                </button>
            </div>
        </div>
    </div>
</div>

<hr class="featurette-divider">

<footer>
    <div class="text-center">
        <p><a href="http://canoas.ifrs.edu.br">2017 - IFRS Campus Canoas</a></p>
        <p>Feito por: Gabriel Nunes, Lucas Matos, Raul Steffen</p>
    </div>
</footer>

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>

</body>
</html>
