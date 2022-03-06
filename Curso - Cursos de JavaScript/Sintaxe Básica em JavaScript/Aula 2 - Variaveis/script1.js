// tipos primitivos

//boolean
var Bool = false;
console.log(typeof(Bool));

//number
var numeroqualquer = 1;
console.log(typeof(numeroqualquer));

//Strings
var nome = "nomequalquer";
console.log(typeof(nome));

//Object
var obj = document.getElementById('h1');
console.log(typeof(obj));

//Array
let vetor = [1, 2, 3, 4];
console.log(typeof(vetor));


// Utilizando var - escopo local e global
var variavel;
console.log(variavel);

var variavel2 = 'wenderson';
variavel2 = 'Anjos';
console.log(variavel2);

// Utilizando let - Escopo local
let variavel3 = 'francis';
console.log(variavel3);

// Utilizando const - escopo local, somente leitura
//const constante; -> Error
constante = 'valor';
//constante = 'outrovalor'; -> Error
console.log(constante);


// Escopos
var escopoGlobal = 'global';
console.log(escopoGlobal);

function escopoLocal(){
	let escopoLocalInterno = 'Local';
	console.log(escopoLocalInterno);
}

escopoLocal();

// console.log(escopoLocalInterno); -> Is not defined


// atribuição
var atribuicao = 'valor_atribuido';

//comparação -> resultado true
var comparacao = '0' == 0;
console.log(comparacao);

//comparação idêntica -> resultado false
var comparacao = '0' === 0;
console.log(comparacao);

//adição
var adicao = 1 + 1;
console.log(adicao);

//subtração
var subtracao = 2 - 1;
console.log(subtracao);

//multiplicação
var multiplicacao = 2 * 3;
console.log(multiplicacao);

//divisão
var divisaoReal = 6 / 2;
console.log(divisaoReal);

//divisão inteira
var divisaoInteira = 5 % 2;
console.log(divisaoInteira);

//Potenciação
var potenciacao = 2 ** 10;
console.log(potenciacao);

// maior que
var maiorQue = 5 > 2;
console.log(maiorQue);

//menor que
var menorQue = 5 < 2;
console.log(menorQue);

//maior ou igual
var maiorOuIgual = 5 >= 2;
console.log(maiorOuIgual);

//menor ou igual
var menorOuIgual = 5 <= 2;
console.log(menorOuIgual);

// operação AND -> &&
var and = true && false;
console.log(and);

// operação OR -> ||
var or = true || false;
console.log(or);

// operação NOT -> !
var not = !false;
console.log(not);