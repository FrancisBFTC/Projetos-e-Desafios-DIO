// 4ª Exercício - Reduce

// 1ª Exercício do Reduce

console.log('Somatorios de numeros');

function sumNumbers(array){
	return array.reduce(function(previous, current){
		console.log('Acumulador:', {previous});
		console.log('Atual:', {current});
		return previous + current;
	}, 2); // InitialValue (opcional)
}

const numbers = [1, 2, 3];

console.log('Numero final:', sumNumbers(numbers));


// 2ª Exercício do Reduce

const lista = [
	{
		name: 'sabao em pó',
		preco: 30
	},
	{
		name: 'cereal',
		preco: 12
	},
	{
		name: 'toalha',
		preco: 30
	}
];

console.log('\nSistema de compras');

const saldoDisponivel = 200;

function calculaSaldo(saldoDisponivel, lista){
	return lista.reduce(function(previous, current, index){
		console.log('rodada', index + 1);
		console.log({previous});
		console.log({current});
		return previous - current.preco;
	}, saldoDisponivel);
}

console.log(calculaSaldo(saldoDisponivel, lista));