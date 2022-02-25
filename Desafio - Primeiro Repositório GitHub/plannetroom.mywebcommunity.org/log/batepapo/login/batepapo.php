
<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/account/system/system.php';
	AccessPrivate();
$ip=$_SERVER['REMOTE_ADDR'];
$nick = $_POST['nick'];
$cor = $_POST['cor'];

	$dados = GetUser();
	$id = @$_GET['id'];

if($nick == ""){
echo '<script> location.href="index.php?id='.$id.'"; </script>';
exit;
}

if(file_exists("bansip/$ip.txt")){                         //Se o usuario ja existir não cadastra
echo "<script>location.href='ban.htm';alert('Seu IP:$ip esta esta banido')</script>";
exit;
}

if(file_exists("bans/$nick.txt")){                         //Se o usuario ja existir não cadastra
echo "<script>location.href='ban.htm';alert('Voce esta banido')</script>";
}
else{
	$abre = @fopen("agora/$nick.txt", "w");


@fwrite($abre,"<?php
\$ip=\"$ip\";
\$k=\"n\";
?>");



@fclose($abre);
}

?>
<html>
<head>
  <title>Bate Papo</title>
  <link rel="stylesheet" type="text/css" href="../../estilo.css">
  
</head>
<body bgcolor="green" onLoad="javascript:ultima()"><font face="Verdana" size="2" color="#FFFFFF">

 <div><?php echo "<iframe name=\"chat\" src=\"chat.php?nick=$nick\" width=\"100%\" height=\"80%\" frameborder=\"0\">Atualize seu navegador.</iframe>"; ?><br></div><div><iframe name="ultimo" src="ultima.php" frameborder="0" width=300 height=16 marginwidth=0 marginheight=0 hspace=0 vspace=0 frameborder=0 scrolling=no>Favor atualizar seu navegador.</iframe></div>
<!--FORM DE FALA-->
<hr color="white"><form action="gravar.php" method="post" target="chat">
 <font color="<?php echo $cor ?>"><b><?php echo $nick; ?></b></font color="<?php echo $cor; ?>">
<input name="nick" type="hidden" value="<?php echo $nick; ?>">
<input name="cor" type="hidden" value="<?php echo $cor; ?>">
<select name="acao">
<option value="fala" selected>fala</option>
<option value="grita">grita</option>
<option value="beija">beija</option>
<option value="canta">canta</option>
<option value="pergunta">pergunta</option>
<option value="concorda">concorda</option>
<option value="discorda">discorda</option>
<option value="desculpa-se">desculpa-se</option>
<option value="surpreende-se">surpreende-se</option>
<option value="sorri">sorri</option>
<option value="diverte-se">diverte-se</option>
<option value="briga">briga</option>
<option value="dá o fora">dá o fora</option>
  </select> : <input type="text" name="texto" value=""/> <input type="submit" name="falar" value="Falar" class="input">

</form>
<form action="sair.php?id=<?php echo $id; ?>" method="post">

<input name="nick" type="hidden" value="<?php echo $nick; ?>">
<input name="cor" type="hidden" value="<?php echo $cor; ?>">
<input type="submit" value="Sair">

</form>
</font>
</body>
</html>