// O que é

/*
  Assim como o map:

  1. Cria um novo array
  2. Não modifica o array original

 Retorna uma lista apenas os items que passaram
 pelo filtro
*/

// Sintaxe

array.filter(callback, thisArg);

/*
Callback: função a ser executada em cada elemento
thisArg (Opcional): valor de 'this' dentro da função de callback
*/

// Exemplo

const frutas = ['maçã fuji', 'maçã verde', 'laranja', 'abacaxi'];

frutas.filter((fruta) => fruta.includes('maçã'));

// retorno: ['maçã fuji', 'maçã verde']