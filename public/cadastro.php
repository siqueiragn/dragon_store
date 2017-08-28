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

<body class="fixed back-image cuca">


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


<br/>

<div class="container">


    <div class="row" style="margin-top: -10px">
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
                                <input id="nome" type="text"
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
                                     <!--  <select name="uf" class="form-control input-transparent text-white-opacity input-lg">
	<option value="AC">Acre</option>
	<option value="AL">Alagoas</option>
	<option value="AP">Amapá</option>
	<option value="AM">Amazonas</option>
	<option value="BA">Bahia</option>
	<option value="CE">Ceará</option>
	<option value="DF">Distrito Federal</option>
	<option value="ES">Espírito Santo</option>
	<option value="GO">Goiás</option>
	<option value="MA">Maranhão</option>
	<option value="MT">Mato Grosso</option>
	<option value="MS">Mato Grosso do Sul</option>
	<option value="MG">Minas Gerais</option>
	<option value="PA">Pará</option>
	<option value="PB">Paraíba</option>
	<option value="PR">Paraná</option>
	<option value="PE">Pernambuco</option>
	<option value="PI">Piauí</option>
	<option value="RJ">Rio de Janeiro</option>
	<option value="RN">Rio Grande do Norte</option>
	<option value="RS">Rio Grande do Sul</option>
	<option value="RO">Rondônia</option>
	<option value="RR">Roraima</option>
	<option value="SC">Santa Catarina</option>
	<option value="SP">São Paulo</option>
	<option value="SE">Sergipe</option>
	<option value="TO">Tocantins</option>
</select>-->
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
<script src="../public/js/cep.js"></script>
</body>
</html>
