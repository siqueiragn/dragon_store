 <?php
 
 require('MYSQL.class.php');
	$db = new MYSQL();
	$login = MYSQL::filtrar($_POST['login']);
 $query = "SELECT * FROM usuario WHERE email = '". $login ."'"; //O teste inicial deve ser só no login
	$result = $db->exec($query);
	exit;
	
 	$linha = $result->fetch_assoc();
 	if(/* password_verify($_POST['senha'], $linha['password']) */true){
 		setcookie('autenticado', 'OK');
 		$_SESSION['idUsuario'] = $linha['id_Usuario'];
 		$_SESSION['isAdmin'] = $linha['is_admin'];
 		header('Location: ../public/cadasfftrarProduto.php');
 		
 	}
 	else {
 		header('Location: ../public/Login.php');
 	}
	}
	else {
		header('Location: ../public/Login.php');
	}
	 
 ?>