<!--http://www.codigosnaweb.com/forum/viewtopic.php?t=8031 - CALCULO DE FRETE-->

<?php
require('../app/DAO/CarrinhoDAO.class.php');
session_start();
$_SESSION['totalizando'] = 0;
if ($_SESSION['autenticado'] != 'OK')
    header('Location: login.php');


if (isset($_GET['delete'])) {

    CarrinhoDAO::delete($_GET['delete']);
    CarrinhoDAO::updateQuantidade($_GET['idProd'], $_GET['qtde'], '+');
    header("Location: carrinho.php");
}


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


<nav class="navbar navbar-expand-md fixed-top black-back-transparent">
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

<?php
$result = CarrinhoDAO::loadProdutoByChart($_SESSION['idUsuario']);
$acm = '';
foreach ($result as $line) {
    $acm .= $line['id_produto'] . ",";
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
                            <?php echo "<small>Quantidade:<span> " . $line['quantidade'] . "</span></small><br/>"; ?>
                            <?php echo "<h4 class='price'>Preço R$<span> " . $line['preco'] * $line['quantidade'] . "</span></h4>";
                            ?>
                            <?php echo "<a class='text-white' href='carrinho.php?delete=" . $line['id_carrinho'] . "&idProd=" . $line['id_produto'] . "&qtde=" . $line['quantidade'] . "'>" ?>
                            <i class="material-icons">delete</i>
                            <?php echo "</a>" ?>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <?php
    $_SESSION['totalizando'] += $line['preco'] * $line['quantidade'];
}

$_SESSION['carrinho'] = substr_replace($acm, '', strlen($acm) - 1);
?>

<br/>
<?php if ($acm != '') {
    echo "<div class='container'>
    <div class='row'>
        <div class='col-12'>
            <div class='card black text-center'>
               <h4 class='text-white price'>TOTAL NO CARRINHO R$<span> " . $_SESSION['totalizando'] . "</span></h4>
            </div>
        </div>
    </div>
</div>";
    ?>
    <hr class="featurette-divider">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
            </div>
            <div class="col-md-3">
                <div class="d-flex ml-3">
                    <button class="btn-lg btn btn-danger" type="button"><a class="text-white"
                                                                           href="comprar.php"> Comprar</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php } else {
    echo "<div class='container'>
    <div class='row'>
        <div class='col-12'>
            <div class='card black text-center'>
                <h3 class='text-white'>Vossa senhoria " ./* .$_SESSION['cidade']. */
        "não possui nenhum
                    dragão no seu carrinho.</h3>
            </div>
        </div>
    </div>
</div>";
}
?>
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



