<?php
       
        
$user = $_POST['user'];
$password = $_POST['password'];





if(($user == "Culturaévida") && ($password  == "palmafff4/32")){
       
        $_SESSION['logado'] = "sim";
	echo "
<html>
	
	<head>
        <script language='javascript'>
                function janelasecundária(URL){
                        window.open(URL,'modulo1','width=450,height=400,scrollbars=NO')
                }
        </script>
		
		<title>Bem vindo ao CCBb</title>
		<link rel='stylesheet' type='text/css' href='estilo.css'>
		<meta charset='utf-8'>
	</head>
	<body bgcolor='black'>
        <h3 align='center'><a href='../logout.php'><font color='blue'>Sair</font></a></h3>
               --<h3 align='right'><font color='white'>$user</font> -- <a href='../index.php'><font color='white'>Sair</font></a></h3>
		<h1 align='center'  style='text-shadow: 1px 1px 20px red;' font-size: '50px;'><font color='green' size='100'>Bem vindo ao CCBb</font></h1>
			<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='center' class='table' bgcolor='gray'>
				<tr><td bgcolor='red' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Conteúdo</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Video-Aulas</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Meus dados</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Perfil</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Solicitar a prova</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Pontuações</b></font></a></td></tr>
			</table>
			</div>
		<br />
		<p><font color='white'>Olá $user, agora você poderá acessar o seu material mandados por aqui - você tem liberdade para estudar por tempo indefinido, durante as 24 hrs, você que escolhe! à principio dois temas serão mandados para esta página juntamente com 4 video-aulas, com o seu exclusivo acesso a este material realizando o login na qual você cadastrou. Baseando no regulamento do CCBb (casa cultural si-bemol), a prova será aplicada 10 dias após o primeiro acesso ao conteúdo,a média é 6.0, se você passar desta pontuação, o próximo conteúdo será mandado à você mas se sua pontuação for menos que a média, terá que esperar a próxima prova após 5 dias do mesmo, dando à você o tempo para re-avaliar,porém as próximas provas terá outras questões. Passando nas primeiras provas/exercícios, e conseguindo outros conteúdos,o tempo de aplicar outras provas relacionadas a cada conteúdo, é diminuido para 8 dias, por isso estude bem e se concentre nos videos,dependendo da sua agilidade, conseguirá a maior parte do conteúdo em pouco tempo. Então, boa sorte e bons estudos!</font> </p>
		<br>
		<ul align='center'>
                        <form method='POST' action='material.php'>
			<a href=javascript:janelasecundária('http://planetamusical.atwebpages.com/assuntos/material.php') name='hrefmodul'><img src='../imagens/modul1.jpg' width='200px' height='180px'></a>
			<a href=''><img src='../imagens/modul2.jpg' width='200px' height='180px'></a>
			<img src='../imagens/modul3.jpg' width='200px' height='180px' value='modulo 3'><br />
			<img src='../imagens/modul4.jpg' width='200px' height='180px'>
			<img src='../imagens/modul5.jpg' width='200px' height='180px'>
			<img src='../imagens/modul6.jpg' width='200px' height='180px'>
                        </form>
		
		</ul>
		<div class='menuccbb'>
		
		</div>
		<div class='aside'>
		
			<aside>
			
				
			
			
			
			</aside>
		</div>
	</body>
</html>";

}
else{
	if(($user == "Francis") && ($password  == "1324354657687980")){
	echo "
<html>
	
	<head>
		
		<title>Bem vindo ao CCBb</title>
		<link rel='stylesheet' type='text/css' href='estilo.css'>
		<meta charset='utf-8'>
	</head>
	<body bgcolor='black'>
	
		<h1 align='center'  style='text-shadow: 1px 1px 20px red;' font-size: '50px;'><font color='green' size='100'>Bem vindo ao CCBb</font></h1>
			<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='center' class='table' bgcolor='gray'>
				<tr><td bgcolor='red' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Conteúdo</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Video-Aulas</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Meus dados</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Perfil</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Solicitar a prova</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Pontuações</b></font></a></td></tr>
			</table>
			</div>
		<br />
		<p><font color='white'>Olá $user, agora você poderá acessar o seu material mandados por aqui - você tem liberdade para estudar por tempo indefinido, durante as 24 hrs, você que escolhe! à principio dois temas serão mandados para esta página juntamente com 4 video-aulas, com o seu exclusivo acesso a este material realizando o login na qual você cadastrou. Baseando no regulamento do CCBb (casa cultural si-bemol), a prova será aplicada 10 dias após o primeiro acesso ao conteúdo,a média é 6.0, se você passar desta pontuação, o próximo conteúdo será mandado à você mas se sua pontuação for menos que a média, terá que esperar a próxima prova após 5 dias do mesmo, dando à você o tempo para re-avaliar,porém as próximas provas terá outras questões. Passando nas primeiras provas/exercícios, e conseguindo outros conteúdos,o tempo de aplicar outras provas relacionadas a cada conteúdo, é diminuido para 8 dias, por isso estude bem e se concentre nos videos,dependendo da sua agilidade, conseguirá a maior parte do conteúdo em pouco tempo. Então, boa sorte e bons estudos!</font> </p>
		<br>
		<ul align='center'>
			<a href='guitarregister.php'><img src='../imagens/modulo1.jpg' width='200px' height='180px'></a>
			<a href='guitarregister.php'><img src='../imagens/modulo2.jpg' width='200px' height='180px'></a>
			<img src='../imagens/.jpg' width='200px' height='180px' value='modulo 3'><br />
			<img src='../imagens/.jpg' width='200px' height='180px'>
			<img src='../imagens/.jpg' width='200px' height='180px'>
			<img src='../imagens/.jpg' width='200px' height='180px'>
		
		</ul>
		<div class='menuccbb'>
		
		</div>
		<div class='aside'>
		
			<aside>
			
				
			
			
			
			</aside>
		</div>
	</body>
</html>";

	}
	else{
		if(($user == "cristina") && ($password  == "casacultural")){
	echo "
<html>
	
	<head>
		
		<title>Bem vindo ao CCBb</title>
		<link rel='stylesheet' type='text/css' href='estilo.css'>
		<meta charset='utf-8'>
	</head>
	<body bgcolor='black'>
	
		<h1 align='center'  style='text-shadow: 1px 1px 20px red;' font-size: '50px;'><font color='green' size='100'>Bem vindo ao CCBb</font></h1>
			<div class='tablecasa'>
			<table Border='1' cellspacing='1' cellpadding='6' align='center' class='table' bgcolor='gray'>
				<tr><td bgcolor='red' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Conteúdo</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Video-Aulas</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Meus dados</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Perfil</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Solicitar a prova</b></font></a></td><td bgcolor='blue' class='table'><a href='' class='tdlink'><font color='white' size='4px'><b>Pontuações</b></font></a></td></tr>
			</table>
			</div>
		<br />
		<p><font color='white'>Olá $user, agora você poderá acessar o seu material mandados por aqui - você tem liberdade para estudar por tempo indefinido, durante as 24 hrs, você que escolhe! à principio dois temas serão mandados para esta página juntamente com 4 video-aulas, com o seu exclusivo acesso a este material realizando o login na qual você cadastrou. Baseando no regulamento do CCBb (casa cultural si-bemol), a prova será aplicada 10 dias após o primeiro acesso ao conteúdo,a média é 6.0, se você passar desta pontuação, o próximo conteúdo será mandado à você mas se sua pontuação for menos que a média, terá que esperar a próxima prova após 5 dias do mesmo, dando à você o tempo para re-avaliar,porém as próximas provas terá outras questões. Passando nas primeiras provas/exercícios, e conseguindo outros conteúdos,o tempo de aplicar outras provas relacionadas a cada conteúdo, é diminuido para 8 dias, por isso estude bem e se concentre nos videos,dependendo da sua agilidade, conseguirá a maior parte do conteúdo em pouco tempo. Então, boa sorte e bons estudos!</font> </p>
		<br>
		<ul align='center'>
			<a href='guitarregister.php'><img src='../imagens/modulo1.jpg' width='200px' height='180px'></a>
			<a href='guitarregister.php'><img src='../imagens/modulo2.jpg' width='200px' height='180px'></a>
			<img src='../imagens/.jpg' width='200px' height='180px' value='modulo 3'><br />
			<img src='../imagens/.jpg' width='200px' height='180px'>
			<img src='../imagens/.jpg' width='200px' height='180px'>
			<img src='../imagens/.jpg' width='200px' height='180px'>
		
		</ul>
		<div class='menuccbb'>
		
		</div>
		<div class='aside'>
		
			<aside>
			
				
			
			
			
			</aside>
		</div>
		<a href='../arquivos/upload.php'><font color='blue'>Faça o upload aqui!</font></a>
	</body>
</html>";
	}
	else{
		header("location:../index1.php?erro=Login inválido!");
	}
}
	
	
}

if (($user == "") && ($password == "")){
		header("location:../index2.php?alerta=O usuário e senha não foi informado!");
	}
?>