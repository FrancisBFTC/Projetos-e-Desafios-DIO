<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/logadmin/systemadmin/adminsystem.php';
	Acessopublico();
	
	Validarlogin(); 

?>

<!doctype html> 


<html>

	<head>
	<meta charset="utf-8">
	<script type="text/javascript">
	function populog (s1){
		var s1 = document.getElementById(s1);
		if (s1.value == "0"){
			location.href = [""];
		
		}
		if (s1.value == "1"){
			location.href = ["../Guitarlog/"];
		
		}
		if (s1.value == "2"){
			location.href = ["../Keyboardlog/"];
		
		}
		if (s1.value == "3"){
			location.href = ["../Singlog/"];
		
		}
		if (s1.value == "4"){
			location.href = ["../Violonlog"];
		
		}
		
	
	}
    </script>
	
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
 

		<title>Planeta Musical - admin</title>
		<meta charset="ANSI">
		<meta name="description" content="descricão completa limitada a 156 caracteres"/>
		<meta name="keywords" content="Universo, m?sica, professor, projetos, instrumento, aula, guitarra, canto, violão, bateria, cultural, Si-bemol"/>
		<meta name="author" content="Francis de vil"/>
		<link rel="stylesheet" href="assuntos/normalize.css">
        <link rel="stylesheet" type="text/css" href="../assuntos/estilo.css">
		
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
		
		
		<p><h1 align="center" class="h1"><font color="green" style="text-shadow: 1px 1px 5px red; font-size:43px;"><big>Planeta Musical</big></font></h1></p>
		
		<div class="tab">
			<table class="tab1" align="center" border="3" font size="10" bgcolor="blue" cellspacing="0" cellpading="50" style="margin:0px 430px;">
				  <tr><td bgcolor="green"><a href="../" class="link"><font color="white">Menu</font></a></td><td><a href="../assuntos/artigos.html" class="link"><font color="white">Artigos</font></a></td><td><a href="../assuntos/contatos.html" class="link"><font color="white">Contato</font></a></td><td><a href="../assuntos/video.html" class="link"><font color="white">Videos</font></a></td>
				  
			</table>
		</div>	
			
			
			
			
		
		    
		
		<hr>
			<legend><font color="blue">Fazer Login</font></legend>
			
			
			<h3><font color="blue">Seu curso:</font></h3>
			<select onchange="populog(this.id)" style="background: green;"id="teste" onmouseover="this.size=this.options.length" onmouseout="this.size=1" style="position:absolute">
			<optgroup>
			<option value="0">Admin</option>
			<option value="1">Guitarra</option>
			<option value="2">Teclado</option>
			<option value="3">Canto</option>
			<option value="4">Violão</option>
			</optgroup>
			</select><br><br />
		<form method="POST" action="">
			
			<font color="white">Usuário:</font><br> <input type="text" name="usuario"><br></br>
			<font color="white">Senha:</font><br> <input type="password" name="senha"><br></br>
			
			
			
			<input type="submit" name="admin" value="entrar" style="background: green;">
		</form>
		<hr>
			
			
	</body>

</html>