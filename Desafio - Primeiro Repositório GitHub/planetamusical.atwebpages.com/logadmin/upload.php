<?php	
	
	if(isset($_POST['btndir'])){
               
              
               if(file_exists($_FILES['arq'] ['name'])) {
                   echo "<font color='red'>O arquivo já existe!</font>";
                        
                }
                else{
                        move_uploaded_file($_FILES['arq'] ['tmp_name'], $_FILES['arq'] ['name']);
                        echo "<font color='blue'>Arquivo enviado!</font>";
                }
                
        }
	

?>

<html>
	<head>
		<title>Criando diretórios</title>
                <meta charset="utf-8">
                <link rel="stylesheet" type="text/css" href="../../assuntos/estilo.css">
	</head>
	<body>
        <h1>Bem vindo administrador</h1>
		
		<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='center' class='table' bgcolor='gray'>
				<tr><td bgcolor='blue' class='table'><a href='homeadmin.php' class='tdlink'><font color='white' size='4px'><b>Home</b></font></a></td><td bgcolor='blue' class='table'><a href='diretorio.php' class='tdlink'><font color='white' size='4px'><b>Diretorio</b></font></a></td><td bgcolor='red' class='table'><a href='upload.php' class='tdlink'><font color='white' size='4px'><b>Upload</b></font></a></td><td bgcolor='blue' class='table'><a href='calculadora.php' class='tdlink'><font color='white' size='4px'><b>Calculadora</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Alunos</b></font></a></td><td bgcolor='blue' class='table'><a href='cad/matricula.php' class='tdlink'><font color='white' size='4px'><b>Matricula</b></font></a></td></tr>
			</table>
			</div>
		<br />
		<form method="POST" action="" enctype="multipart/form-data" name="form1" id="form1">
			<label for="arq"></label>
			<input type="file" name="arq" value="upload" id="arq"><br><br />
                        <input type="submit" name="btndir" id="btndir" value="enviar" style="background: blue;">
                        
		
		</form>
                
                <br>
                
                <a href="diretory.php"><font color="blue">Criar um diretório</font></a><br>
                 <a href="../../index.php"><font color="blue">Ir para o index</font></a><br><br />
                 <a href="Guitarcourses/upload.php"><font color="blue">Upload apostila guitarra</font></a><br><br />
                 <a href="Keyboardcourses/upload.php"><font color="blue">Upload apostila teclado</font></a><br><br />
                 <a href="Singcourses/upload.php"><font color="blue">Upload apostila canto</font></a><br><br />
	
	</body>
</html>