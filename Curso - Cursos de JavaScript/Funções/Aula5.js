// Sintaxe de Arrow Functions

// Função anônima
const helloWorld1 = function(){
	return "Hello World";
}

// Arrow Function
const helloWorld2 = () => {
	return "Hello World";
}

// Arrow Function Resumida
const helloWorld3 = () => "Hello World";

// Todos fazem a mesma coisa
// Exibe as propriedades da função
console.log(helloWorld1);
console.log(helloWorld2);
console.log(helloWorld3);

// Executa o retorno da função
console.log(helloWorld1());
console.log(helloWorld2());
console.log(helloWorld3());

// Mas as Arrow Functions resume ainda mais
// Caso utilizar apenas 1 linha, pode despensar 
// as chaves e o return

// Utilize parenteses quando há mais que
// 1 parâmetro
const soma = (a, b) => a + b;
console.log(soma(4, 6));

// Não é necessário utilizar parenteses
// quando há só 1 parâmetro
const valor = a => a;
console.log(valor(9));

// Observações: Arrow Function NÃO faz hoisting
// Sempre declarar a função antes de chamá-la

// Outras restrições

/*
"this" sempre será o objeto global. Métodos para modificar seu valor
como call(), apply() e bind() não irão funcionar nas Arrow Functions.
Funciona apenas em funções comuns.

Não existe o objeto "arguments", apenas em funções comuns.

O construtor, Ex.: new meuObjeto() também não vai funcionar.

*/