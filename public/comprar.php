<?php 
session_start();
require('../app/DAO/CarrinhoDAO.class.php');
if($_SESSION['autenticado'] != 'OK')
	header('Location: login.php');

 CarrinhoDAO::updateComprados($_SESSION['idUsuario'],$_SESSION['carrinho']);


$result = CarrinhoDAO::loadProdutoByChart($_SESSION['idUsuario']);

$Vai 		= "Excelentissimo senhor(a) ". $_SESSION['nome'] .", venho por meio deste oficio apresentar o recibo de sua ultima aquisiçao na Dragon Store.\n";
foreach ($result as $line){
$Vai 		.= "\nAdquiriu ".$line['quantidade'] . " unidades do seguinte produto: ";
$Vai		.= $line['nome'] . ". Totalizando R$".$line['total'];

}

$Vai		.= "\n\nO produto vai ser entregue em ate 30 dias para o seguinte CEP: ". $_SESSION['cep'];
$Vai		.= "A Dragon Store agradece sua preferencia.";

require_once("phpmailer/class.phpmailer.php");

define('GUSER', 'dragonstorephp@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', 'a12345678a');		// <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo) {
	global $error;
	$mail = new PHPMailer();
	$mail->Charset = 'UTF-8';
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autentica��o ativada
	$mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		// A porta 587 dever� estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	
	
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo;
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}

// Insira abaixo o email que ir� receber a mensagem, o email que ir� enviar (o mesmo da vari�vel GUSER),
//o nome do email que envia a mensagem, o Assunto da mensagem e por �ltimo a vari�vel com o corpo do email.

if (smtpmailer($_SESSION['email'], 'dragonstorephp@gmail.com', 'Dragon Store', 'Recibo', $Vai)) {
	header('Location: dashboard.php');
	
}
if (!empty($error)) echo $error;
?>