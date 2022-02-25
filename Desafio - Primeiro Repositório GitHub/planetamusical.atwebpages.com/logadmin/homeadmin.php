<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logadmin/systemadmin/adminsystem.php';
	Acessoprivado();
	Acessopublico1();
	
	 Validarlogin1(); 

?>
 
<!doctype html>

<html lang="PT_BR">
	<head>
		<title>Administrador</title>
		<link rel='stylesheet' type='text/css' href='custom.css'>
		<meta charset="utf-8">
	</head>
	<body>
		
		<h1>Bem vindo administrador</h1>
		<p  align='right'><a href="?sair">Sair</a></p>
		
		
		<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='center' class='table' bgcolor='gray'>
				<tr><td bgcolor='red' class='table'><a href='homeadmin.php' class='tdlink'><font color='white' size='4px'><b>Home</b></font></a></td><td bgcolor='blue' class='table'><a href='diretorio.php' class='tdlink'><font color='white' size='4px'><b>Diretorio</b></font></a></td><td bgcolor='blue' class='table'><a href='dados.php' class='tdlink'><font color='white' size='4px'><b>Upload</b></font></a></td><td bgcolor='blue' class='table'><a href='calculadora.php' class='tdlink'><font color='white' size='4px'><b>Calculadora</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Alunos</b></font></a></td><td bgcolor='blue' class='table'><a href='cad/matricula.php' class='tdlink'><font color='white' size='4px'><b>Matricula</b></font></a></td></tr>
			</table>
			</div>
		<br />
               
		<div style="background: lightblue;">
                
		<form method="POST" action="">
		
			Nome do Matriculado:<input type="text" name="nomef"><br><br/>
				<input type="submit" name="enviar" value="entrar">
		</form>
		</div>
		
	
	</body>
</html>
