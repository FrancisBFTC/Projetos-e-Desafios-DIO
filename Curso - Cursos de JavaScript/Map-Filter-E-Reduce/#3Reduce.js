// O que é

/*
Diferente do map e do filter ele não retorna outro array
Ele executa uma função em todos os elementos do array,
retornando um valor único

*/

// Sintaxe

array.reduce(callbackFn, initialValue);

/*
Callback: função a ser executada a partir do acumulador
initialValue(opcional): valor sobre o qual o retorno final irá atuar

*/

const callBackFn = function(accumulator, currentValue, index, array){
	// faça algo
}

/*
Accumulator/PreviousValue: acumulador de todas as chamadas de callbackFn
currentValue: elemento atual sendo acessado pela função

Obs.: index e array não são necessários
*/