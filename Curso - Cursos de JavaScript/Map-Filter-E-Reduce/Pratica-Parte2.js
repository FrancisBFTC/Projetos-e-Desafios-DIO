// 2ª Exercício - Map sem this

function mapSemThis(array){
	return array.map(function(item){
		return item * 2;
	});
}

const numbers = [2, 5, 7, 10, 13];

console.log('Novo array:', mapSemThis(numbers));
console.log('Array original:', numbers);