<html>
<head>
<title>Bate Papo</title>

<?php

$nick = @$_POST['nick'];
echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"5;URL=chat.php?nick=$nick\">";
?>

<script language="javascript">
function ultima() {
location.href = "#ultima";
}
</script>
</head>
<body bgcolor="white" onLoad="javascript:ultima()">
<font face="Verdana" size="2">
<?php include("chat.txt"); ?>
<a name="ultima"><hr/></a>
</font>

</body>

</html>