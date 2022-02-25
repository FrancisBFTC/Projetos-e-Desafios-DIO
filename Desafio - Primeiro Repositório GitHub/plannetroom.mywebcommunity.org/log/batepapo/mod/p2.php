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
<form method="post" action="fim.php" name="p2"><span
 style="font-weight: bold;"><br>
      <?php
session_start("mod");
$pq=$_POST["pq"];
$nome=$_SESSION["nome"];
$idade=$_SESSION["idade"];
$email=$_SESSION["email"];
echo "Nome: $nome <br> Idade: $idade <br> E-mail: $email<br>Justificativa: $pq";
?>
<br>
  <br>
  <br>
  </span><div align="right"><input value="Terminar"
 type="submit"></div></form>
<div style="text-align: right;"><br>
<span style="font-weight: bold;"></span></div>
<div style="text-align: right;"><span
 style="font-weight: bold;"><</span><br>
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



