<!doctype html>
 
 <?php
	$pont = fopen("cont.txt", "r");
	$conteudo = fread($pont, filesize("cont.txt"));
	fclose($pont);
	
	$pont = fopen("cont.txt", "r+");
	$conteudo++;
	fputs($pont, $conteudo);
	fclose($pont);
  ?>
 
 

<html>

	<head>
	<script type="text/javascript">
	function populate (s1){
		var s1 = document.getElementById(s1);
		if (s1.value == "guitarra"){
			location.href = ["assuntos/pay.html"];
		
		}
		if (s1.value == "canto"){
			location.href = ["assuntos/pay1.html"];
		
		}
		if (s1.value == "teclado"){
			location.href = ["assuntos/pay2.html"];
		
		}
		if (s1.value == "outros"){
			location.href = ["assuntos/pay3.html"];
		
		}
		if (s1.value == "violão"){
			location.href = ["assuntos/pay4.html"];
		
		}
		
	
	}
    </script>
 

		<title>Planeta Musical - menu</title>
		<meta charset="utf-8">
		<meta name="description" content="Conheça nossos ensinos de música da casa cultural si bemol,uma nova oportunida de aprendizagem."/>
		<meta name="keywords" content="Universo, música, professor, projetos, instrumento, aula, guitarra, canto, violão, bateria, cultural, Si-bemol"/>
		<meta name="author" content="Francis de vil"/>
		<link rel="stylesheet" href="assuntos/normalize.css">
        <link rel="stylesheet" type="text/css" href="assuntos/estilo.css">
		
		<script language="javascript">
			function validateKey (evt)
			{if (evt.keyCode == '17')
			{alert("Comando Desativado")
			return false}
			return true}
		</script>
		<script language='JavaScript'>
			function bloquear(e){return false}
			function desbloquear(){return true}
			document.onselectstart=new Function (&quot;return false&quot;)
			if (window.sidebar){document.onmousedown=bloquear
			document.onclick=desbloquear}
		</script>
			
	</head>
	<body  onkeydown='return validateKey(event)' bgcolor="black" onselectstart='return false' ondragstart='return false' oncontextmenu='return false'>
				<font color="red"><?php echo $_GET['alerta']; ?></font>				  
						
                <form method="POST" action="assuntos/casa.php">
					 
                          <legend><font color="white">Login</font></legend>
                              <label for="user"><font color="white">Usuario: </label>
							  
                              <input type="text" name="user"> 
                              <label for="senha"><font color="white">Senha: </label> 
                              <input type="password" name="password">
							
								
                              <input type="submit" name="submit" value="Fazer o login" style="background: green; margin:0px 15px;">
							  

                                                  
		</form>
				
        <div class="site">
		</div>
                     
                     
			
			</div class="form">
			
		</div>
		   <div class="div">
			<p><h1 align="center" class="h1"><font color="green" style="font-size:40px; text-shadow: 3px 3px 1px blue;"><big>Planeta Musical</big></font></h1></p>
		
        
			<table align="center" border="3" font size="10" bgcolor="blue" cellspacing="0" cellpading="50" style="margin:0px 320px;">
				  <tr><td bgcolor="green"><a href="index.html" class="link"><font color="white">Menu</font></a></td><td><a href="assuntos/artigos.html" class="link"><font color="white">Artigos</font></a></td><td><a href="assuntos/contatos.html" class="link"><font color="white">Contato</font></a></td><td><a href="assuntos/video.html" class="link"><font color="white">Videos</font></a></td>
			</table>
		    </div>
		        <h2 align="center"><font color="blue">Casa Cultural Si-Bemol</font></h2>
			<p class="p1"><font color="white">Olá! sou francis mas me chamam de "Devil". Sou professor de guitarra & teclado, juntamente com outros professores de Canto,bateria e violão. Este site é dedicado aos projetos musicais que existem e surgirão daqui pra frente - Bandas,eventos,trabalhos musicais,projetos,etc...
			futuramente irei escrever outros assuntos sobre música em geral, por enquanto no link "Artigos" voce encontrarão um boa explicacão básica de como <b>aprender a tocar qualquer instrumento</b>,noção básica de definicões  e localizacões de notas.</p><p>Video-aulas serão postados futuramente, dos professores do "projeto casa cultural Si-bemol", 
			localizado em <b>planaltina de goiás,setor 1 leste próximo ao colégio complexo 02</b>. As aulas estarão disponíveis dentro das horas 08:00 hrs da manhã ás 21:00 hrs da noite, de domingo á domingo. O aluno poderá escolher dentro de qualquer instrumento mas as mensalidades são separadas. O projeto "baixa-renda" da casa cultural si-bemol será imposto
			de acordo com a faixa etária e condicão do aluno. Já a partir de 18 anos, será a mensalidade normal.</p> <p>Este projeto foi criado para evoluir uma nova geração de músicos, aprender hoje um violão,guitarra ou bateria é um passo importante dos jovens na música, ainda mais quando aprendemos cedo, podemos usar isso como uma forma de diversão com os amigos,
			ganhar dinheiro em festas ou criar músicas de bandas para novos fãs e ouvintes.</font></p> 
			<p>O projeto casa cultural si bemol - aulas de músicas, foi criado com o objetivo de proporcionar as pessoas interessadas, um aprendizado musical. As aulas do projeto é um ensino desenvolvido através de estudos e experiencias pelos professores(a) do projeto.Em parceria com a empresa "Music Cultura, melodias", o CCBb é um espaço que é aberto para todas as idades. As aulas inclui apostilas de ensino em teoria e aulas práticas, e certificado no final do curso.</p>
                        
			<p align="center"><img src="imagens/ccbb.jpg" width="500"></p>
			
			<br>
			
	
                      <h2 align="center"><font color="blue">Programa MCV</font></h2>
                          <p><font color="white">O MCV (Música,Cultura e Vida!) é um programa cultural do projeto CCBb (Casa Cultural Si-Bemol) que foi desenvolvido pela professora Ana Cristina,no intuito de possibilitar o desconto na mensalidade para os alunos "baixa renda".Nas aulas do CCBb, os alunos que forem inseridos no programa mcv serão classificados como: "Participantes do programa",nesse caso terá o participante 1 (P=01) e participante 2 (P=02). Os alunos "P=01",são aquele de faixa et?ria: de 08 a 13 anos de idade.Os "P=02" são da faixa etária de: 14 á 18 anos. Para o aluno "baixa renda" ser inserido no programa, basta se apresentar no projeto Casa cultural si-bemol e trazer o comprovante de renda familiar igual ou inferior a um salário mínimo ou algum comprovante de beneficios.</font></p>
                          <p><font color="white">Quem estiver interessado, entrar em contato logo acima. Lá voce verá dois telefones, o número de cima é o meu e o número abaixo é da Cristina (professora de canto), agradecimentos e aproveitem esta oportunidade!</font></p>
    <h3><font color="white">Comentários</font></h3>
    <font color="black">--------------------------------</font>
       
                <h4><font color="blue"></font></h4>
                <p><font color="white">
</font></p>
       
<font color="black">--------------------------------</font>

<font color="black">--------------------------------</font>
       
                <h4><font color="blue"></font></h4>
                <p><font color="white"></font></p>
       
<font color="black">--------------------------------</font>

                <h4><font color="blue"></font></h4>
                <p><font color="white"></font></p>
                
<font color="black">--------------------------------</font>
                
                <h4><font color="blue"></font></h4>
                <h5><font color="red"></font></h5>
                <p><font color="white"></font></p>
                
<font color="black">--------------------------------</font><br>
		<font color="red">
		<?php
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];
         $friend = $_POST['friend'];
	$erro = "Ocorreu um erro";
	$status = false;
        
        
         
	
	if (($nome == "") or ($email == "")){
		echo $erro;
		$status= true;
	}
	
	if (substr_count ($email, "@") != 1){
		
		$status = true;
	
	}
	
	if (substr_count ($email, ".") > 2){
		
		$status = true;
	
	}
	
	
	if ($status == false){
		mail ("casaculturalsibemol@hotmail.com", "Um comentario foi enviado!", $mensagem,
		
                "Este email foi enviado dos seguintes dados:
                        
                        Nome: $nome
                        Email: $email
                        imagem: $friend
                        
                       ---
                        Comentario: $mensagem");
		echo ("<font color=blue>Obrigado por comentar! em breve seu comentario sera aprovado pelo administrador</font>");
		
	}
	
	
	
	else{
		echo ($erro);
	}
	
	
	

	
?>
</font>
			<form method="POST" action="index2.php">
				<label><font color="white">Nome:</font> </label>
				<input type="text" name="nome"> 
				<font color="red">
				<?php 
					if ($nome == ""){
					echo (" <br>Preencha o campo nome \n");
					$status = true;
					}
				?>
				</font>
				<br>
				<br />
				<label><font color="white">Email:</font> </label>
				<input type="text" name="email"> 
				<font color="red">
				<?php 
					
					
					if ($email == ""){
					echo (" <br>Preencha o campo email\n");
					$status = true;
					}
	
					if (substr_count ($email, "@") != 1){
					echo (" <br>email inválido!\n");
					$status = true;
	
					}
	
					if (substr_count ($email, ".") > 2){
					echo (" <br>email inválido!\n");
					$status = true;
	
					}
					?>
					</font>
				<br>
				<br />
				<label><font color="white">Mensagem:</font> </label> <br>
				<textarea name="mensagem" rows="10" maxlength="400"></textarea> <br>
				<br />
                                <input type="radio" value="Skull" name="friend">
                                <img src="imagens/skull.jpg" width="40px" height="40px">
                                <input type="radio" value="Boy" name="friend">
                                <img src="imagens/hat.jpg" width="40px" height="40px">
                                <input type="radio" value="maçã" name="friend">
                                <img src="imagens/maçã.jpg" width="40px" height="40px">
                                <input type="radio" value="oculos" name="friend">
                                <img src="imagens/oculos.jpg" width="40px" height="40px">
                                <input type="radio" value="money" name="friend">
                                <img src="imagens/money.jpg" width="40px" height="40px">
                                <input type="radio" value="heart" name="friend">
                                <img src="imagens/heart.jpg" width="40px" height="40px"><br><br />
				<input type="submit" value="Enviar" name="submit" style="background-color: blue;">
				
			</form>
                        <h4 align="right"><font color="white">Visualizações:</font> <font color="blue"><?php include("cont.txt"); ?>
                        
</body>

</html>