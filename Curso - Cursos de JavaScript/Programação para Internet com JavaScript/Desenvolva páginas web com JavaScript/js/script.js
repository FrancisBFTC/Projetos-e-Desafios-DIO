/*

1ª Aula - Desenvolva páginas web com javascript

function soma(n1, n2){
	return n1 + n2;
}

var validar = 0;

function validaIdade(idade){
	let validar;
	if(idade >= 18){
		validar = true;
	}else{
		validar = false;
	}
	
	return validar;
}

var idade = prompt("Qual é a sua idade?");
console.log(validaIdade(idade));
console.log(validar);

/*
function setReplace(frase, nome, novo_nome){
	return frase.replace(nome, novo_nome);
}

alert(setReplace("Vai Japão", "Japão", "Brasil"));

alert(soma(5, 10));

*/


/*
Parte 2: Manipulando elementos da página

*/

function clicado(){
	document.getElementById("agradecimento")
		.innerHTML = "<b>Obrigado por clicar!</b>";
}

function redirecionar(){
	window.open("https://web.dio.me/"); // outra aba
	window.location.href = "https://web.dio.me/"; // mesma aba
}

function trocar(element){
	element.innerHTML = "Passou o mouse";
}

function voltar(element){
	element.innerHTML = "Passe o mouse aqui";
}

function load(){
	alert("pagina carregada!");
}

function mudar(element){
	console.log(element.value);
}

