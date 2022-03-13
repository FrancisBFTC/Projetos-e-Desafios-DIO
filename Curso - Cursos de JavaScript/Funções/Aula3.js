// If/Else


// Retorna se um número é positivo ou não

function numeroPositivo(num){
	let resultado;

	if(num < 0){
		resultado = false;
	}else{
		resultado = true;
	}

	return resultado;
}

console.log(numeroPositivo(2));
console.log(numeroPositivo(-10));


// Forma 2 da mesma função

function numeroPositivo1(num){
	let resultado;

	const eNegativo = num < 0;

	if(eNegativo){
		resultado = false;
	}else{
		resultado = true;
	}

	return resultado;
}

console.log(numeroPositivo1(2));
console.log(numeroPositivo1(-10));


// Forma 3 da mesma função

function numeroPositivo2(num){
	const eNegativo = num < 0;

	if(eNegativo){
		return false;
	}

	return true;
}

console.log(numeroPositivo2(2));
console.log(numeroPositivo2(-10));

// Forma 4
/*
Verifica se número é positivo/negativo e 
maior do que 10.
Obs.: Javascript não tem elseif, as palavras sempre
estão separadas por espaço!
*/

function numeroPositivo3(num){
	const eNegativo = num < 0;
	const maiorQueDez = num > 10;

	if(eNegativo){
		return "Esse número é negativo!";
	}else if(!eNegativo && maiorQueDez){
		return "Esse número é positivo e maior que 10!";
	}

	return "Esse número é positivo!";
}

console.log(numeroPositivo3(2));
console.log(numeroPositivo3(-2));
console.log(numeroPositivo3(30));

// Switch/Case

function getAnimal(id){
	switch(id){
		case 1:
			return "cão";
		case 2:
			return "gato";
		case 3:
			return "pássaro";
		default:
			return "peixe";
	}
}

console.log(getAnimal(1)); // cão
console.log(getAnimal(3)); // pássaro
console.log(getAnimal(4)); // peixe
console.log(getAnimal('1')); // peixe


// Loop Fors

function multiplicaPorDois(arr){
	let multiplicados = [];

	for(let i = 0; i < arr.length; i++){
		multiplicados.push(arr[i] * 2);
	}

	return multiplicados;
}

const meusNumeros = [2, 33, 456, 356, 40];

console.log(multiplicaPorDois(meusNumeros));

// Variações do FOR: FOR IN
/*
Loop entre propriedades enumeráveis de um objeto
*/

function forInExample(obj){
	for(prop in obj){
		console.log(prop);
	}
}

const meuObjeto = {
	nome: "Wender",
	idade: "26",
	cidade: "Planaltina"
}

forInExample(meuObjeto);
// nome
// idade
// cidade


// Variações do FOR: FOR IN
/*
Loop entre valores enumeráveis de um objeto
*/

function forInExample1(obj){
	for(prop in obj){
		console.log(obj[prop]);
	}
}

const meuObjeto1 = {
	nome: "Wender",
	idade: "26",
	cidade: "Planaltina"
}

forInExample1(meuObjeto1);
// Wender
// 26
// Planaltina

// Variações do FOR: FOR OF
/*
Loop entre estruturas iteráveis (arrays, strings)
*/

function logLetras(palavra){
	for(letra of palavra){
		console.log(letra);
	}
}

const palavra = "abacaxi";

logLetras(palavra);
//a
//b
//a
//c
//a
//x
//i

function logNumeros(nums){
	for(num of nums){
		console.log(num);
	}
}

const nums = [30, 20, 233, 2];

logNumeros(nums);
//30
//20
//233
//2

// Loop while

function exemploWhile(){
	let num = 0;

	while(num <= 5){
		console.log(num);
		num++;
	}
}

exemploWhile();
//0
//1
//2
//3
//4
//5

// Loop do While: Exemplo 1

function exemploDoWhile1(){
	let num = 0;

	do{
		console.log(num);
		num++;
	}while(num <= 5);
}

exemploDoWhile1();
//0
//1
//2
//3
//4
//5

// Loop do While: Exemplo 2
// A primeira execução sempre ocorre

function exemploDoWhile2(){
	let num = 6;

	do{
		console.log(num);
		num++;
	}while(num <= 5);
}

exemploDoWhile2();
//0
//1
//2
//3
//4
//5





