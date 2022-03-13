// Exportar Funções : Named Exports
// 1ª forma

export function mostraIdade(pessoa){
	return `A idade de ${pessoa.nome} é ${pessoa.idade}`;
}

export function mostraCidade(pessoa){
	return `A cidade de ${pessoa.nome} é ${pessoa.cidade}`;
}

export function mostraHobby(pessoa){
	return `O hobby de ${pessoa.nome} é ${pessoa.hobby}`;
}

// Exportar Funções: Named exports
// 2ª forma

export {
	mostraIdade,
	mostraCidade,
	mostraHobby
}

// Exportar Funções: Default exports
// 1. Só pode haver um por arquivo
// 2. Será o retorno padrão do seu arquivo

function mostraIdade(pessoa){
	return `A idade de ${pessoa.nome} é ${pessoa.idade}`;
}

function mostraCidade(pessoa){
	return `A cidade de ${pessoa.nome} é ${pessoa.cidade}`;
}

function mostraHobby(pessoa){
	return `O hobby de ${pessoa.nome} é ${pessoa.hobby}`;
}

export {
	mostraIdade,
	mostraCidade
}

export default mostraHobby;

//Importar Funções
// O arquivo deve ser passado com o './' antes
// para ser inicializado

// Named Exports

import {funcao, variavel, classe} from './arquivo.js';

// Default Exports

import valorDefault from './arquivo.js';


// Importar Funções: Trocando nome de imports com 'as'

import { arquivo as Apelido } from './arquivo.js';

Apelido.metodo();

// Importar Funções: 
// Importando todos os dados de um arquivo

import * as INFOS from '.arquivo.js';

INFOS.metodoA();

console.log(INFOS.variavel);

// Vinculando ao HTML

/*

<script type="module" src="./main.js"></script>

Para fazer testes localmente (de um arquivo no seu computador),
será necessário estar rodando um servidor, como live server.

*/


// Curiosidades

/*

1. Módulos sempre estão em "strict mode"
2. Podem ser utilizadas as extensões .js e .mjs
3. Para testes locais, é necessário utilizar um servidor
4. Ao importar, sempre lembre da extensão (.js, .mjs)
5. Ao importar, sempre utilizar "./" como ponto de partida

*/
