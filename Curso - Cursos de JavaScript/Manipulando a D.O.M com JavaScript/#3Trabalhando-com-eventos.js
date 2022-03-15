// Tipos de Eventos

/*
Mouse:

Eventos do mouse: Mouseover e Mouseout
Eventos de click: click e dbclick
Eventos de atualização: change e load
*/

// Adicionando eventos

const botao = document.getElementById('meu-botao');

botao.addEventListener("click", funcao1); // caso clicado, executa funcao1
botao.addEventListener("dbclick", funcao2); // caso click duplo, executa funcao2
botao.addEventListener("mouseover", funcao3); // caso mouseover, executa funcao3

// Eventos diretamente no HTML

/*
<h1 onclick="mudaTexto(this)"> Clique aqui! </h1>

<script>
	function mudaTexto(id){
		id.innerHTML = "clicado!";
	}

</script>

*/