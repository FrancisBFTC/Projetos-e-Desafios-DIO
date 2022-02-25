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
		<form method="POST" action="" enctype="multipart/form-data" name="form1" id="form1">
			<label for="arq"></label>
			<input type="file" name="arq" value="upload" id="arq"><br><br />
                        <input type="submit" name="btndir" id="btndir" value="enviar" style="background: blue;">
                        
		
		</form>
                
                <br>
                
                <a href="../diretory.php"><font color="blue">Criar um diretório</font></a><br>
                 <a href="../../index.php"><font color="blue">Ir para o index</font></a><br><br />
                 <a href="../Guitarcourses/upload.php"><font color="blue">Upload apostila guitarra</font></a><br><br />
                 
                 <a href="../Singcourses/upload.php"><font color="blue">Upload apostila canto</font></a><br><br />
	
	</body>
</html>