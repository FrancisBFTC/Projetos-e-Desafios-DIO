// Função anônima

const soma1 = function(a, b){
	return a + b;
}

console.log(soma1(2, 3)); // 5


// Função autoinvocável

(
	function(){
		let name = "Digital Innovation One";
		console.log(name); // Retorna Digital Innovation One
	}

)();


// Função autoinvocável com parâmetros

const soma2 = (
	function(a, b){
		return a + b;
	}

)(1, 2);

console.log(soma2); // 3


// CallBacks usando funções anônimas
/*
Utilizando callbacks, você tem o maior controle da
ordem de chamadas
*/

const calc = function(operacao, num1, num2){
	return operacao(num1, num2);
}

const soma = function(num1, num2){
	return num1 + num2;
}

const sub = function(num1, num2){
	return num1 - num2;
}

const resultSoma = calc(soma, 1, 2);
const resultSub  = calc(sub, 1, 2);

console.log(resultSub); // -1
console.log(resultSoma); // 3

