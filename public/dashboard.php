<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>Dragon Store - Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
<body>

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
        <a class="nav-link bg-danger text-white" href="logout.php">logout</a>
    </div>
</nav>

<br/>
<hr class="featurette-divider">
<br/>
<!--Colocar while para mostrar todos os produtos, sim todos eles, não vou fazer página pra lista produtos-->
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="text-center">
                <img class="rounded-circle"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Generic placeholder image" width="140" height="140">
                <h2>NOME PROD</h2>
                <p><b>DESCRIÇÃO</b><br/>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id
                    dolor id nibh ultricies
                    vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo
                    cursus magna.</p>
                <b>R$: PREÇO PAGO</b>
                <br/>
                <p><a class="btn btn-secondary" href="produtos.php" role="button">Ver mais</a></p>
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

</body>
</html>
