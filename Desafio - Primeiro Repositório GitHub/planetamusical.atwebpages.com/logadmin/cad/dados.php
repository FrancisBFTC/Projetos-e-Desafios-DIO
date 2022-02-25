<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logadmin/systemadmin/adminsystem.php';
	Acessoprivado();
	Acessoprivado1();
	
	
	$dadosusuario = Pegarusuario1();

?>

<!DOCTYPE HTML/>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<title>Dados de <?php echo $dataUser['nomef']; ?></title>
		<link rel="stylesheet" type="text/css" href="../custom.css">
	</head>
	<body>
	<h1>Dados do aluno</h1>
		<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='center' class='table' bgcolor='gray'>
				<tr><td bgcolor='blue' class='table'><a href='homeadmin.php' class='tdlink'><font color='white' size='4px'><b>Home</b></font></a></td><td bgcolor='blue' class='table'><a href='diretorio.php' class='tdlink'><font color='white' size='4px'><b>Diretorio</b></font></a></td><td bgcolor='blue' class='table'><a href='dados.php' class='tdlink'><font color='white' size='4px'><b>Upload</b></font></a></td><td bgcolor='red' class='table'><a href='calculadora.php' class='tdlink'><font color='white' size='4px'><b>Calculadora</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Alunos</b></font></a></td><td bgcolor='blue' class='table'><a href='cad/matricula.php' class='tdlink'><font color='white' size='4px'><b>Matricula</b></font></a></td></tr>
			</table>
			</div>
		<br />
		<div style="background: lightblue;">
		<hr>
		
		<h3><?php echo "Nome: " .$dadosusuario['nomef']; ?></h3>
		<h3><?php echo "Email: " .$dadosusuario['emailf']; ?></h3>
		<h3><?php echo "Data de nascimento: " .$dadosusuario['dataf']; ?></h3>
		<h3><?php echo "Idade: " .$dadosusuario['idadef']; ?></h3>
		<h3><?php echo "Sexo: " .$dadosusuario['sexof']; ?></h3>
		<h3><?php echo "Curso: " .$dadosusuario['cursof']; ?></h3>
		<h3><?php echo "Nome do pai: " .$dadosusuario['nomepaif']; ?></h3>
		<h3><?php echo "Nome da mãe: " .$dadosusuario['nomemaef']; ?></h3>
		<h3><?php echo "Endereço: " .$dadosusuario['endereçof']; ?></h3>
		<h3><?php echo "Cidade: " .$dadosusuario['cidadef']; ?></h3>
		<h3><?php echo "Estado: " .$dadosusuario['estadof']; ?></h3>
		<h3><?php echo "Telefone: " .$dadosusuario['fonef']; ?></h3>
		<h3><?php echo "Data do cadastro: " .$dadosusuario['dataregistro']; ?></h3>
	
		
		<hr>
			<p  align='left'><a href="?voltar">Voltar</a></p>
		<hr>
		</div>
	</body>
</html>