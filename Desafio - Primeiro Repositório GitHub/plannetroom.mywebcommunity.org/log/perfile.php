
<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/system/system.php';
        include $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
	AccessPrivate();
	$dados = GetUser();
	$id = $_GET['id'];
        
         $idconta = $dados['userkey'];
                   if($id != $idconta){
                           echo '<font size="6px"><b>Error 404 - page not found</b></font><br>';
                           echo '<a href="../index.php"><-- Voltar a página</a>';
                           
                   }
	
	echo "<meta charset='utf-8'>";
	
	
		if( isset( $_POST['salvar'] ) ){
			
			$username = $_POST['username'];
                        $cidade	=  $_POST['cidade'];
			$estado		= $_POST['estado'];
			$genero	=  GetPost('genero');
			$selecao	= GetPost('selecao');
			$banda	=  $_POST['banda'];
			$instrumentos	=  $_POST['instrumentos'];
			$generomusical	=  $_POST['generomusical'];
			$bandafavorita	=  $_POST['bandafavorita'];
			$mensagem	=  $_POST['mensagem'];
			
			
			
			if(empty( $cidade ) )
				echo 'Preencha o campo cidade!';
			else if( empty( $estado ) )
				echo 'Preencha o campo estado!';
			else if(empty( $genero ) )
				echo 'Marque a opção do gênero!';
			else if( empty( $selecao ) )
				echo 'Selecione se toca em alguma banda!';
			else if( empty( $instrumentos ) )
				echo 'Coloque o instrumento que você toca!';
			else if(empty( $generomusical ) )
				echo 'Coloque o gênero musical que mais ouve!';
			else if( empty( $bandafavorita ) )
				echo 'Coloque sua banda favorita!';
			else if(empty( $mensagem ) )
				echo 'Escreva alguma descrição!';
			
			else{
				$id_usuario = $_GET['id'];
				$queryregister = "INSERT INTO perfil(username, cidade, estado, genero, selecao, banda, instrumentos, generomusical, bandafavorita, id_usuario, mensagem) 
				VALUES('$username', '$cidade', '$estado', '$genero', '$selecao', '$banda', '$instrumentos', '$generomusical', '$bandafavorita', '$id_usuario', '$mensagem')";
				mysqli_query($connection, $queryregister) or die(mysqli_error());
				
				
			}
			
			echo '<hr>';
		}
                
                                
                               

?>

<!doctype html> 


<html>

	<head>

	
 

		<title><?php $idconta = $dados['userkey'];
                   if($id != $idconta){
                           echo 'Error 404 - page not found!';
                           return false;
                   } ?>Meu perfil - Musicroom</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../estilo.css">
		
		
		
			
	</head>
	<body>
		
                
                <div style="background: lightgray;height: 150px;padding: -20px;">
			<p  align='right'><font color="black"><?php echo $dados['mail']; ?>
                        
                      </p>
			<h1 align="left" class="h1"><font color="green" style="text-shadow: 1px 1px 5px red; font-size:33px;"><big><?php echo $dados['name']; ?></big></font><br><?php echo "(".$dados['music'].")"; ?></h1></p>
		</div>
		
		<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='right' class='table' bgcolor='gray'>
				<tr><td bgcolor='blue' class='table'><a href='index.php?id=<?php echo $id; ?>' class='tdlink'><font color='white' size='4px'><b>Página inicial</b></font></a></td><td bgcolor='blue' class='table'><a href='video.php?id=<?php echo $id; ?>' class='tdlink'><font color='white' size='4px'><b>Videos postados</b></font></a></td><td bgcolor='red' class='table'><a href='perfile.php?id=<?php echo $id; ?>' class='tdlink'><font color='white' size='4px'><b>Meu perfil</b></font></a></td></tr>
			</table>
			</div>
			
			<h2>
			<font color="black"><a href="index.php?id=<?php echo $id; ?>">Postagens Musicroom</a></font> | <font color="black"><a href="video.php?id=<?php echo $id; ?>">Videos postados</a></font> | 
			<font color="blue">Meu perfil</font>
			<?php
                                include $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
				$id = $_GET['id'];
				$select = "SELECT * FROM perfil WHERE id_usuario='$id'";
				$result = mysqli_query($connection, $select) or die(mysqli_error());
				
				if(mysqli_num_rows($result) <= 0)
					echo '<form method="POST" action="" align="right"><input type="submit" name="completar" value="Complete o seu perfil" style="background: white;color: blue ;border: 0;cursor: pointer;font-size: 18px;"></form>';
				else
					
					echo '<form method="POST" action="" align="right"><input type="submit" name="submit" value="fazer alterações" style="background: white;color: blue ;border: 0;cursor: pointer;font-size: 18px;"></form>';
					
			?>
			<?php
                        include $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
		if( isset( $_POST['alterar'] ) ){
			
			$city	=  $_POST['cidade'];
			$estate		= $_POST['estado'];
			$genre	=  GetPost('genero');
			$seletion	= GetPost('selecao');
			$band	=  @$_POST['banda'];
			$instruments	=  $_POST['instrumentos'];
			$musicalgenre	=  $_POST['generomusical'];
			$favoriteband	=  $_POST['bandafavorita'];
			$mensage	=  $_POST['mensagem'];
			
			
			
			if(empty( $city ) )
				echo 'Preencha o campo cidade!';
			else if( empty( $estate ) )
				echo 'Preencha o campo estado!';
			else if(empty( $genre ) )
				echo 'Marque a opção do gênero!';
			else if( empty( $seletion ) )
				echo 'Selecione se toca em alguma banda!';
			else if( empty( $instruments ) )
				echo 'Coloque o instrumento que você toca!';
			else if(empty( $musicalgenre ) )
				echo 'Coloque o gênero musical que mais ouve!';
			else if( empty( $favoriteband ) )
				echo 'Coloque sua banda favorita!';
			else if(empty( $mensage ) )
				echo 'Escreva alguma descrição!';
			else{
				
				$id = $_GET['id'];
				$DBUpdate = "UPDATE perfil SET cidade='$city', estado='$estate', genero='$genre', selecao='$seletion',
				banda='$band', instrumentos='$instruments', generomusical='$musicalgenre', bandafavorita='$favoriteband',
				mensagem='$mensage' WHERE id_usuario='$id'";
				$result = mysqli_query($connection, $DBUpdate) or die (mysqli_error());
					
					if( $result ){
						echo '<font color="blue">Suas alterações foram salvas com sucesso!</font>';
						
						$post = "SELECT * FROM perfil WHERE id_usuario='$id' LIMIT 1";
						$post = $post[0];
					}else
						echo 'Desculpe, ocorreu um erro...';
			}	
				
			echo '<hr>';
		}
		
		?>
			<?php
                                include $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
				$queryselect = "SELECT * FROM perfil WHERE id_usuario='$id'";
				$conexao = mysqli_query($connection, $queryselect) or die(mysqli_error());
				$dado = mysqli_fetch_array($conexao);
				if(isset($_POST['submit'])){
					
					echo '<hr>
						<div style="background: lightblue;width:600px;height:absolute;margin: 100px;padding: 40px;">
			
				<font color="black" size="4px"><b>Nome:</b></font><br><font color="black" size="4px">'. $dados['name'].'</font><br><br>
				<font color="black" size="4px"><b>Usuário:</b></font><br><font color="black" size="4px">'.$dados['username'].'</font><br><br>
				<font color="black" size="4px"><b>Email:</b></font><br><font color="black" size="4px">'. $dados['mail'].'</font><br><br>
			<form method="POST" action="">
				
				<font color="black" size="4px"><b>Cidade:</b></font><br><input type="text" name="cidade" value="'. $dado['cidade'].'" style="border-radius: 20px;background: lightgreen;font-size: 20px;"><br></br>
				<font color="black" size="4px"><b>Estado:</b></font><br><input type="text" name="estado" value="'. $dado['estado'].'" style="border-radius: 20px;background: lightgreen;font-size: 20px;"><br></br>
				
				<font color="black" size="4px"><b>Gênero:</b></font><br><b>Masculino<input type="radio" name="genero" value="masculino">Feminino<input type="radio" name="genero" value="feminino"></b><br><br>
				<font color="black" size="4px"><b>Toca em alguma banda?</b></font><br>
				<select id="s1" name="selecao" onchange="populate(this.id)" style="border-radius: 20px;background: lightgreen;font-size: 20px;">
				<option name="selecao" value="'.$dado['selecao'].'">------</option>
				<option name="selecao" value="sim" style="border-radius: 20px;background: lightgreen;font-size: 20px;">Sim</option>
				<option name="selecao" value="não" style="border-radius: 20px;background: lightgreen;font-size: 20px;">Não</option>
				
				</select> <font color="black" size="4px"> <p id="inner"></p><br><br/>
				<font color="black" size="4px"><b>Quais os instrumentos que você toca?</b></font><br><input type="text" name="instrumentos" value="'. $dado['instrumentos'].'" style="border-radius: 20px;background: lightgreen;font-size: 20px;"><br></br>
				<font color="black" size="4px"><b>Qual gênero musical que mais ouve?</b></font><br><input type="text" name="generomusical" value="'.$dado['generomusical'].'" style="border-radius: 20px;background: lightgreen;font-size: 20px;"><br></br>
				<font color="black" size="4px"><b>Coloque sua banda favorita:</b></font><br><input type="text" name="bandafavorita" value="'. $dado['bandafavorita'].'" style="border-radius: 20px;background: lightgreen;font-size: 20px;"><br></br>
				<font color="black" size="4px"><b>Descreva a sua personalidade:</b></font><br><textarea name="mensagem" rows="6" cols="30" style="border-radius: 20px;background: lightgreen;font-size: 20px;">'. $dado['mensagem'].'</textarea><br></br>
				
				<input type="submit" name="alterar" value="Salvar" class="input">
			</form>
			</div>
					
					<hr>';
				}
				
			?>
			</h2>
			<?php
                                include $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
                                $queryselect = "SELECT * FROM perfil WHERE id_usuario='$id'";
				$conexao = mysqli_query($connection, $queryselect) or die(mysqli_error());
				$dado = mysqli_fetch_array($conexao);
				if(mysqli_num_rows($conexao) <= 0){
					echo '<center><b>Nenhum perfil encontrado clique em "Complete o seu perfil"</b></center>';
				}
				else{
					echo '<div style="background: lightblue;width:600px;height:absolute;margin: 100px;padding: 40px;">';
				
				echo '<font color="black" size="5px"><b>Nome:<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dados['name'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Usuário:<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dados['username'].'</font></div><br>';
				
				echo '<font color="black" size="5px"><b>Email:<b></font><div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table"><font color="red">'
				.$dados['mail'].'</font></div><br><br>';
				
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
					
				
			?>
<script type="text/javascript">
				function populate(s1){
				var s1 = document.getElementById(s1);
					if (s1.value == "sim"){
						document.getElementById('inner').innerHTML = '<b>Quais?</b></font><input type="text" name="banda" value="<?php echo $dado["banda"]; ?>" style="border-radius: 20px;background: lightgreen;font-size: 20px;"></p>';

		
					}
					if(s1.value == "não")
						document.getElementById('inner').innerHTML = '';
					
		
		}
    </script>
	
			
			<?php
			
			if(isset($_POST['completar'])){
				
				echo '
			
			<div style="background: lightblue;width:600px;height:absolute;margin: 100px;padding: 40px;">
			
				<font color="black" size="4px"><b>Nome:</b></font><br><font color="black" size="4px">'. $dados['name'].'</font><br><br>
				<font color="black" size="4px"><b>Usuário:</b></font><br><font color="black" size="4px">' .$dados['username'].'</font><br><br>
				<font color="black" size="4px"><b>Email:</b></font><br><font color="black" size="4px">'.$dados['mail'].'</font><br><br>
			<form method="POST" action="">
				
				<font color="black" size="4px"><b>Cidade:</b></font><br><input type="text" name="cidade" value="'. $dado['cidade'].'" style="border-radius: 20px;background: lightgreen;font-size: 20px;"><br></br>
				<font color="black" size="4px"><b>Estado:</b></font><br><input type="text" name="estado" value="'. $dado['estado'].'" style="border-radius: 20px;background: lightgreen;font-size: 20px;"><br></br>
				
                                <input type="hidden" name="username" value="'. $dados['username'].'" style="background: #EEE; cursor: not-allowed; color: #777" readonly>
                                
				<font color="black" size="4px"><b>Gênero:</b></font><br><b>Masculino<input type="radio" name="genero" value="masculino">Feminino<input type="radio" name="genero" value="feminino"></b><br><br>
				<font color="black" size="4px"><b>Toca em alguma banda?</b></font><br>
				<select id="s1" name="selecao" onchange="populate(this.id)" style="border-radius: 20px;background: lightgreen;font-size: 20px;">
				<option>------</option>
				<option name="selecao" value="sim" style="border-radius: 20px;background: lightgreen;font-size: 20px;">Sim</option>
				<option name="selecao" value="não" style="border-radius: 20px;background: lightgreen;font-size: 20px;">Não</option>
				
				</select> <font color="black" size="4px"> <p id="inner"></p><br><br/>
				<font color="black" size="4px"><b>Quais os instrumentos que você toca?</b></font><br><input type="text" name="instrumentos" value="'. $dado['instrumentos'].'" style="border-radius: 20px;background: lightgreen;font-size: 20px;"><br></br>
				<font color="black" size="4px"><b>Qual gênero musical que mais ouve?</b></font><br><input type="text" name="generomusical" value="'. $dado['generomusical'].'" style="border-radius: 20px;background: lightgreen;font-size: 20px;"><br></br>
				<font color="black" size="4px"><b>Coloque sua banda favorita:</b></font><br><input type="text" name="bandafavorita" value="'.$dado['bandafavorita'].'" style="border-radius: 20px;background: lightgreen;font-size: 20px;"><br></br>
				<font color="black" size="4px"><b>Descreva a sua personalidade:</b></font><br><textarea name="mensagem" rows="6" cols="30" style="border-radius: 20px;background: lightgreen;font-size: 20px;">'. $dado['mensagem'].'</textarea><br></br>
				
				<input type="submit" name="salvar" value="Salvar" class="input">
			</form>
			</div>';
					
			}
			
			?>
			
			
			
	</body>

</html>