 <?php
 
 require('../MYSQL.php');
	 function __construct($login, $senha){
	$db = new MYSQL();
 $query = "SELECT * FROM usuario WHERE login = '$login'"; //O teste inicial deve ser só no login
 $result = mysqli_query($db, $sql) or die(mysqli_error());
 $linhas = mysqli_num_rows($result); //Se não retornou nenhuma linha, é porque não existe ninguém com esse login
 $linha = mysqli_fetch_assoc($result); //Tenta retornar a primeira linha de qualquer forma, para testar a senha
 if ($linhas <= 0 or !password_verify($_POST['senha'], $linha['senha']) ) { //Se não existia o login OU a verificação da senha falhou
    header('Location: www.google.com.br');
}
else {
 //código do login
	 }
	 }
 }