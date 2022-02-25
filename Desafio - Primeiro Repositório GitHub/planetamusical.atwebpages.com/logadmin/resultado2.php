<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logadmin/systemadmin/adminsystem.php';
	Acessoprivado();
	
	

?>
<!doctype html>
<?php
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	
	$num3 = $_POST['num3'];
	$num4 = $_POST['num4'];
	
	$num5 = $_POST['num5'];
	$num6 = $_POST['num6'];
	
	
	
	$soma = "$num1" + "$num2";
	$subtração = "$num3" - "$num4";
	$multiplicação = "$num5" * "$num6";
	
?>
<html>

	<head>
		<meta charset="utf-8">
		<title>Calculadora</title>
		<link rel="stylesheet" type="text/css" href="custom.css">
	</head>
	<body bgcolor="white">
	
	<h1>Bem vindo administrador</h1>
		
		<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='center' class='table' bgcolor='gray'>
				<tr><td bgcolor='blue' class='table'><a href='homeadmin.php' class='tdlink'><font color='white' size='4px'><b>Home</b></font></a></td><td bgcolor='blue' class='table'><a href='diretorio.php' class='tdlink'><font color='white' size='4px'><b>Diretorio</b></font></a></td><td bgcolor='blue' class='table'><a href='upload.php' class='tdlink'><font color='white' size='4px'><b>Upload</b></font></a></td><td bgcolor='red' class='table'><a href='calculadora.php' class='tdlink'><font color='white' size='4px'><b>Calculadora</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Alunos</b></font></a></td><td bgcolor='blue' class='table'><a href='cad/matricula.php' class='tdlink'><font color='white' size='4px'><b>Matricula</b></font></a></td></tr>
			</table>
			</div>
		<br />
	<div style="background: gray;">
	<div class="calcul">
	<h2 align="center">calculadora</h3>
	<br>
	
		<form method="POST" action="resultado2.php">
			<input type="text" name="num1" size="3"> + <input type="text" name="num2" size="3"> = <?php echo "<font color=blue>$soma</font>"; ?> 
			<br><br />
			<input type="submit" name="submit" value="somar" class="soma">
			
			<br><br />
			<input type="text" name="num3" size="3"> - <input type="text" name="num4" size="3"> = <?php echo "<font color=blue>$subtração</font>"; ?> 
			<br><br />
			<input type="submit" name="submit" value="subtrair" class="subtração">
			
			<br><br />
			<input type="text" name="num5" size="3"> x <input type="text" name="num6" size="3"> = <?php echo "<font color=blue>$multiplicação</font>"; ?>
			<br><br />
			<input type="submit" name="submit" value="multiplicar" class="multiplicação">
			
			<h4><a href="divisao.php"><font color="blue">Divisão e porcentagens</font></a></h4>
		</form>
	</div>
	</div>
	
		
	</body>
</html>