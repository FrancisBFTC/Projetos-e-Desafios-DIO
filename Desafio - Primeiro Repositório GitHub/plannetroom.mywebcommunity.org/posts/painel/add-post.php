<?php
	require '../system/config.php';
	require '../system/database.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Adicionar Postagens</title>
</head>

<body>
	<h2>
		Adicionar Postagens | <a href="index.php" title="voltar">Voltar</a>
	</h2>
	<hr>
	<?php
	
		if( isset( $_POST['publicar'] ) ){
			
			$form['titulo'] 	= DBEscape( strip_tags( trim( $_POST['titulo'])));
			$form['autor'] 		= DBEscape( strip_tags( trim( $_POST['autor'])));
			$form['status']	 	= DBEscape( strip_tags( trim( $_POST['status'])));
			$form['data']		= date('Y-m-d H:i:s');
			$form['conteudo'] 	= str_replace('\r\n', "\n", DBEscape( trim( $_POST['conteudo'])));
			
			
			
			if(empty( $form['titulo'] ) )
				echo 'Preencha o campo titulo!';
			else if(empty( $form['autor'] ) )
				echo 'Preencha o campo autor!';
			else if( empty( $form['status'] ) && $form['status'] != '0' )
				echo 'Preencha o campo status!';
			else if( empty( $form['conteudo'] ) )
				echo 'Preencha o campo conteudo!';
			else{
				
				$dbCheck = DBRead( 'posts', "WHERE titulo = '". $form['titulo']."'");
				
				if( $dbCheck )
					echo 'Desculpe, mas já existe uma postagem com este titulo!';
				else{
					
					if( DBCreate( 'posts', $form ) )
						echo 'Sua postagem foi enviada com sucesso!'
					else
						echo 'Desculpe, ocorreu um erro...';
				}
				
			}
			
			echo '<hr>';
		}

	?>
	
	<form action="" method="post">
	
		<p>
			<label>Titulo</label>
			<input type="text" name="titulo">
		</p>
		
		<p>
			<label>Autor</label><br>
			<input type="text" name="autor">
		</p>
		
		<p>
			<label>Status</label><br>
			
			<select name="status">
				<option value="1" selected>Ativo</option>
				<option value="2" selected>Inativo</option>
			</select>
		</p>
		
		<p>
			<label>Conteúdo</label><br>
			<textarea name="conteudo" cols="50" rows="15"></textarea>
		</p>
	
	<input type="submit" name="publicar" value="Publicar">
	</form>

</body>
</html>