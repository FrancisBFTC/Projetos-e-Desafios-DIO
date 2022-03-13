// Valores Padrão

// Pré-ES2015 - O que era feito antes

function exponencial(array, num){
	if(num === undefined){
		num = 1;
	}

	const result = [];

	for (let i = 0; i < array.length; i++) {
		result.push(array[i] ** num);
	}

	return result;
}

console.log(exponencial([1, 2, 3, 4]));
// [1, 2, 3, 4]

console.log(exponencial([1, 2, 3, 4], 4));
// [1, 8, 27, 64]


// Pós-ES2015 - O que é feito hoje

function exponencial1(array, num = 1){

	const result = [];

	for (let i = 0; i < array.length; i++) {
		result.push(array[i] ** num);
	}

	return result;
}

console.log(exponencial1([1, 2, 3, 4]));
// [1, 2, 3, 4]

console.log(exponencial1([1, 2, 3, 4], 4));
// [1, 8, 27, 64]


// Objeto "Arguments"
/*
Um array com todos os parâmetros passados quando
a função foi invocada
*/

function findMax(){ // não precisa passar argumentos
	let max = -Infinity;

	for(let i = 0; i < arguments.length; i++){
		if(arguments[i] > max){
			max = arguments[i];
		}
	}

	return max;
}

console.log("O maior numero é", findMax(1, 5, 10, 3, 80));


// Retorna os argumentos da função
function showArgs(){
	return arguments;
}

console.log(showArgs(1, 2, [2,3,4], "string"));


// Arrays
/*
Técnica Spread: Uma forma de lidar separadamente com
elementos.
O que era parte de um array se torna um elemento
independente.
*/

function sum(x, y, z){
	return x + y + z;
}

const numbers = [1, 10, 3];

console.log(sum(...numbers)); // retorna 14


/*
Processo oposto ao anterior:
Técnica Rest: Combina os argumentos em um array
O que era um elemento independente se torna parte
de um array.
*/
function confereTamanho(...args){
	console.log(args.length);
}

console.log(confereTamanho());
console.log(confereTamanho(1, 2));
console.log(confereTamanho(3, 5, 7));


// Objetos: Object Destructuring
/*
Entre chaves {} podemos filtrar apenas os dados
que nos interessam em um objeto.
*/

const user = {
	id: 26,
	displayName: 'Wender',
	fullName: {
		firstName: 'Wenderson',
		lastName: 'Anjos'
	}
};

function getUserId({id}){
	return id;
}

function getFullName({fullName: {firstName: first, lastName: last}}){
	return `${first} ${last}`;
}

console.log("Nome completo:", getFullName(user));
console.log("Idade:", getUserId(user));

