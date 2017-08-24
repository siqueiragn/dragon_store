<!--http://www.codigosnaweb.com/forum/viewtopic.php?t=8031 - CALCULO DE FRETE-->

<?php
require('../app/DAO/CarrinhoDAO.class.php');
session_start();
if($_SESSION['autenticado'] != 'OK')
	header('Location: login.php');
	
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

  <div class="col-md-8">
                	<?php if($_SESSION['autenticado'] != 'OK'){?>
                   <div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-sm">

                <div class="col-md-8">
                    <ul class="nav navbar-nav">
                        <li class="nav-item col-2"><a class="navbar-brand" href="index.php"> Dragon Store </a></li>
                        <!--colocar if para verificar se o usuário está logado, se estiver mostra o bloco do próximo
                        comentário-->
                        <li class="nav-item col-2"><a class="nav-link" href="login.php"> Login</a></li>
                        <li class="nav-item col-2"><a class="nav-link" href="cadastro.php"> Cadastre - se</a></li>
                    </ul>
                </div>

                <div class="col-md-3 form-inline my-2 my-lg-0">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>

                <div class="col-md-1">
                <a class="nav-link text-white" href="carrinho.php"><i
                        class="material-icons"> shopping_cart</i></a></nav>
            </nav>
        </div>
    </div>
</div>
<?php } else { ?>
               	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		    <a class="navbar-brand" href="index.php">Dragon Store</a>
		    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
		            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="navbar-toggler-icon"></span>
		    </button>
		
		    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		        <ul class="navbar-nav mr-auto">
		            <li class="nav-item active">
		                <a class="nav-link" href="dashboard.php">Meus Dragões<span class="sr-only">(current)</span></a>
		            </li>
		            <li class="nav-item">
		                <a class="nav-link" href="perfil.php">Perfil</a>
		            </li>
		        </ul>
		        <form class="form-inline mt-2 mt-md-0">
		            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
		            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		        </form>
		        <a class="nav-link text-white" href="carrinho.php"><i
		                    class="material-icons"> shopping_cart</i></a>
		        <a class="nav-link bg-danger text-white" href="index.php?logout=1">logout</a>
		    </div>
		</nav> 
                    <?php }
                    ?>
                </div>

<br/>

<hr class="featurette-divider">

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
                            <?php echo "<h4 class='price'>Preço R$:<span> " . $line['preco'] . "</span></h4>"; ?>
                            <i class="material-icons">delete</i>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>


<?php }
$_SESSION['carrinho'] = substr_replace ( $acm , '' , strlen($acm)-1 );
?>

<br/>

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
