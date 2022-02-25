<?php
$id=$_GET["id"];
unlink("usuarios/$id.txt");
 echo "<script>location.href='msg.php?msg=del'</script>";

?>
