<?php
$abre = fopen("chat.txt", "a");

if($abre) {

fwrite($abre,"<b>Algu�m est� espiando a conversa!</b><br>");

}

fclose($abre);

?>
<meta http-equiv="refresh" content="0; url=chat.php">