<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logadmin/systemadmin/adminsystem.php';
	Acessoprivado();
	
	

?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Criando diretórios</title>
		<link rel='stylesheet' type='text/css' href='custom.css'>
                <meta charset="utf-8">
	</head>
	<body>
	
	<h1>Bem vindo administrador</h1>
		
		<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='center' class='table' bgcolor='gray'>
				<tr><td bgcolor='blue' class='table'><a href='homeadmin.php' class='tdlink'><font color='white' size='4px'><b>Home</b></font></a></td><td bgcolor='red' class='table'><a href='diretorio.php' class='tdlink'><font color='white' size='4px'><b>Diretorio</b></font></a></td><td bgcolor='blue' class='table'><a href='dados.php' class='tdlink'><font color='white' size='4px'><b>Upload</b></font></a></td><td bgcolor='blue' class='table'><a href='calculadora.php' class='tdlink'><font color='white' size='4px'><b>Calculadora</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Alunos</b></font></a></td><td bgcolor='blue' class='table'><a href='cad/matricula.php' class='tdlink'><font color='white' size='4px'><b>Matricula</b></font></a></td></tr>
			</table>
			</div>
		<br />
	<div style="background: lightblue;">
		<form method="POST" action="diretorio1.php">
			<input type="text" name="textdir">
			<input type="file" name="arq" value="upload"><br>
            <input type="submit" name="btndir" value="enviar">
                        
		
		</form>
	</div>
	
	</body>
</html>