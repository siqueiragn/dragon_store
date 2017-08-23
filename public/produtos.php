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

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

</head>

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
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
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


<div class="container">
    <div class="card black">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <!--Outras imagens-->
                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="img/gretchen.jpg"/></div>
                    </div>

                </div>

                <div class="details col-md-6 text-white">
                    <h3 class="product-title">NOME DO PRODUTO</h3>

                    <p class="product-description">Suspendisse quos? Tempus cras iure temporibus? Eu laudantium cubilia
                        sem sem! Repudiandae et! Massa senectus enim minim sociosqu delectus posuere.</p>
                    <h4 class="price">preço R$:<span> <!--Valor--></span></h4>


                    <div class="row">
                        <div class="col-sm-7">
                            <button class="btn-lg btn btn-success" type="button"><a class="text-white"
                                                                                    href="adicionacarrinho.php">
                                    Adicionar ao carrinho</a></button>
                        </div>
                        <br/><br/>
                        <div class="col-sm-4">
                            <button class="btn-lg btn btn-danger" type="button"><a class="text-white"
                                                                                   href="carrinho.php"> Comprar</a>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
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


<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>

</body>
</html>