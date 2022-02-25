<?php
$nome=$_POST["nome"];
$idade=$_POST["idade"];
$email=$_POST["email"];

session_start("mod");
	 $_SESSION["nome"] = $nome;
 	 $_SESSION["idade"] = $idade;
 	 $_SESSION["email"] = $email;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
  <title></title>
</head>
<body>
<div style="text-align: center;"><font size="+3"><span
 style="text-decoration: underline;"><span
 style="font-weight: bold;">Inscri&ccedil;&atilde;o
para moderador de chat<br>
<br>
<br>
</span></span></font>
<div style="text-align: left;">
<form method="post" action="p2.php" name="p2"><span
 style="font-weight: bold;">Parte 2<br>
  <br>
Porque deseja se tornar um moderador?<br>
  <textarea cols="90" rows="15" name="pq"></textarea><br>
  <br>
<div align="right">
<input value="Terminar"
 type="submit"></div>
  </span></form>
<div style="text-align: right;"><br>
<span style="font-weight: bold;"></span></div>
<div style="text-align: right;"><span
 style="font-weight: bold;"></span><br>
<span style="font-weight: bold;"></span></div>
<font size="+3"><span
 style="text-decoration: underline;"><span
 style="font-weight: bold;"></span></span></font><br>
<font size="+3"><span
 style="text-decoration: underline;"><span
 style="font-weight: bold;"></span></span></font></div>
</div>
</body>
</html>
