<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/account/system/system.php';
        include $_SERVER['DOCUMENT_ROOT'].'/account/system/config.php';
	AccessPrivate();
	$dados = GetUser();
	$id = $_GET['id'];
        
         $idconta = $dados['userkey'];
                   if($id != $idconta){
                           echo '<font size="6px"><b>Error 404 - page not found</b></font><br>';
                           echo '<a href="../index.php"><-- Voltar a página</a>';
                           
                   }
	
	echo "<meta charset='utf-8'>";
	
	if( isset( $_POST['postar'] ) ){
			
			$video	=  mysqli_real_escape_string($connection, strip_tags(trim($_POST['video'])));
			$date		= date('d/m/Y');
			$video	=  $_POST['video'];
			$descricao	=  $_POST['descricao'];
			$usuario	=  $_POST['usuario'];
			
			
			
			if(empty( $usuario ) )
				echo 'Preencha o campo usuario!';
			else if( empty( $video ) )
				echo 'O espaço está vazio!Coloque o código do link de incorporação';
			else{
				
				$id_usuario = @$_GET['id'];
				$dbregister = "INSERT INTO videos(usuario, video, descricao, id_usuario, date) VALUES('$usuario', '$video', '$descricao', '$id_usuario', '$date')";
				mysqli_query($connection, $dbregister) or die(mysqli_error());
				
			}
			
			echo '<hr>';
		}
                
                                $connect = "SELECT * FROM cadastro";
				$querycon = mysqli_query($connection, $connect) or die(mysqli_error());
				$datess = mysqli_fetch_array($querycon);
				
				
				if(isset($_POST['sair'])){
					$id = $_GET['id'];
				
				$offlineupdate = "UPDATE cadastro SET status=0 WHERE userkey='$id'";
				mysqli_query($connection, $offlineupdate) or die(mysqli_error());
                                       unset($_SESSION['userLog']);
                                       echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.php'>";
                                       
				}

?>

<!doctype html> 


<html>

	<head>

	
 

		<title><?php $idconta = $dados['userkey'];
                   if($id != $idconta){
                           echo 'Error 404 - page not found!';
                           return false;
                   } ?>Videos postados - Musicroom</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../estilo.css">
		
		
		
			
	</head>
	<body  onkeydown='return validateKey(event)' bgcolor="white" onselectstart='return false' ondragstart='return false' oncontextmenu='return false'>
		<?php
                                        include $_SERVER['DOCUMENT_ROOT'].'/account/system/config.php';
					$name = @$_GET['name'];
					$pegarusuario = mysqli_query($connection, "SELECT * FROM cadastro WHERE username='$name'");
					$usuariopegado = $pegarusuario;
					$user = mysqli_fetch_array($usuariopegado);
					
					$queryselect = "SELECT * FROM perfil WHERE username='$name'";
					$conexao = mysqli_query($connection, $queryselect) or die(mysqli_error());
					$dado = mysqli_fetch_array($conexao);
					
					if(isset($_GET['name'])){
						echo '<body>
		<div style="background: lightgray;height: 150px;padding: -20px;">
			<p  align="right"><font color="black">'. $user['mail'].'</font><a href=""><font color="blue">Sair</font></a></p>
			<h1 align="left" class="h1"><font color="green" style="text-shadow: 1px 1px 5px red; font-size:33px;"><big>'. $user['name'].'</big></font><br>('.$user['music'].')</h1></p>
		</div>
		
		<div class="tablecasa">
			<table Border="1" cellspacing="1" cellpadding="6" align="right" class="table" bgcolor="gray">
				<tr><td bgcolor="blue" class="table"><a href="index.php?id='. $id.'" class="tdlink"><font color="white" size="4px"><b>Página inicial</b></font></a></td><td bgcolor="blue" class="table"><a href="video.php?id='. $id.'" class="tdlink"><font color="white" size="4px"><b>Videos postados</b></font></a></td><td bgcolor="red" class="table"><a href="perfile.php?id='. $id.'" class="tdlink"><font color="white" size="4px"><b>Meu perfil</b></font></a></td></tr>
			</table>
			</div>';
			if(mysqli_num_rows($conexao) <= 0){
					echo '<center><b>Este usuário ainda não completou seu perfil.</b></center>';
				}
				else{
					echo '<div style="background: lightblue;width:600px;height:absolute;margin: 100px;padding: 40px;">';
				
				echo '<font color="black" size="5px"><b>Nome:<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$user['name'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Usuário:<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$user['username'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Email:<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$user['mail'].'</font></div><br><br>';
				
				echo '<font color="black" size="5px"><b>Cidade:<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dado['cidade'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Estado:</b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dado['estado'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Gênero:</b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dado['genero'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Voçê toca em alguma banda?</b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dado['selecao'].', Toco na banda '.$dado['banda'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Qual(is) instrumento(s)/vocal(is) que você toca/faz?<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dado['instrumentos'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Qual gênero musical que você mais ouve?<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dado['generomusical'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Qual é a sua banda favorita?<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dado['bandafavorita'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Sua personalidade:<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dado['mensagem'].'</font></div><br>';
				echo '</div>';
				echo '</body>
					</html>';
				}
						 return true;
					}
	
				?>
                
                <div style="background: lightgray;height: 150px;padding: -20px;">
			<p  align='right'><font color="black"><?php echo $dados['mail']; ?><form method="POST" action="" align="right"><input type="submit" name="sair" value="Sair" style="background: lightgray;color: blue ;border: 0;cursor: pointer;font-size: 18px;"></form></p>
			<h1 align="left" class="h1"><font color="green" style="text-shadow: 1px 1px 5px red; font-size:33px;"><big><?php echo $dados['name']; ?></big></font><br><?php echo "(".$dados['music'].")"; ?></h1></p>
		</div>
		
		<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='right' class='table' bgcolor='gray'>
				<tr><td bgcolor='blue' class='table'><a href='index.php?id=<?php echo $id; ?>' class='tdlink'><font color='white' size='4px'><b>Página inicial</b></font></a></td><td bgcolor='red' class='table'><a href='video.php?id=<?php echo $id; ?>' class='tdlink'><font color='white' size='4px'><b>Videos postados</b></font></a></td><td bgcolor='blue' class='table'><a href='perfile.php?id=<?php echo $id; ?>' class='tdlink'><font color='white' size='4px'><b>Meu perfil</b></font></a></td></tr>
			</table>
			</div>
                        
                        <h2>
			<font color="black"><a href="index.php?id=<?php echo $id; ?>">Postagens Musicroom</a></font> | <font color="blue">Videos postados</font>
	
			</h2>
			
			<form action="" method="post">
				<input type="hidden" name="usuario" style="background: #EEE; cursor: not-allowed; color: #777" readonly value="<?php echo $dados['username']; ?>">
		
		
				<p>
			
				</p>
		
				<p>
					<label>Insira o Código do link do youtube:</label><br>
					<textarea name="video" cols="90" rows="05"></textarea>
				</p>
				<p>
					<label>Coloque sua descrição:</label><br>
					<textarea name="descricao" cols="90" rows="03"></textarea>
				</p>
	
				<input type="submit" name="postar" value="Publicar" class="input">
			</form>
			
			<hr>
		<?php
                        include $_SERVER['DOCUMENT_ROOT'].'/account/system/config.php';
			$con = "SELECT * FROM videos";
			$conexao1 = mysqli_query($connection, $con) or die(mysqli_error());
			$dado = mysqli_fetch_array($conexao1);
			$dad = $dado;
		
		if( !$dad )
			echo '<h2>Nenhum video postado!</h2>';
		
		else
			while($dado = mysqli_fetch_array($conexao1)){ 
		
		
                ?>
	<hr>
	
	
	<?php
		echo '<iframe width="360" height="300" src="https://www.youtube.com/embed/'.$dado['video'].'"'.'frameborder="0" allowfullscreen></iframe>';
		echo '<br>'.$dado['descricao'].'<br>';
	?>
	
	<p>
		postado por <?php echo "<b>".$dado['usuario']."</b>"; ?>
		em <b><?php echo  $dado['date']; ?></b>
	</p>
	<p>
		
	
	</p>
	
			<?php } ?>
			
			
			
			
	</body>

</html>