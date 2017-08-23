<?php 

if($_GET['logout']==1)
	session_start();
	$_SESSION['autenticado'] = 'NOK';

	?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>Dragon Store</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/site.css" rel="stylesheet">

<body>

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
                        <!--
                            <div class="dropdown">
                            <ul class="dropdown-menu">
                                <li class="nav-item col">Bem vindo //nome</li>
                                <li class="nav-item col"><img src="" class="rounded"></li>
                            </ul>
                        </div>-->

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
<!--Colocar while para mostrar todos os produtos, sim todos eles, não vou fazer página pra lista produtos-->
<div class="container">
    <div class="row">

<?php 
require('../app/DAO/ProdutoDAO.class.php');

$result = ProdutoDAO::loadMPrice(3);
foreach($result as $line){
?>
        <div class="col-lg-4">
            <div class="text-center">
                <?php echo "<img class='rounded-circle'
                     src='img/".$line['foto'] ."'alt='Imagem' width='140' height='140'>"; 
                 echo "<h2>".$line['nome']."</h2>";
                echo "<p><b>DESCRIÇÃO</b><br/>".$line['descricao']."</p>";
                echo "<b>R$: ".$line['preco']."</b>";
                
                echo "<br/>
                <p><a class='btn btn-secondary' href='../public/produto.php?id=".$line['id_produto']."' role='button'>Ver mais</a></p>"; ?>
            </div>
        </div>
<?php }?>
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

<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none"
     style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
    <defs>
        <style type="text/css"></style>
    </defs>
    <text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">
        500x500
    </text>
</svg>
</body>
</html>