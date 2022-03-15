// O que é Map
/*
 1. Cria um novo array
 2. Não modifica o array original
 3. Realiza as operações em ordem
*/

// Sintaxe

array.map(callback, thisArg);
callback(item, index, array);

/*
Callback: função a ser executada em cada elemento
thisArg (Opcional): valor de 'this' dentro da função de callback
*/

// Map vs Foreach
/*
Diferenças entre Map e Foreach:
map retorna outro array
forEach não retorna outro array
*/

// Usando map

const array = [1,2,3,4,5];

array.map((item) => item * 2); // retorno: [2,4,6,8,10]

// Usando forEach

const array = [1,2,3,4,5];

array.forEach((item) => item * 2); // retorno: undefined