// Classes: Element.classList

// Código html atual:
/*
<div id="meu-elemento" class="minha-classe">
	<!-- Content Here -->
</div>
*/

const meuElemento = document.getElementById('meu-elemento');

// Adiciona a classe "nova-classe"
meuElemento.classList.add("nova-classe");

// Remove a classe "minha-classe"
meuElemento.classList.remove("minha-classe");

// Adiciona a classe "dark-mode" caso ela não exista, caso exista,
// remove ela da lista.
meuElemento.classList.toggle("dark-mode");

// Resultado HTML do código acima:
/*
<div id="meu-elemento" class="nova-classe dark-mode">
	<!-- Content Here -->
</div>
*/

// CSS: Acessando diretamente o CSS de um elemento

// muda para azul todos os parágrafos
document.getElementsByTagName('p').style.color = "blue";

// altera a borda de todas as divs
document.getElementsByTagName('div').style.border = "2px solid blue";
