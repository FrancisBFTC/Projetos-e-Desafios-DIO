<?php
	require '../system/config.php';
	require '../system/database.php';

	if( isset($_GET['id']) || empty($_GET['id']))
		header('Location: index.php');
	else{
		
		$id = DBEscape (strip_tags( trim( $_GET['id'])));
		$post = DBRead ( 'posts', "WHERE id = '{$id}' LIMIT 1");
		
		if( !$post )
			header('Location: index.php');
		else
			$post = $post[0];
			
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Editar Postagens : <?php echo $post['titulo']; ?></title>
</head>

<body>
	<h2>
		Editar Postagens | <a href="index.php" title="Voltar">Voltar</a>
	</h2>
	<hr>
	
	<?php
	
		if( isset( $_POST['salvar'] ) ){
			
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
				
				$dbCheck = DBRead( 'posts', "WHERE titulo = '". $form['titulo']."' AND id != '{$id}'");
				
				if( $dbCheck )
					echo 'Desculpe, mas já existe uma postagem com este titulo!';
				else{
					
					if( DBUpDate( 'posts', $form, "id = '{$id}'" ) ){
						echo 'Suas alterações foram salvar com sucesso!'
						
						$post = DBRead ( 'posts', "WHERE id = '{$id}' LIMIT 1");
						$post = $post[0];
					}else
						echo 'Desculpe, ocorreu um erro...';
				}
				
			}
			
			echo '<hr>';
		}

	?>
	
	
	<form action="" method="post">
	
		<p>
			<label>Titulo</label><br>
			<input type="text" name="titulo" value="<?php echo $post['titulo']; ?>">
		</p>
		
		<p>
			<label>Autor</label><br>
			<input type="text" name="autor" value="<?php echo $post['autor']; ?>">
		</p>
		
		<p>
			<label>Status</label><br>
			
			<select name="status">
				<?php if( $post['status']): ?>
				<option value="1" selected>Ativo</option>
				<option value="0">Inativo</option>
				<?php else: ?>
				
				<option value="1">Ativo</option>
				<option value="0" selected>Inativo</option>
				<?php endif; ?>
			</select>
		</p>
		
		<p>
			<label>Conteúdo</label><br>
			<textarea name="conteudo" cols="50" rows="15"><?php echo $post['conteudo']; ?></textarea>
		</p>
	
	<input type="submit" name="salvar" value="Salvar">
	</form>

</body>
</html>