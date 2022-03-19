/*

Desafio

Crie um programa que leia 6 valores, os quais poderão ser negativos e/ou positivos. Em seguida, apresente a quantidade de valores positivos digitados.
Entrada

Você receberá seis valores, negativos e/ou positivos.
Saída

Exiba uma mensagem dizendo quantos valores positivos foram lidos. assim como é exibido abaixo no exemplo de saída. Não se esqueça de incluir na mensagem de saída o sufixo " valores positivos", conforme o exemplo abaixo:

*/

let quantidadePositivos = 0;

for (let i = 0; i < 6; i++) {

  const valorInformadoPeloUsuario = gets();

  if(valorInformadoPeloUsuario >= 0)
      quantidadePositivos++;

}

console.log(`${quantidadePositivos} valores positivos`);