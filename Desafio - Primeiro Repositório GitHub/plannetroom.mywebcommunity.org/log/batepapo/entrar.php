<?php
$nick = $_POST['nick'];
$cor = $_POST['cor'];
$id = $_GET['id'];
if($nick == ""){
echo '<script> location.href="../index.php?id='.$id.'"; </script>';
exit;
}
$abre = fopen("chat.txt", "a");
if($abre) {
fwrite($abre,"<b><font color={$cor}>{$nick}</font color={$cor}><i> entrou no chat.</i></b><br>");
}
fclose($abre);
header('Location: batepapo.php?id='.$id.'',TRUE,307); 
?>