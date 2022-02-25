<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logadmin/systemadmin/adminsystem.php';
	Acessoprivado();
	
	
	

?>
<?php Validarcadastro1(); ?>
<!doctype html>
<html lang="PT_BR">
	<head>
		<title>Matricula alunos</title>
		<link rel="stylesheet" type="text/css" href="../custom.css">
		<meta charset="utf-8">
	</head>
	<body>
	
	<h1>Bem vindo administrador</h1>
	
	<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='center' class='table' bgcolor='gray'>
				<tr><td bgcolor='blue' class='table'><a href='../homeadmin.php' class='tdlink'><font color='white' size='4px'><b>Home</b></font></a></td><td bgcolor='blue' class='table'><a href='../diretorio.php' class='tdlink'><font color='white' size='4px'><b>Diretorio</b></font></a></td><td bgcolor='blue' class='table'><a href='../upload.php' class='tdlink'><font color='white' size='4px'><b>Upload</b></font></a></td><td bgcolor='blue' class='table'><a href='../calculadora.php' class='tdlink'><font color='white' size='4px'><b>Calculadora</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Alunos</b></font></a></td><td bgcolor='red' class='table'><a href='cad/matricula.php' class='tdlink'><font color='white' size='4px'><b>Matricula</b></font></a></td></tr>
			</table>
			</div>
		<br />
		<div style="background: lightblue;">
		
		<form method="POST" action="">
			Nome:<input type="text" name="nomef" value="<?php echo Pegarpost('nomef'); ?>"><br></br>
			Email:<input type="text" name="emailf" value="<?php echo Pegarpost('emailf'); ?>"><br></br>
			Data de nascimento:<input type="text" name="dataf" value="<?php echo Pegarpost('dataf'); ?>"><br></br>
			Idade:<input type="text" name="idadef" value="<?php echo Pegarpost('idadef'); ?>"><br></br>
			Sexo: M<input type="radio" name="sexof" value="masculino">F<input type="radio" name="sexof" value="feminino"><br></br>
			Curso:<input type="text" name="cursof" value="<?php echo Pegarpost('cursof'); ?>"><br></br>
			Nome do pai:<input type="text" name="nomepaif" value="<?php echo Pegarpost('nomepaif'); ?>"><br></br>
			Nome da mãe:<input type="text" name="nomemaef" value="<?php echo Pegarpost('nomemaef'); ?>"><br></br>
			Endereço:<input type="text" name="endereçof" value="<?php echo Pegarpost('endereçof'); ?>"><br></br>
			Cidade:<input type="text" name="cidadef" value="<?php echo Pegarpost('cidadef'); ?>"><br></br>
			Estado:<input type="text" name="estadof" value="<?php echo Pegarpost('estadof'); ?>"><br></br>
			Telefone:<input type="text" name="fonef" value="<?php echo Pegarpost('fonef'); ?>"><br></br>
			<input type="submit" name="env" value="cadastrar"><br></br>
		</form>
		</div>
	
	</body>
</html>