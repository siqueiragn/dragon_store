 <?php
 
 require('MYSQL.class.php');
session_start();
 $db = new MYSQL();
	$login = MYSQL::filtrar($_POST['login']);
 $query = "SELECT * FROM usuario WHERE email = '". $login ."'"; //O teste inicial deve ser só no login
	$result = $db->exec($query);
	
	
 	$linha = $result->fetch_assoc();
 	/* echo $linha['senha']."<br>";
 	echo $_POST['senha'];
 	exit; */
 	
 	if(password_verify($_POST['password'], $linha['senha'])) {
		$_SESSION['autenticado'] = 'OK';
 		$_SESSION['idUsuario'] = $linha['id_usuario'];
 		$_SESSION['isAdmin'] = $linha['is_admin'];
 		$_SESSION['email'] = $linha['email'];
 		$_SESSION['nome'] = $linha['nome'];
 		$_SESSION['complemento'] = $linha['complemento'];
 		$_SESSION['cep'] = $linha['cep'];
 		header('Location: ../public/dashboard.php');
 		
 	}
 	else {
 		header('Location: ../public/Login.php');
 	}

	 
 ?>