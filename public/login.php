<?php 

session_start();
if(isset($_SESSION['autenticado']) && ($_SESSION['autenticado'] == 'OK'))
	header('Location: dashboard.php');
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

</head>

<body class="fixed back-image cuca">

<nav class="navbar navbar-default black-back-transparent">
    <div class="container-fluid">
        <div class="navbar-header" >
            <a href="index.php">
                <i class="material-icons text-white">keyboard_backspace</i>
                <b class="text-white navbar-brand navbar-brand-centered">Dragon Store</b>
            </a>

        </div>
    </div>
</nav>


<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-sm-4 top back-login text-center">
            <form class="form-signin" action="../app/Login.php" method="POST">
                <h2 class="form-signin-heading text-white">Logyn</h2>
                <br/>
                <label for="inputEmail" class="sr-only">Email</label>
                <input type="login" name="login" class="form-control" placeholder="Email" required="" autofocus=""
                       autocomplete="off">
                <br/>
                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="password" class="form-control" placeholder="Senha" required=""
                       autocomplete="off">
                <br/>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrarys</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>