 <?php
 
 require('MYSQL.class.php');
session_start();
 $db = new MYSQL();
	$login = MYSQL::filtrar($_POST['login']);
 $query = "SELECT * FROM usuario WHERE email = '". $login ."'"; //O teste inicial deve ser só no login
	$result = $db->exec($query);
	
	
 	$linha = $result->fetch_assoc();
 	if(/* password_verify($_POST['senha'], $linha['password']) */$linha['senha'] == $_POST['password']){
		$_SESSION['autenticado'] = 'OK';
 		$_SESSION['idUsuario'] = $linha['id_usuario'];
 		$_SESSION['isAdmin'] = $linha['is_admin'];
 		header('Location: ../public/dashboard.php');
 		
 	}
 	else {
 		header('Location: ../public/Login.php');
 	}

	 
 ?>