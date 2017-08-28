<?php
session_start();
if($_SESSION['autenticado'] != 'OK')
	header('Location: login.php');
	?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dragon Store - Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<body>

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

<?php 
require('../app/DAO/CarrinhoDAO.class.php');
$resultChart = CarrinhoDAO::loadProdutoByChart($_SESSION['idUsuario'],1);

if(mysqli_num_rows($resultChart)==0){
echo "
<div class='container'>
    <div class='row'>
        <div class='col-12'>
            <div class='card black text-center'>
                <h3 class='text-white'>Vossa senhoria não adquiriu nenhum
                    dragão ainda</h3>
            </div>
        </div>
    </div>
</div>";
} else {
?>
<div class="container">
    <div class="row">
    <?php 
        
foreach($resultChart as $line){
?>
        <div class="col-lg-4">
            <div class="text-center">
                <?php echo "<img class='rounded-circle'
                     src='img/".$line['foto'] ."'alt='Imagem' width='140' height='140'>"; 
                 echo "<h2>".$line['nome']."</h2>";
                echo "<p><b>DESCRIÇÃO</b><br/>".$line['descricao']."</p>";
                echo "<br>Quantidade: ".$line['quantidade'] ."<br>";
                echo "<b>R$: ".$line['total']."</b>";
                
                /*echo "<br/>
                <p><a class='btn btn-secondary' href='../public/produto.php?id=".$line['id_produto']."' role='button'>Ver mais</a></p>"; */?> 
            </div>
        </div>
<?php }?>

    </div>
</div>
<?php }?>
<br/>
<hr class="featurette-divider">

<footer>
    <div class="text-center">
        <p><a href="http://canoas.ifrs.edu.br">2017 - IFRS Campus Canoas</a></p>
        <p>Feito por: Gabriel Nunes, Lucas Matos, Raul Steffen</p>
    </div>
</footer>

</body>
</html>
