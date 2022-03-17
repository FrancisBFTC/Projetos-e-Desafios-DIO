function start(){
	$("#inicio").hide();

	$("#fundoGame").append("<div id='jogador' class='anima1'></div>");
	$("#fundoGame").append("<div id='inimigo1' class='anima2'></div>");
	$("#fundoGame").append("<div id='inimigo2'></div>");
	$("#fundoGame").append("<div id='amigo' class='anima3'></div>");

	//Principais variáveis do jogo
	
	var jogo = {}
	var velocidade=5;
	var posicaoY = parseInt(Math.random() * 334);
	var TECLA = {
		W: 87,
		S: 83,
		D: 68
	}

	jogo.pressionou = [];

	//Verifica se o usuário pressionou alguma tecla	
	
	$(document).keydown(function(e){
		jogo.pressionou[e.which] = true;
	});


	$(document).keyup(function(e){
       jogo.pressionou[e.which] = false;
	});
	
	//Game Loop

	jogo.timer = setInterval(loop,30);
	
    function loop(){
    	movefundo();
    	movejogador();
    	moveinimigo1();
    	moveinimigo2();
    	moveamigo();
    }


	// Função que movimenta o fundo do jogo
	
	function movefundo() {
		left = parseInt($("#fundoGame").css("background-position"));
		$("#fundoGame").css("background-position",left-1);
	}

	// Função que movimenta o jogador
	function movejogador() {
	
		if (jogo.pressionou[TECLA.W]) {
			var topo = parseInt($("#jogador").css("top"));
			
			if (topo > 10) {
				$("#jogador").css("top",topo-10);
			}
		}
		
		if (jogo.pressionou[TECLA.S]) {
			var topo = parseInt($("#jogador").css("top"));
			
			if (topo < 430) {	
				$("#jogador").css("top",topo+10);
			}
		}
		
		if (jogo.pressionou[TECLA.D]) {
			
			//Chama função Disparo	
		}

	}

	// Função que movimenta o 1ª inimigo
	function moveinimigo1() {
		posicaoX = parseInt($("#inimigo1").css("left"));
		$("#inimigo1").css("left",posicaoX-velocidade);
		$("#inimigo1").css("top",posicaoY);
			
		if (posicaoX <= 0) {
			posicaoY = parseInt(Math.random() * 334);
			$("#inimigo1").css("left",694);
			$("#inimigo1").css("top",posicaoY);
		}
	}

 	// Função que movimenta o 2ª inimigo
	function moveinimigo2() {
        posicaoX = parseInt($("#inimigo2").css("left"));
		$("#inimigo2").css("left",posicaoX-3);
				
		if (posicaoX <= 0) {	
			$("#inimigo2").css("left",775);		
		}
	}

	// Função que movimenta o amigo
	function moveamigo() {
		posicaoX = parseInt($("#amigo").css("left"));
		$("#amigo").css("left",posicaoX+1);
				
		if (posicaoX > 906) {
			$("#amigo").css("left",0);		
		}

	}


}