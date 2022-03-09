// Exemplos de estruturas condicionais

console.log("Exemplo de 2 jogadores utilizando estrutura condicionais e de repetição.");
var jogo = {
	jogadores : {
		jogador1: {
			nome: 'João',
			pontos: 0	
		},
		jogador2: {
			nome: 'gabriel',
			pontos: 0
		}
	},
	vencedor: 'Nenhum',
	pontuacao: 0,
	placar: false,
	indice: 3,
	partidas: 5
};


// Exemplo de DO WHILE

let nomes_jogadores = [];
var vencedores = [];
var quant = 0;
do{
   	quant++;
    console.log('\nA', quant, 'ª partida começou!...\n');

	var jogador = jogo.jogadores;
	

	if(quant % 2 === 0)
		jogador.jogador1.pontos++;
	else
		jogador.jogador2.pontos++;

	//jogador.jogador2.pontos++;
	//jogador.jogador2.pontos++;
	//jogador.jogador2.pontos++;
	//jogador.jogador2.pontos++;
	//jogador.jogador2.pontos++;
	//jogador.jogador2.pontos++;

	// Exemplo de IF aninhado

	if(jogador.jogador1.pontos !== -1 && jogador.jogador2.pontos !== -1){
		if(jogador.jogador1.pontos > jogador.jogador2.pontos){
			jogo.vencedor = jogador.jogador1.nome;
			jogo.pontuacao = jogador.jogador1.pontos;
			console.log('O jogador ', jogo.vencedor, ' marcou ', jogo.pontuacao, ' pontos,',
				      	'\nPontanto, ele é o vencedor!');
			jogo.placar = true;
		} else if(jogador.jogador1.pontos === jogador.jogador2.pontos){
			jogo.pontuacao = jogador.jogador1.pontos;
			jogo.vencedor = 'todos';
			console.log('O jogadores ', jogador.jogador1.nome, ' e ', jogador.jogador2.nome,
				         ' estão empatados com ', jogo.pontuacao, ' pontos!');
		} else {
			jogo.vencedor = jogador.jogador2.nome;
			jogo.pontuacao = jogador.jogador2.pontos;
			console.log('O jogador ', jogo.vencedor, ' marcou ', jogo.pontuacao, ' pontos,',
						'\nPontanto, ele é o vencedor!');
			jogo.placar = true;
		}	

		console.log('Jogadores:', jogador.jogador1.nome, 'e', jogador.jogador2.nome);
		console.log('Placar :', jogador.jogador1.pontos, 'x', jogador.jogador2.pontos);
		console.log('\n');
	}else{
		console.log('Um dos jogadores possui pontuação inválida!');
	}

	// Exemplo de IF ternário

	//jogo.placar = !jogo.pontuacao == 0;
	jogo.placar = jogo.pontuacao === 0 ? false : true;
	jogo.placar ? console.log('Um jogador marcou pontuação.') : console.log('Nenhum jogador marcou pontuação.');

	// Exemplo de Switch e Case

	switch(jogo.pontuacao){
		case 1:
			console.log('Vitória Ferro : É preciso melhorar mais!');
			break;
		case 2:
			console.log('Vitória Bronze : Humm, você está melhorando!');
			break;
		case 3:
			console.log('Vitória Prata : Aí sim, continue assim, jogou bem!');
			break;
		case 4:
			console.log('Vitória Ouro : Wow! Esta jogada foi ótima!');
			break;
		case 5:
			console.log('Vitória Platinum : Meu deus! Esta jogada foi espetacular!');
			break;
		case 6:
			console.log('Vitória Diamante : Meus parabéns! Você se tornou um Deus dos jogos!');
			break;
		default:
			console.log('Sem vitória : Que decepção! Esta jogada foi horrível!');
			jogo.vencedor = 'Nenhum';
			break;
	}

	// Exemplo do FOR

	console.log('\nQuais jogos estão implementados neste campeonato?');

	let jogos = ['Futebol', 'Voleybol', 'Basquete', 'Handball'];

	for(let index = 0; index < jogos.length; index++){
		console.log(jogos[index]);
	}

	console.log('Jogo Atual:', jogos[jogo.indice]);


	// Exemplo do FOR In - i recebe o índice aqui

	console.log('\nÍndice de cada jogo: ');
	for(let i in jogos){
		console.log(i);
	}

	// Outro Exemplo do FOR In - i recebe a propriedade aqui
	// Lendo as propriedades do Objeto jogo

	console.log('\nPropriedades e valores do jogo: ');

	for(i in jogo){
		i !== 'indice' ? console.log(i, '=>', jogo[i]) : console.log(i, '=>', jogos[jogo[i]]);
		if(i == 'jogadores'){
			let x = 0;
			for(j in jogo[i]){
				nomes_jogadores[x] = jogo.jogadores[j].nome;
				x++;
			}

			// Exemplo do FOR Of - n recebe o valor aqui

			for(n of nomes_jogadores)
				console.log('	   ', n);
		}
	}

	vencedores[quant-1] = jogo.vencedor; 
}while(quant < jogo.partidas);


// Exemplo de WHILE 

var a = 0;
var x = 0, y = 0;

while(a < vencedores.length){
	if(vencedores[a] !== 'todos')
		(vencedores[a] == nomes_jogadores[0]) ? x++ : y++;
	else{
		x = jogador.jogador1.pontos;
		y = jogador.jogador2.pontos;
	}

	a++
}

console.log('\nResultado Final do jogo =>\n');
console.log('O melhor jogador e vencedor das', jogo.partidas, 'partidas foi:');

if(x == y){
	console.log('Os dois! Porque venceram empatados com', jogo.pontuacao, 'pontos!');
}else{
	if(x > y)
		console.log(nomes_jogadores[0], 'com', jogo.pontuacao, 'pontos!');
	else
		console.log(nomes_jogadores[1], 'com', jogo.pontuacao, 'pontos!');	
}


