<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Aviso!</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
.style1 {font-size: 9px}
a:link {
	color: #666666;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #666666;
}
a:hover {
	text-decoration: underline;
	color: #000000;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<div align="center">
  <p>&nbsp;</p>
  <p><?php
  $msg=$_GET["msg"];
  $url=$_GET["volt"];
  if($msg=="id"){
  echo"<b>Usuário Inexistente!</b> <br><br><a href=$url>Tente novamente, clique aqui</a>";
  }
  if($msg=="senha"){
  echo"<b>Senha Incorreta!</b> <br><br><a href=$url>Tente novamente, clique aqui</a>";
}
if($msg=="existe"){
  echo"<b>Usuário já existe!</b> <br><br><a href=cadastro.php>Tente novamente, clique aqui</a>";
}
if($msg=="ok"){
  echo"<b>Cadastro realizado com sucesso!</b><br>";
}
if($msg=="alt"){
  echo"<b>Cadastro alterado com sucesso!</b><br><br> Feche este aviso e depois aperte f5 para ver as alterações";
}
if($msg=="del"){
  echo"<b>Cadastro deletado com sucesso!</b><br><br> Não é possível reverter o cadastro, da próxima vez que entrar seu cadastro não será mais válido, se quiser logar novamente faça outro cadastro";
}
if($msg=="dados"){
  echo"<b>Dados errados!</b><br><br>";
}
if($msg=="saiu"){
  echo"<b>Você saiu com sucesso do sistema!</b><br><br>";
}
if($msg=="suasenha"){
include("usuarios/$url.txt");
  echo"Sua senha em nosso sistema é <b>$senha</b><br><br>";
}
  
  
  ?></p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
</div>
</body>




</html>
