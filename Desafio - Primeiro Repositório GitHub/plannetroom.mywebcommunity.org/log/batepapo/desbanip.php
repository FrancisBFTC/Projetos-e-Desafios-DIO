<?php

$texto = $_POST['texto']; 
include "agora/$texto.txt";

unlink("bansip/$ip.txt");

echo "<script>alert('O IP $ip do usuario $texto foi desbanido com sucesso!')</script>";
?>

<meta http-equiv="refresh" content="0; url=chat.php">