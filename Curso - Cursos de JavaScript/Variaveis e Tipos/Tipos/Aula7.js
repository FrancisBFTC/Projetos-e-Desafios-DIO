// -----------------------------------------------------
// Trabalhando com valores empty, null e undefined

// Um valor indefinido
console.log(typeof(abacaxi));

// Isso também dá indefinido
let abacate;
console.log(typeof(abacate));

// Valores vazios
abacate = "";
console.log(abacate);

// É uma String, porém vazia
console.log(typeof(abacate));

// Valores nulo
abacaxi = null;
console.log(abacaxi);

// É um objeto, porém objeto nulo
console.log(typeof(abacaxi));

var abacaxi; // Exemplo de hoisting

// Verificando se objeto nulo é true ou false

console.log(abacaxi === true);
console.log(abacaxi === false);

// Nos dois exemplos acima vai retornar falso,
// porque o objeto nem é falso e nem verdadeiro, e sim, nulo

// Agora sim, vai retornar verdadeiro, porque objeto é comparado
// com nulo
console.log(abacaxi === null);

// mas o contrário do objeto nulo é true
// o que é chamado de "falsy" values
console.log(!abacaxi);

// Falsy Values são valores que são tratados como "Falso" mas
// não são "iguais" ao False do booleano.

// Outros exemplos de comparação de undefined com false

// Isto vai retornar undefined
let banana;
console.log(banana);

// o Contrário de undefined, retorna true
console.log(!banana);

// Porém undefine é diferente de false
// pois aqui retorna false
console.log(undefined === false);

// e aqui vai retornar true, porque banana é indefinida
console.log(banana === undefined);

// -----------------------------------------------------

// -----------------------------------------------------
// Um exemplo divertido de declaração dinâmica utilizando
// o que foi estudado aqui

let novaVariavel = "frutas";

eval(`var ${novaVariavel};`);


if(eval(`${novaVariavel}`) === undefined){
	console.log(`A variável ${novaVariavel} é ${frutas}`);
	eval(`var ${novaVariavel} = null;`);

	if(eval(`${novaVariavel}`) === null){
		console.log("O valor se transformou em nulo!");
	}else{
		console.log("O valor não se transformou em nulo!");
	}

}else{
	console.log(`${novaVariavel} é ${frutas}`);
}


// -----------------------------------------------------