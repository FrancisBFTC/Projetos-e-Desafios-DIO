import {mostraCidade, mostraIdade, mostraHobby} from './funcoes.mjs';

console.log(mostraIdade("Wenderson", 26));
console.log(mostraCidade("Wenderson", "Planaltina"));
console.log(mostraHobby("Wenderson", "Assistir Filmes"));

const FIRST = document.getElementById('firstPhrase');
const SECOND = document.getElementById('secondPhrase');
const THIRD = document.getElementById('thirdPhrase');

FIRST.innerHTML = `<p>${mostraIdade("Wenderson", 26)}</p>`;
SECOND.innerHTML = `<p>${mostraCidade("Wenderson", "Planaltina")}</p>`;
THIRD.innerHTML = `<p>${mostraHobby("Wenderson", "Assistir Filmes")}</p>`;