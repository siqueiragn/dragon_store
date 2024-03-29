<?php 
require('../app/DAO/ProdutoDAO.class.php');
require('../app/DAO/CategoriaDAO.class.php');
session_start();
?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>Dragon Store - Produto</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/site.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

</head>

<body>
<nav class="navbar navbar-default black-back-transparent fixed-top">
		<a class="navbar-brand text-white" href="index.php"> Dragon Store </a>
    <?php if (!@$_SESSION['autenticado'] == 'OK') { ?>
 
        <a class="nav-link text-white" href="login.php"> Login</a> <a
			class="nav-link text-white" href="cadastro.php"> Cadastre - se</a>
    
    <?php
				
}
				?>
<?php if (@$_SESSION['autenticado'] == 'OK') { 	 ?>
<ul class="navbar-nav mr-auto">
			<li class="nav-item active text-white"><a
				class="nav-link text-white left" href="dashboard.php">Meus Dragões<span
					class="sr-only">(current)</span></a></li>
		</ul>
<?php } ?>
    <div class="form-inline my-2 my-lg-0">
			<form class="form-inline my-2 my-lg-0" action="resultado.php"
				method="POST">
				<input class="form-control mr-sm-2" name="pesquisa" type="text"
					placeholder="Search" aria-label="Search"> <input
					class="btn btn-outline-success my-2 my-sm-0" value="Search"
					type="submit">
        
    <?php if (@$_SESSION['autenticado'] == 'OK') { 	 ?>
		
        <a class="nav-link text-white" href="carrinho.php"> <i
					class="material-icons"> shopping_cart</i>
				</a> <a class="nav-link bg-danger text-white"
					href="../app/logout.php">logout</a>
    <?php } ?>
</form>
		</div>
	</nav>

 <?php  
    $result = ProdutoDAO::loadByID($_GET['id']);
   foreach ($result as $line){
   /* for($i = 0; $i<10;$i++){ */ 
   if($line['quantidade'] <= 0){
   	echo "
<div class='container'>
    <div class='row'>
        <div class='col-12'>
            <div class='card black text-center'>
                <h3 class='text-white'>Esgotado!</h3>
            </div>
        </div>
    </div>
</div>";
   } else{
 
   	?> 
<div class="container">
    
    <div class="card black">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">
                    <div class="preview-pic tab-content">
                       <?php echo "<div class='tab-pane active'><img src='img/". $line['foto'] ."'/></div>"; ?>
                    </div>

                </div>

                <div class="details col-md-6 text-white">
                    <?php echo "<h3 class='product-title'>". $line['nome']."</h3>"; ?>
<?php echo "<small>Estoque:<span> ".$line['quantidade'] ."</span></small>"; ?>
                  <?php echo "<p class='product-description'>". $line['descricao'] ."</p>"; ?>
                  <?php echo "<p class='product-description'>Categoria: ". CategoriaDAO::loadCategoriaByID($line['categoria']) ."</p>"; ?>
                  
                    <?php echo "<h4 class='price'>Preço unitário R$:<span> ".$line['preco'] ."</span></h4>"; ?>
                    <form action="adicionaCarrinho.php" method="post">
                   
                    <?php echo "<input type='hidden' name='idProd' value='".$line['id_produto']."'>"?>
					<?php echo "<input type='hidden' name='preco' value='".$line['preco']."'>"?>
					<?php echo "<input type='hidden' name='quantidadeTotal' value='".$line['quantidade']."'>"?>

<?php 
if(@$_SESSION['autenticado'] == 'OK'){;
echo "<input type='number' min='1' max='".$line['quantidade']."' name='qtde'>"?>	
                    <div class="row">
                        <div class="col-sm-7">
                            <input class="btn-lg btn btn-success text-white" type="submit" value="Adicionar ao Carrinho">
                        </div>
                        <br/><br/>
                        <div class="col-sm-4">
                            <button class="btn-lg btn btn-danger" type="submit"><a class="text-white"
                                                                                   href="carrinho.php"> Comprar</a>
                            </button>
                           
                        </div>

                    </div>
                    </form>
                    <?php }?>
                </div>
                 
            </div>
        </div>
    </div>
 
</div>


<?php }
   } ?>  
<br/>
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
