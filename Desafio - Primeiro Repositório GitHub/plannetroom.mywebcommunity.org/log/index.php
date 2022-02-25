<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/system/system.php';
        include $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
	AccessPrivate();
	$dados = GetUser();
	$id = @$_GET['id'];
	$ident = @$_GET['ident'];
        
       
	 $idconta = $dados['userkey'];
                   if($id != $idconta){
                           echo '<font size="6px"><b>Error 404 - page not found</b></font><br>';
                           echo '<a href="../index.php"><-- Voltar a página</a>';
                           
                   }		
	
	
	echo "<meta charset='utf-8'>";
		
	
	
	if( isset( $_GET['action']) && isset( $_GET['id']) && !empty( $_GET['action']) && !empty( $_GET['action'])){
		
                
		$id = mysqli_real_escape_string($connection, strip_tags( trim( $_GET['id'] ) ) );
		
		switch ( $_GET['action'] ){
			case 1:
				$update1= "UPDATE posts SET status=1 WHERE id='$id'";
				mysqli_query($connection, $update1) or die(mysqli_error());
			break;
			
			case 2:
				$update2= "UPDATE posts SET status=0 WHERE id='$id'";
				mysqli_query($connection, $update1) or die(mysqli_error());
			break;
			
			case 3:
				$delete= "DELETE FROM posts WHERE id='$ident'";
				mysqli_query($connection, $delete) or die(mysqli_error());
			break;
		}
		
		
	}
	
	
	
	
		
		
		
				$offlineupdate = "UPDATE cadastro SET status=1 WHERE userkey='$id'";
				mysqli_query($connection, $offlineupdate) or die(mysqli_error());
		
			
				
                                $connect = "SELECT * FROM cadastro";
				$querycon = mysqli_query($connection, $connect) or die(mysqli_error());
				$datess = mysqli_fetch_array($querycon);
				
				
				if(isset($_POST['sair'])){
					$id = $_GET['id'];
				
				$offlineupdate = "UPDATE cadastro SET status=0 WHERE userkey='$id'";
				mysqli_query($connection, $offlineupdate) or die(mysqli_error());
                                       unset($_SESSION['userLog']);
                                      

                                       
				}
                                
                               
                                
                             
                            
                             
                             
?>

<!doctype html> 


<html>

	<head>
               

               
	
 

		<title><?php $idconta = $dados['userkey'];
                   if($id != $idconta){
                           echo 'Error 404 - page not found!';
                           return false;
                   } ?>Pagina inicial - Plannetroom</title>
		<meta charset="UTF-8">
                <style>
                        body{
                                background: url('https://catracalivre.com.br/wp-content/uploads/2014/08/espaco_sideral_-_por_Rastan_istockphoto1.jpg');
                        }
                </style>
        <link rel="stylesheet" type="text/css" href="../estilo.css">
		
		
                
                
	</head>
	<body>
		
                
                <?php
                                        include $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
					$name = @$_GET['name'];
					$pegarusuario = mysqli_query($connection, "SELECT * FROM cadastro WHERE username='$name'");
					$usuariopegado = $pegarusuario;
					$user = mysqli_fetch_array($usuariopegado);
					
					$queryselect = "SELECT * FROM perfil WHERE username='$name'";
					$conexao = mysqli_query($connection, $queryselect) or die(mysqli_error());
					$dado = mysqli_fetch_array($conexao);
					
					if(isset($_GET['name'])){
                 ?>
			
		<div style="background: black;height: 150px;padding: -20px;">
			<p  align="right">
                                <font color="black">'. $user['mail'].'</font>
                                <a href=""><font color="blue">Sair</font></a>
                        </p>
			<h1 align="left" class="h1">
                        <font color="green" style="text-shadow: 1px 1px 5px red; font-size:33px;"><big> <?php echo $user['name'] ?> </big></font>
                        <br> <?php echo $user['music'] ?> </h1>
       
		</div>
		
		<div class="tablecasa">
			<table Border="1" cellspacing="1" cellpadding="6" align="right" class="table" bgcolor="gray">
				<tr><td bgcolor="blue" class="table"><a href="index.php?id='. $id.'" class="tdlink"><font color="white" size="4px"><b>Página inicial</b></font></a></td><td bgcolor="blue" class="table"><a href="video.php?id='. $id.'" class="tdlink"><font color="white" size="4px"><b>Videos postados</b></font></a></td><td bgcolor="red" class="table"><a href="perfile.php?id='. $id.'" class="tdlink"><font color="white" size="4px"><b>Meu perfil</b></font></a></td></tr>
			</table>
		</div>
                <?php
                        
			if(mysqli_num_rows($conexao) <= 0){
                                if($_GET['name'] != "musicroom"){
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
                                        if($_GET['name'] == "musicroom"){
                                                echo '<h1 align="center">Termos e instruções</h1>';
                                                echo '<br><br><h3><b><font color="blue">O Musicroom agradece pelo seu cadastro e te dar as boas-vindas nesta nova rede social de músicos!</font></b></h3>';
                                                echo '<br>Esta nova página do site http://planetamusical.atwebpages.com foi criada e desenvolvida no intuito de unir músicos com os mesmos interesses: Formar bandas, compartilhar gostos e habilidades musicais,
                                                etc... Um espaço exclusivo para pessoas que tem talentos individuais ou semelhantes pelo lado cultural(principalmente pelo ramo musical).';
                                                echo '<br>O Musicroom foi criado de uma forma ampla e complexa, porém simples ao mesmo tempo e fácil de ser manejado pelo usuário, por isso contém alguns termos e instruções para uso do site, eis algumas instruções:
                                                <br><br><h2>Página inicial - Bate papo Musicroom</h2>
                                                <ol>
                                                <li>O sistema desenvolvido nesta página não é como um bate papo tradicional do facebook. É um sistema de postagem que é usado para conversa online ou simplesmente para postagens,ou seja,como todo "Post" para ser visualizado, precisa-se que a página seja atualizada,então quando
                                                alguém manda uma mensagem, para ser visualizado a mensagem desta pessoa, o próprio usuário tem que atualizar a página em F5 ou recarrega-la, a não ser que ambos os usuários mande as mensagens dentro de 20 segundos, pois justamente por esses detalhes
                                                ,o sistema foi programado para atualizar a página automaticamente, a cada vez que o botão "Publicar" é clicado após 20 segundos a página se atualiza para assim os usuários visualizar a mensagem no mesmo instante que foi entregue por outro.Caso queira apenas postar pra determinadas pessoas, escreva sua mensagem e clique em "Publicar"
                                                , mas se quer conversar com um grupo maior, coloque um apelido um apelido/nome logo abaixo do botão publicar e entre no chat.</li>
                                                
                                                <br><li>Na parte lateral direita da página inicial, existe um link chamado "status de usuários", que exibe uma lista de usuários cadastrados no musicroom, podendo também ocultar a mesma. Nesta lista poderá saber quem está "online" ou "offline", e ao ser 
                                                clicado no nome do usuário, poderá visualizar(apenas) os dados do perfil preenchido e cadastrados pelo mesmo. O site não esconde os dados já cadastrados,porém, reflita bem antes preencher alguma informação,no entanto, o perfil é opcional.</li>
                                                <br><li>Acima da página tem a opção "Sair", que ao ser clicado corta a sessão da conta, no primeiro clique, a conta já efetua o logout,mas ainda não sai de imediato da página, por isso pra sair de imediato é preciso clicar duas vezes.Caso for sair da conta, evite fechar o link com a conta aberta, isso mostrará que está online, mesmo estando com a sessão fechada.</li>
                                                
                                                </ol>
                                                <br><br><h2>Videos postados</h2>
                                                <ol>
                                                        <li>Nesta página, os videos são postados especialmente do youtube, ainda não foi testado vindo de outro site mas provalmente daria erro ao postar. Os videos são enviados via "iframe", então para publicar com sucesso precisa-se copiar e inserir no campo de texto somente o código de identificação do link, Ex.: http://www.youtube.com/watch?v=<b>2Bdi00J21n3</b>... o código em negrito é a única parte que deve ser copiada
                                                        e colada no campo de texto da página, após coloque alguma descrição do video(isto é opcional) e pronto! seu video esta publicado para todos.</li>
                                                        <br><li>Como o musicroom é um site de compartilhamento em massa, sem restrinção, todos os videos postados são visiveis a todas as contas que existir no musicroom,porém, sempre é identificado quem postou,a data da publicação e o comentário do video(descrição) para que os outros vejam. Após enviados, os videos não sao mais excluídos a não ser que contacte o administrador para a exclusão em caso de desistência do exibimento do video.</li>
                                                        <br><li>Os videos aceitáveis na página, são videos que tem a ver apenas com "cultura": Música, dança,projetos culturais,arte em geral; Música de bandas de "todos" os estilos serão aceitados, exceto videos que desmoraliza a arte e a humanidade, se estes termos for descumpridos, acarretará na exclusão do video, caso for insistente - exclusão da conta. <b>Obs.: certifique-se que tenha de maiores no grupo e pessoas que tenham alguma habilidade na parte "artística em geral".</b></li>
                                                        
                                                </ol>
                                                <br><br><h2>Perfil</h2>
                                                <ol>
                                                        <li>O perfil é opcional, nada no site é obrigatório, voçê pode salvar os dados para serem exibidos e altera-los no futuro se quiser. <b>Obs.: É impossível deixar os dados do perfil em restrito no musicroom, porque é um site de compartilhamento de habilidades musicais e culturais, por isso que precisam que vejam sobre seus talentos ou musicalidade, independente de qual categoria seja,porém poderá não preencher o perfil se quiser.</b></li>
                                                </ol>
                                                  
                                                
                                                
                                                <p>O musicroom agradece muito pela leitura e espera que você goste e aproveite bem desta rede social! <br><a href="?id='.$id.'"><font color="blue">&laquo Voltar à página inicial</font></a><h3 align="right"><i>Criado por: Francis de vil</i></h3></p>
                                                <div style="background: darkblue;height:40px;">
                                                        <footer>
                                                                <p align="center"><font color="blue"><i>&copy Copyright 2016 Planeta Musical - Musicroom; created by Francis;</i></font><p>
                                                        </footer>
                                                </div>';
                                        }
                                       
                                                
                                        
						 return true;
					}
                                        }
	
				?>
                 <div style="width:auto;height:50px;background-color:gray;margin-top:-18px;margin-bottom:-20px;">
                        <h3 align="left" style="margin-top:25px;"><font color="white" style="text-shadow: 1px 1px 5px blue; font-size:33px;margin-left:50px;">Plannetroom</font>
                        <input type="text" placeholder="Pesquise algo aqui!" name="Search" style="width:300px;height:30px;margin-left:20px;border-radius:5px 5px 5px 5px;background-color:black;color:white;"/>
                        </h3>
                 </div>
                
                <div style="margin-left:50px;margin-right:380px;">
		<div class="div_top">
                       
			
			<form method="POST" action="" align="right"><input type="submit" name="sair" value="Sair" style="background: lightgray;color: blue ;border: 0;cursor: pointer;font-size: 18px;"></form>
                        <p style="margin-left:130px;margin-top:250px;">
                        <font style="text-shadow: 1px 1px 5px blue; font-size:33px;color:white;"><?php echo $dados['name']; ?></font>
                        <br><font style="font-size:20px;color:white;margin-left:8px;"><?php echo $dados['music']; ?></font>
                        <br><font style="font-size:15px;color:white;margin-left:8px;"><?php echo $dados['mail']; ?></font>
                        <br><font style="font-size:15px;color:white;margin-left:8px;">Planaltina de goiás,Goiás,Brazil</font>
                        </p>
		</div>
		
		<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='right' class='table'>
                           <tr>
                                <td bgcolor='blue' class='table'>
                                        <a href='index.php?id=<?php echo $id; ?>' class='tdlink'>
                                                <font color='white' size='4px'><b>Divulgações</b></font>
                                        </a>
                                </td>
                                <td class='table'>
                                        <a href='video.php?id=<?php echo $id; ?>' class='tdlink'>
                                                <font color='white' size='4px'><b>Fotos</b></font>
                                        </a>
                                </td>
                                <td class='table'>
                                        <a href='video.php?id=<?php echo $id; ?>' class='tdlink'>
                                                <font color='white' size='4px'><b>Videos</b></font>
                                        </a>
                                </td>
                                <td class='table'>
                                        <a href='video.php?id=<?php echo $id; ?>' class='tdlink'>
                                                <font color='white' size='4px'><b>Grupos</b></font>
                                        </a>
                                </td>
                                <td class='table'>
                                        <a href='perfile.php?id=<?php echo $id; ?>' class='tdlink'>
                                                <font color='white' size='4px'><b>Perfil</b></font>
                                        </a>
                                </td>
                           </tr>
			</table>
                        <div style="margin:10px 10px 10px 10px;width:110px;height:130px;border-radius:5px 5px 5px 5px;border:solid 1px white;">
                                <img src="icon-masc.png">
                        </div>
			</div>
                        
			
			<h2>
			<font color="blue">Minhas divulgações</font> | 
			<div style="float: right;">
			<?php
                        
                        if(!isset($_POST['status'])){
                        
                        echo '<form method="POST" action="">
                                <input type="submit" name="status" value="Status de usuários" style="background: white;color: blue; cursor: pointer;border: 0;font-size: 18px;">
                        </form>';
                        
                        }
                        else{
                       
                            echo '<form method="POST" action="">
                                <input type="submit" name="ocultar" value="Ocultar status" style="background: white;color: blue; cursor: pointer;border: 0;font-size: 18px;">
                        </form>'; 
                       
                        }
                        
                        
                        
                        ?>
                        
                        
                        <?php
                        include $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
                        if(isset($_POST['status'])){
                        
			$connect = "SELECT * FROM cadastro";
			$querycon = mysqli_query($connection, $connect) or die(mysqli_error());
			$datess = mysqli_fetch_array($querycon);
			
			
			
		
		if( !$datess )
			echo '<h2><font color="red">Nenhum usuário cadastrado!</font></h2>';
		
		else
			while($datess = mysqli_fetch_array($querycon)){ 
		
		
		?>
                
			
				<?php
				
					echo '<div style="background: lightgray;padding: 1px;height: absolute;width: absolute;" class="table">';
					if($datess['status'])
						echo '<a href="index.php?id='.$id.'&&name='.$datess['username'].'">'.$datess['username'].'</a>'.' <font color="green">online</font>'.'<br>';
					else{
						echo '<a href="index.php?id='.$id.'&&name='.$datess['username'].'">'.$datess['username'].'</a>'.' <font color="red">offline</font>'.'<br>';
					}
                                        echo '</div>';
				
				?>
			
		
			
		
			
			<?php } ?>
                        
                       <?php } ?>
			</div>
	
			</h2>
                       
	<hr>
		<?php
                        include $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
			$con = "SELECT * FROM posts ORDER BY id ASC";
			$conexao1 = mysqli_query($connection, $con) or die(mysqli_error());
			$dado = mysqli_fetch_array($conexao1);
			$dad = $dado;
                        
                        
		
		if( !$dad )
			echo '<h2>Nenhuma postagem encontrada!</h2>';
		
		else
			while($dado = mysqli_fetch_array($conexao1) ){ 
                        
                   
                        
		
		?>
                        
                       
               
	
	
	<hr>
	<h2 style="color:white;">
		<b><?php echo $dado['titulo']; ?></b>
	</h2>
	
	
	<p style="color:white;">
		postado por <b><a href="index.php?id=<?php echo $id; ?>&&name=<?php echo $dado['usuario']; ?>"><font color="blue"><?php echo $dado['usuario']; ?></font></a></b> em <b><?php echo  $dado['date']; ?></b>
		
	</p>
	
	<?php
	$ids = $dado['id_usuario'];
		$id = @$_GET['id'];
		$identificao = $ids == $id;
	if($identificao){
	echo '<div style="background: lightgreen;padding: 1px;height: absolute;width: absolute;" class="table">
	<p>
		 <b> '.$dado['conteudo'].'</b>
		
	</p>
	</div>';
	}
	else{
		echo '<div style="background: lightgray;padding: 1px;height: absolute;width: absolute;" class="table">
	<p>
		 <b> '.$dado['conteudo'].'</b>
		
	</p>
	</div>';
	}
	?>
	<p>
		
		
		<?php 
		$ids = $dado['id_usuario'];
		$id = @$_GET['id'];
		$identificao = $ids == $id;
		if($identificao){
                
		echo '<a href="edit-post.php?ident=' .$dado['id'].'&&id=' .$id.'">'. $dados['acao1'].'</a> |
		<a href="index.php?action=3&&ident='.$dado['id'].'&&id='.$id .'#action'.'">'.  $dados['acao2'].'</a>';
		
		}
               
               
		?>
	</p>
                  
	
			<?php } ?>
	
	<hr>
        <?php
                include $_SERVER['DOCUMENT_ROOT'].'/system/config.php';
                if( isset( $_POST['publicar'] ) ){
			
			$titulo	=  $_POST['titulo'];
                        $usuario = $_POST['usuario'];
			$date		= date('d/m/Y');
			$conteudo	=  str_replace('\r\n', "\n", mysqli_real_escape_string($connection, trim($_POST['conteudo'])));
			
			
			
			if(empty( $titulo ) )
				echo '<font color="red">Preencha o campo titulo!</font>';
			else if( empty( $conteudo ) )
				echo '<font color="red">O campo de mensagem está vazia!</font>';
			else{
				$status = 1;
				$id_usuario = @$_GET['id'];
				$dbregister = "INSERT INTO posts(usuario, titulo, conteudo, date, id_usuario, status) VALUES('$usuario', '$titulo', '$conteudo', '$date', '$id_usuario', $status)";
				mysqli_query($connection, $dbregister) or die(mysqli_error());
				
                                echo '<meta HTTP-EQUIV="refresh" content="0;URL=index.php?id='.$id.'&&#action'.'">';
			}
			
			
		}
        
        ?>
               
	
	<a name="action">
	<p align="right"><a href="?id=<?php echo $id.'&&name=musicroom'; ?>"><font color="red">Termos do Musicroom &raquo;</font></a></p>
        <form action="#action" method="post">
                <input type="hidden" name="usuario" value="<?php echo $dados['username']; ?>">
		<label>Titulo:</label>
                <input type="text" name="titulo">
		

                <p>
			<label>Escreva alguma mensagem:</label><br>
			<textarea name="conteudo" cols="50" rows="15"></textarea>
		</p>
	
	<input type="submit" name="publicar" value="Publicar" class="input">
	</form>
        </a>
		
			
		<div style="float: right;margin: -190px 0;background: lightgray;">
                <h2><font color="blue">Bate papo Musicroom</font></h2>
		<font face="Verdana" size="2">
                        <form action="batepapo/entrar.php?id=<?php echo $id; ?>" method="post">
                        Apelido: 
                        <input type="text" name="nick" value="<?php echo $dados['username']; ?>"><br>
                        Cor do apelido:
                        <select name="cor">
                         <option value="blue">Azul</option>
                         <option value="red">Vermelho</option>
                         <option value="green">Verde</option>
                         <option value="black" selected>Preto</option>
                        </select><br>
                        <input type="submit" value="Entrar" class="input">
                        </form>
                        <hr size="1">
                        <a href="#" onClick="window.open('batepapo/espiar.php?id=<?php echo $id; ?>','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=600,height=300'); return false;">Espiar bate-papo</a><br>
                        Antes de utilizar nossos serviços, leia nosso <a href="batepapo/termo.htm?id=<?php echo $id; ?>" onClick="window.open('batepapo/termo.htm','Janela','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=600,height=300'); return false;">termo de uso</a>.</font>
                        <hr>
                       <?php
                                if($_GET['id'] == "26aec68e3616f17f674846bb30ec3ddc84f842ba"){
                                                        echo 'Ir para <form method="POST" action="batepapo/login/entrar.php?url=/account/log/batepapo/login/index.php" target="_blank"><input type="submit" name="post" value="Area de administração" style="background: lightgray;color: blue;border: 0;cursor: pointer;"></form>';
                                                }
                        ?>
		</div>
                
                </div>
			
	</body>

</html>