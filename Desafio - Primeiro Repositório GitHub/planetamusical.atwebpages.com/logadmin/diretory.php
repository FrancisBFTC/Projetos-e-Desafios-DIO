<?php	
	
	if(isset($_POST['btndir'])){
        
                $diretorio = $_POST['textdir'];
               
              
               if(file_exists($diretorio)) {
                   echo "<font color='red'>O arquivo já existe!</font><br>";
                   //chmod($diretorio, 0777);
                   
                   rmdir($diretorio);
                   echo "<font color='red'>O diretório foi excluído!</font><br>";
                        
                }
                else{
                 mkdir($diretorio);
                        echo "<font color='blue'>Arquivo enviado!</font>";
                }
                
        }
	

?>


<html>
        <head>
                <title>Criar diretórios</title>
                <meta charset="utf-8">
                <link rel="stylesheet" type="text/css" href="../../assuntos/estilo.css">
        </head>
        <body>
        <h1>Bem vindo administrador</h1>
		
		<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='center' class='table' bgcolor='gray'>
				<tr><td bgcolor='blue' class='table'><a href='homeadmin.php' class='tdlink'><font color='white' size='4px'><b>Home</b></font></a></td><td bgcolor='red' class='table'><a href='diretorio.php' class='tdlink'><font color='white' size='4px'><b>Diretorio</b></font></a></td><td bgcolor='blue' class='table'><a href='dados.php' class='tdlink'><font color='white' size='4px'><b>Upload</b></font></a></td><td bgcolor='blue' class='table'><a href='calculadora.php' class='tdlink'><font color='white' size='4px'><b>Calculadora</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Alunos</b></font></a></td><td bgcolor='blue' class='table'><a href='cad/matricula.php' class='tdlink'><font color='white' size='4px'><b>Matricula</b></font></a></td></tr>
			</table>
			</div>
		<br />
                <form method="POST" action="" name="form1" id="form1">
                <label for="textdir"></label>
                        <input type="text" name="textdir" id="textdir">
                        <input type="submit" name="btndir" id="btndir" value="Criar" style="background: blue;">
                </form>
                
                <br>
                
                <a href="upload.php"><font color="blue">Fazer upload</font></a><br>
                <a href="../../index.php"><font color="blue">Ir para o index</font></a>
        </body>
</html>
