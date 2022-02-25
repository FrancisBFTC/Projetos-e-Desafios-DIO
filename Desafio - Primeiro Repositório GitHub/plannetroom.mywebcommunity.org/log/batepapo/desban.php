<?php

$texto = $_POST['texto']; 


unlink("bans/$texto.txt");

echo "<script>alert('$texto desbanido com sucesso!')</script>";
?>

<meta http-equiv="refresh" content="0; url=chat.php">