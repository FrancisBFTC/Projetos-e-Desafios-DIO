// Atividade do Set

const myArray = [21, 21, 30, 30, 5, 256, 512, 1024, 5];

function valoresUnicosSet(array){
	const mySet = new Set(array);

	// isto funcionaria, mas vai retornar um set e queremos
	// retornar um array
	return [mySet];
}

function valoresUnicosArr(array){
	const mySet = new Set(array);

	// Técnica REST para retornar o
	// array
	return [...mySet];
}


console.log(valoresUnicosSet(myArray));
console.log(valoresUnicosArr(myArray));