// 3ª Exercício - Filter

// filtrando pares com função normal
function filtraPares(array){
	return array.filter(callBack);
}

// filtrando ímpares com arrow function
function filtraImpares(array){
	return array.filter((item) => item % 2 !== 0);
}

function callBack(item){
	return item % 2 === 0;
}

const myArray = [2, 5, 8, 35, 44, 21, 22];

console.log('Pares:', filtraPares(myArray));
console.log('Ímpares:', filtraImpares(myArray));