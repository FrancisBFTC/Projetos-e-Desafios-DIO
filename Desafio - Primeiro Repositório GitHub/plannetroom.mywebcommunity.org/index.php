<?php
	
	require_once $_SERVER['DOCUMENT_ROOT'].'/system/system.php';
	AccessPublic();
	
	
	ValidateFormLogin();
         ValidateFormRegister();
	echo "<meta charset='utf-8'>";
        
      
               
       
         

?>

<!doctype html> 


<html>

	<head>
		<title>Registro Plannetroom</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="assuntos/normalize.css">
        <link rel="stylesheet" type="text/css" href="estilo.css">
		
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
                <script language="javascript">
                        function funcao1()
                        {
                        alert("ATENÇÃO: O plannetroom reconhece e restringe usuários que usam palavras ofensivas contra seus usuários, resultando na exclusão da conta em imediato, portanto, use palavras apropiadas, obrigado!");
                        }
                </script>
                <style>
                        body{
                                background: url('https://catracalivre.com.br/wp-content/uploads/2014/08/espaco_sideral_-_por_Rastan_istockphoto1.jpg');
                        }
                </style>
			
	</head>
	<body  onkeydown='return validateKey(event)' bgcolor="white" onselectstart='return false' ondragstart='return false' oncontextmenu='return false'>
		
		
                <div align="right">
                <fieldset style="height: 120px; width:220px;border-radius: 20px;font-size: 15px;border: solid 2px white;box-shadow: 10px 10px 10px 5px black;">
                <legend><font color="white"><big><strong>Área de login</strong></big></font></legend>
                        <h3 align="right">
                      <form method="POST">
                      <font color="white">Usuário:</font><input type="text" name="username" style="border-radius: 20px;background: black;font-size: 13px;color:white;margin-bottom:10px;">
                        <br><font color="white">Senha:</font><input type="password" name="password" style="border-radius: 20px;background: black;font-size: 13px;color:white;margin-bottom:10px;">
			<br><input type="submit" name="submit" value="Entrar" class="inputlogin"></h3>
                      </form>
		</fieldset>
 	
                </div>
                <div style="height: 110px;margin-top:-120px;margin-left:20px;">
                        <h1 align="left" class="h1"><font color="white" style="text-shadow: 1px 1px 5px blue; font-size:43px;"><big>Plannetr
                        <img src="https://cdn.icon-icons.com/icons2/116/PNG/512/web_earth_planet_19312.png" style="width:40px;height:40px;margin-right:-20px;margin-left:-16px;margin-bottom:-10px;">
                        <img src="https://cdn.icon-icons.com/icons2/116/PNG/512/web_earth_planet_19312.png" style="width:40px;height:40px;margin-bottom:-10px;margin-right:-16px;">
                        m</big></font></h1>
		</div>
		
		
			
			
			
			
		
		    
		
                        <div align="center">
			<div align="center"  style="height: 450px; width:500px;border-radius: 20px;font-size: 20px;border: solid 2px white;box-shadow: 10px 10px 10px 5px black;">
			
			
		<form method="POST" action="">
			<legend><h2 style="margin-top:8px;"><font color="white">Cadastre-se</font></h2></legend>
			<font color="white" size="5px"></font><input type="text" name="name" placeholder="Digite seu Nome" value="<?php echo GetPost('name'); ?>" style="padding-left:20px;width:400px;height:45px;border: solid 1px;border-radius: 20px;background: black;font-size: 20px;color: white;margin-bottom:10px;margin-top:-5px;"><br>
			<font color="white" size="5px"></font><input type="text" name="mail" placeholder="Digite seu Email" value="<?php echo GetPost('mail'); ?>" style="padding-left:20px;width:400px;height:45px;border: solid 1px;border-radius: 20px;background: black;font-size: 20px;color: white;margin-bottom:10px;"><br>
			<font color="white" size="5px"></font>
                                <select name="music" value="<?php echo GetPost('music'); ?>" style="padding-left:20px;width:400px;height:45px;border: solid 1px;border-radius: 20px;background: black;font-size: 20px;color: white;margin-bottom:10px;">
                                        <option name="music" value="Nenhuma">Profissionalidade</option>
                                        <option name="music" value="Guitarrista">Guitarrista</option>
                                        <option name="music" value="Tecladista">Tecladista</option>
                                        <option name="music" value="Vocalista">Vocalista</option>
                                        <option name="music" value="Flautista">Flautista</option>
                                        <option name="music" value="Bateirista">bateirista</option>
                                        <option name="music" value="Guitarrista & vocalista">Guitarrista & vocalista</option>
                                        <option name="music" value="Tecladista & vocalista">Tecladista & vocalista</option>
                                        <option name="music" value="Violeiro">Violeiro</option>
                                        <option name="music" value="Violinista">Violinista</option>
                                        <option name="music" value="Multi-instrumentista">Multi-instrumentista</option>
                                        <option name="music" value="Outros">Outros</option>
                                        
                                </select><br>
			<font color="white" size="5px"></font><input type="text" placeholder="Digite seu Usuário" name="username" value="<?php echo GetPost('username'); ?>" style="padding-left:20px;width:400px;height:45px;border: solid 1px;border-radius: 20px;background: black;font-size: 20px;color: white;margin-bottom:10px;"><br>
			<font color="white" size="5px"></font><input type="password" placeholder="Digite sua Senha" name="password" style="padding-left:20px;width:400px;height:45px;border: solid 1px;border-radius: 20px;background: black;font-size: 20px;color: white;margin-bottom:10px;"><br>
			<font color="white" size="5px"></font><input type="password" placeholder="Confirme sua Senha" name="confirm" style="padding-left:20px;width:400px;height:45px;border: solid 1px;border-radius: 20px;background: black;font-size: 20px;color: white;margin-bottom:20px;"><br>
			<font color="white" size="5px"></font><input type="hidden" name="acao1"  style="background: #EEE; cursor: not-allowed; color: #777" readonly value="Editar">
			<font color="white" size="5px"></font><input type="hidden" name="acao2"  style="background: #EEE; cursor: not-allowed; color: #777" readonly value="Deletar">
			
			
			
			<input type="submit" name="send" onclick="funcao1()" value="Criar conta" class="input">
		</form>
		</div>
                </div>
		
			
			
	</body>

</html>