<?php
$nick = $_POST['nick'];
$acao = $_POST['acao'];
$cor = $_POST['cor'];
$h = "2";
$hm = $h * 60;
$ms = $hm * 60;
$hora = gmdate("g:i:s", time()-($ms)); 

if(file_exists("bans/$nick.txt")){                         //Se o usuario ja existir não cadastra
echo "<script>location.href='ban.htm';alert('Voce esta banido')</script>";
}
else{

if($nick == ""){
echo "<script> location.href='index.htm'; </script>";
exit;
}
$texto = $_POST['texto']; 

$abre = fopen("chat.txt", "a");

if($abre) {

fwrite($abre,"<b><font color={$cor}>{$nick}</font color={$cor}> <i>{$acao}, às {$hora}</i>:</b> {$texto} <br>");

}

fclose($abre);

 // marca hora da ultima mensagem

$ultima = fopen("ultima.txt", "w");

fwrite($ultima, $hora);

fclose($ultima);
}
?>

<meta http-equiv="refresh" content="0; url=chat.php">