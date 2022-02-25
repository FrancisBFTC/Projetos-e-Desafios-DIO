<?php

$nick = $_POST['nick']; 
$cor = $_POST['cor']; 
$abre = fopen("chat.txt", "a");
$id = $_GET['id'];
if($abre) {
fwrite($abre,"<b><font color={$cor}>{$nick}</font color={$cor}><i> saiu do chat.</i></b><br>");
}
fclose($abre);
?>
<meta http-equiv="refresh" content="0; url=../index.php?id=<?php echo $id; ?>">