// -----------------------------------------------------
// trabalhando com Arrays

// assim é mais rápido
let array = [];

// não é muito comum utilizar desta forma
let array1 = new Array();

// adicionando 3 no final do array
array.push(3);
console.log(array);

// adicionando 2 no final do array
array.push(2);
console.log(array);

// removendo o número no final (2)
array.pop();
console.log(array);

// adicionando novamente o número 2 no final
array.push(2)
// adicionando o número 5 no final
array.push(5);

// vamos remover o 3 (no início)
array.shift();
console.log(array);

// vamos adicionar o 1 no início 
array.unshift(1);
console.log(array);

// -----------------------------------------------------

// -----------------------------------------------------
// iterabilidade com Arrays

for (let i = 0; i < array.length; i++) {
	console.log(array[i]);
}

// Verifica se existe um número no Array
(array.includes(3)) ? console.log("Existe o 3!") : console.log("Não existe o 3!");

// verifica se "todos" os itens é igual a um valor
console.log(array.every(item => item === 5));

// verifica se "algum" dos itens é igual a um valor
console.log(array.some(item => item === 5));

// reverte os valores do array
console.log(array.reverse());

// ordena os valores do array
console.log(array.sort());

// -----------------------------------------------------