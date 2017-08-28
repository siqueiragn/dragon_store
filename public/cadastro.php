<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dragon Store - Cadastro</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>

<body class="banguela fixed back-image">

<nav class="navbar navbar-default black-back-transparent">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="index.php">
                <i class="material-icons text-white">keyboard_backspace</i>
                <b class="text-white navbar-brand navbar-brand-centered">Dragon Store</b>
            </a>

        </div>
    </div>
</nav>

<br/>

<div class="container">

    <div class="row">
        <div class="col-12 text-center">
            <div class="panel-heading text-white"><h3>Cadastro</h3></div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="black-back-transparent text-center">
                <br/><br/><br/>
                <form class="form-horizontal" method="POST" action="registroUsuario.php">
                    <div class="row">

                        <div class="col-2"></div>

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

                            <!--cep-->
                            <div class="form-group">
                                <label for="cep" class="control-label"></label>
                                <input id="cep" type="text"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="cep"
                                       require placeholder="CEP" maxlength="8"
                                       minlength="8">
                            </div>

                            <!--Numero casa-->
                            <div class="form-group">
                                <label for="numeroCasa" class="control-label"></label>
                                <input id="numeroCasa" type="text"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="numeroCasa"
                                       rda" require placeholder="Número"
                                maxlength="4">
                            </div>

                        </div>

                        <div class="col-4">

                            <!--rua-->
                            <div class="form-group">
                                <label for="rua" class="control-label"></label>
                                <input id="rua" type="text"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="rua"
                                       required placeholder="Rua">

                            </div>

                            <!---Bairro-->
                            <div class="form-group">
                                <label for="bairro" class="control-label"></label>
                                <input id="bairro" type="text"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="bairro"
                                       required placeholder="Bairro">

                            </div>

                            <!--Cidade-->
                            <div class="form-group">
                                <label for="cidade" class="control-label"></label>
                                <input id="cidade" type="text"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="cidade"
                                       required placeholder="Cidade">
                            </div>

                            <!---Estado-->
                            <div class="form-group">
                                <label for="uf" class="control-label"></label>
                                <input id="uf" type="text"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="uf"
                                       required placeholder="Estado" maxlength="2">
                            </div>

                            <div class="form-group">
                                <label for="cidade" class="control-label"></label>
                                <input id="cidade" type="text"
                                       class="form-control input-transparent text-white-opacity input-lg"
                                       name="complemento"
                                       placeholder="Complemento">
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        Enviar
                                </div>
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
                <br/>
            </div>
        </div>
    </div>

</div>

<footer class="card-footer black-back-transparent fixed-bottom">
    <div class="text-center text-white">
        <p><a href="http://canoas.ifrs.edu.br">2017 - IFRS Campus Canoas</a></p>
        <p>Feito por: Gabriel Nunes, Lucas Matos, Raul Steffen</p>
    </div>
</footer>

<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="../js/cep.js"></script>
</body>
</html>
