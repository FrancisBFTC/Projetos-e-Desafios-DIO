<?php
$texto=$_POST["texto"];
$variavel = "$texto";
echo "<b>Você</b>: $texto 
<br><b>Gitrf: </b>";
session_start("assun");
$ass=$_SESSION["ass"];


if ($ass=="google"){
header ("Location: http://www.google.com.br/search?q=$texto");
session_start("assun");
	 $_SESSION["ass"] = "n";
}
else {
if ($ass=="jogo"){
echo "Bem jogos sao bem legal";
session_start("assun");
	 $_SESSION["ass"] = "n";
}
else {
if ($ass=="tv"){
echo "ha $texto e bem legal mesmo!";
session_start("assun");
	 $_SESSION["ass"] = "n";
}
if ($ass=="pc"){
echo "Bem eu sei muito sobre pc mais nao quero te falar!";
session_start("assun");
	 $_SESSION["ass"] = "n";
}
else {
if (eregi("seu nome", $variavel)) { 
echo "Meu nome e Gitrf. =D";
}
else {
if (eregi("voce faz", $variavel)) { 
echo "Nada!";
}
else {
if (eregi("oi", $variavel)) {
echo "Eai, tudo bem?";
}
else {
if (eregi("joga", $variavel)) {
echo "Humm jogos?";
session_start("assun");
	 $_SESSION["ass"] = "jogo";
}
else {
if($texto=="Qual meu ip?"){
echo "Sei nao po! pra que eu vo querer sabe isso.";
}
else {
if($texto=="Olá"){
echo "Opa! Tudo bom com voce?";
}
else {
if($texto=="O que eu sei"){
echo "<script>location.href='eusei.php';</script>";
}
else {
if($texto=="nada"){
echo "kkkkkkkkkk";
}
else {
if (eregi("hacker", $variavel)) {
echo "E um cara que invade computadores,servidores, etc.";
}
else {
if (eregi("nao", $variavel)) {
echo "Ho!";
}
else {
if (eregi("cu", $variavel)) {
echo "Vai te fuder seu FDP!";
}
else {
if (eregi("ola", $variavel)) {
echo "Eai, tudo bom?";
}
else {
if (eregi("opa", $variavel)) {
echo "opa, o que voce ta fazendo de bom?";
}
else {
if (eregi("anos voce tem", $variavel)) {
echo "Alguns meses apenas!";
}
else {
if (eregi("tv", $variavel)) {
echo "hummm.... tv... Que progama de televisao voce gosta?";
session_start("assun");
	 $_SESSION["ass"] = "tv";
}
else {
if (eregi("ahan", $variavel)) {
echo "=D";
}
else {
if (eregi("sim", $variavel)) {
echo "=D";
}
else {
if (eregi("noob", $variavel)) {
echo "huummmm.... noob...";
}
else {
if (eregi("iae", $variavel)) {
echo "Opa! Tudo bom com voce?";
}
else {
if (eregi("porque", $variavel)) {
echo "Atoa sou curioso!";
}
else {
if (eregi("por que", $variavel)) {
echo "Atoa sou curioso!";
}
else {
if (eregi("tambem", $variavel)) {
echo "=D";
}
else {
if (eregi("tudo bem?", $variavel)) {
echo "Sim e voce?";
}
else {
if (eregi("tudo bom?", $variavel)) {
echo "Sim e voce?";
}
else {
if (eregi("tudo", $variavel)) {
echo "=D, oque voce ta fazendo de bom?";
}
else {
if (eregi("mu", $variavel)) {
echo "MU e um jogo online muito bom! mais tome cuidado ele vicia!";
}
else {
if (eregi("Voce guarda meu nome?", $variavel)) {
echo "Nao! nao so nenhuma maquina de memoria!";
}
else {
if (eregi("meu nome e", $variavel)) {
echo "humm.. seu nome e muito bonito!";
}
else {
if (eregi("falow", $variavel)) {
echo "FALOW!! Volte sempre!";
}
else {
if (eregi("flw", $variavel)) {
echo "Falow volte sempre!";
}
else {
if (eregi("oque voce sabe", $variavel)) {
echo "Eu sei cerca de 40 frases, mais a cada dia que passa, eu aprendo novas coisas!";
}
else {
if (eregi("tchau", $variavel)) {
echo "tchau volte sempre!";
}
else {
if (eregi("to indo", $variavel)) {
echo "Falow volte sempre!";
}
else {
if (eregi("aff", $variavel)) {
echo "UFF!";
}
else {
if (eregi("fui", $variavel)) {
echo "Volte sempre!";
}
else {
if (eregi("google", $variavel)) {
echo "Digite oque quer pesquisar no <a href=\"www.google.com.br\">Google</a>";
session_start("assun");
	 $_SESSION["ass"] = "google";
}
else {
echo "Hi, eu nao sei sobre isso ai nao!";
}

}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
} 
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
}
?>
<hr>
<form name="pergunta" method="post">
<input name="texto">
<input type="submit" name="b1" value="Enviar">
</form>


