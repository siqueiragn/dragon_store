<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <title>Dragon Store - Cadastro</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">


<body>

<nav class="navbar black-back-transparent ">
    <div class="container-fluid">
        <div class="navbar-header" >
            <a href="index.php">
                <i class="material-icons text-white">keyboard_backspace</i>
                <b class="text-white navbar-brand navbar-brand-centered">Dragon Store</b>
            </a>

        </div>
    </div>
</nav>

<header class="banguela fixed back-image">

    <div class="container">

        <div class="row">
            <div class="col-12 text-center">
                <div class="panel-heading text-white"><h3>Cadastro</h3></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="black-back-transparent text-center">

                    <form class="form-horizontal" method="POST" action="registroUsuario.php">

                        <div class="col-4">
                            <!--Nome-->
                            <div class="form-group">
                                <label for="name" class=" control-label"></label>
                                <input id="name" type="text"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="nome"
                                       required autofocus placeholder="Nome">
                            </div>
                            <!--Email-->
                            <div class="form-group">
                                <label for="email" class="control-label"></label>
                                <input id="email" type="email"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="email"
                                       require placeholder="E-Mail">

                            </div>
                            <!--Senha-->
                            <div class="form-group">
                                <label for="password" class="control-label"></label>
                                <input id="password" type="password"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="password"
                                       required
                                       placeholder="Senha">
                            </div>
                           
                        </div>

                        <div class="col-4">
                            <!--cep-->
                            <div class="form-group">
                                <label for="cep" class="control-label"></label>
                                <input id="cep" type="text"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="cep"
                                       require placeholder="CEP" maxlength="8"
                                       minlength="8">
                            </div>

                            <div class="form-group">
                                <label for="cidade" class="control-label"></label>
                                <input id="cidade" type="text"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="complemento"
                                        require placeholder="Complemento">
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                               
                                <br/>
                                <div class="form-group">
                                    <div class="">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            Enviar
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>

</header>

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="../js/cep.js"></script>
</body>
</html>
