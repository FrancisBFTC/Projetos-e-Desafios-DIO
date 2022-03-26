/*
	Variáveis Globais do Snake Game
*/
// ------------------------------------------
let canvas   = "";
let menuGame = "";
let context  = "";
let divOver  = "";
let game     = "";
let menu     = "";
let input    = "";
let divLevel = "";
// ------------------------------------------

/*
	Variáveis e estruturas inicializadas da cobra
	e da comida
*/
// ------------------------------------------

let countPoint = 0;
let colorFood  = "red";
let challenge = [];

challenge[0] = {
	ammount: 0
};

challenge[1] = {
	ammount: 0
};

challengeBlue = false;
counterBlue = 0;
counterYellow = 0;
snakeColor = "green";

let direction  = "right";
let previousDirection = "";  
let box = 32;
let pontuacao = 0;
let counter   = 0;
let speed     = 100;
var eventKey  = false;

let snake = [];
var snakeX;
var snakeY;

snake[0] = {
	x: 8 * box,
	y: 8 * box
};

let food = {
	x: Math.floor(Math.random() * 15 + 1) * box,
	y: Math.floor(Math.random() * 15 + 1) * box
}
// ------------------------------------------

// Adiciona a função de evento para o teclado
document.addEventListener("keydown", update);

// Inicia a função do som do menu a cada 100 ms
sound = setInterval(playSound, 100);

// Função para tocar som do menu
function playSound(){

	var somMenu = document.getElementById("somMenu");

	somMenu.addEventListener("ended", function(){ 
		somMenu.currentTime = 0; 
		somMenu.play(); 
	}, false);
	
	somMenu.play();
}	

// Função que cria o plano de fundo do Jogo
function createBG(){
	context.fillStyle = "black";
	context.fillRect(0, 0, 16 * box, 16 * box);
}

// Função que cria a cobrinha do jogo
function createSnake(){
	for(let i = 0; i < snake.length; i++){
		context.fillStyle = snakeColor;
		context.fillRect(snake[i].x, snake[i].y, box, box);
	}
}

// Função que cria a comida da cobrinha do jogo
function createFood(){
	context.fillStyle = colorFood;
	context.fillRect(food.x, food.y, box, box);
}

/*
	Função para definição da direção da cobra
	através do evento de teclado
*/
// ---------------------------------------------------------------------------------


function update(event){

	// Implementação por Switch (otimizado)

	eventKey  = event;

	switch(event.keyCode){
		case 37: direction = (direction !== "right") ? "left" : direction; break;
		case 38: direction = (direction !== "up") ? "down" : direction;    break;
		case 39: direction = (direction !== "left") ? "right" : direction; break;
		case 40: direction = (direction !== "down") ? "up" : direction;    break;
	}	
	
	// Isto é necessário para a cobra não saltar 2 quadrados
	// Pois a função runSnakeRun() é executada 2 vezes, e isso
	// nos garante que a cobra tenha resposta imediata ao evento de teclado
	switch(previousDirection){
		case "right": snake[0].x -= box; break;
		case "left":  snake[0].x += box; break;
		case "up":    snake[0].y -= box; break;
		case "down":  snake[0].y += box; break;
	}

	runSnakeRun();
	eventKey = !eventKey;

}
// ---------------------------------------------------------------------------------

/*
	Função para iniciar o jogo que executa em um loop
	a cada X ms 
*/
// ---------------------------------------------------------------------------------
function startGame(){

	// Implementação por Switch (otimizado)
	/*
		Dependendo da direção imposta pelo evento de teclado e a posição atual
		da cobra, a cobrinha será zerada ou redesenhada no início ou final da tela
	*/
	switch(direction){
		case "right" :
			if(snake[0].x > (15 * box)) challengeBlue = true;
			snake[0].x = (snake[0].x > 15 * box) ? 0 : snake[0].x; 
			break;
		case "left" : 
			if(snake[0].x < 0) challengeBlue = true;
			snake[0].x = (snake[0].x < 0)  ? 15 * box : snake[0].x;
			break;
		case "up" : 
			if(snake[0].y > (15 * box)) challengeBlue = true;
			snake[0].y = (snake[0].y > 15 * box) ? 0 : snake[0].y;
			break;
		case "down" : 
			if(snake[0].y < 0) challengeBlue = true;
			snake[0].y = (snake[0].y < 0)  ? 15 * box : snake[0].y;
			break;
	}



	// Cessa a execução da música de fundo do menu
	clearInterval(sound);
	somMenu.pause();

	// Inicio de música de fundo após a verificação de teclas acima
	var somComendo = document.getElementById("somComendo");
	var somColisao = document.getElementById("somColisao");
	var somFundo = document.getElementById("somFundo");

	somFundo.addEventListener("ended", function(){ 
		somFundo.currentTime = 0; 
		somFundo.play(); 
	}, false);
	
	somFundo.play();

	/*
		Verifica todas as posições do corpo da cobra, se a cabeça
		da cobra for igual a uma dessas posições, para o som de fundo,
		toca o som de colisão, cessa a execução do jogo e recria o menu
	*/
	for(let i = 1; i < snake.length; i++){
		if(snake[0].x === snake[i].x && snake[0].y === snake[i].y){
			
			somFundo.pause();
			somColisao.play();
			clearInterval(game);
			createMenu('Play Again');

		}
		
	}

	// New Challenges
	if(snake.length > 10){
		if(snake[0].x === snake[10].x-box && snake[0].y === snake[10].y){
			challenge[0].ammount++;
		}
	}

	if(snake.length > 14){
		if(challenge[1].ammount === 0){
			if(challengeBlue){
				let endSnake = snake.length-1;
				if(snake[0].x === snake[endSnake].x-box && snake[0].y === snake[endSnake].y){
					challenge[1].ammount++;
					challengeBlue = false;
				}
			}
		}
	}
	

	// Recria o fundo, a cobra e a comida dentro desse loop
	createBG();
	createSnake();
	createFood();

	// Se o evento do teclado estiver ativo, não re-executa a função
	// pois ela já foi executada recentemente
	if(!eventKey)
		runSnakeRun();

}
// ---------------------------------------------------------------------------------


function runSnakeRun(){
	

		// snakeX e snakeY recebe a posição atual da cabeça da cobra
		snakeX = snake[0].x;
		snakeY = snake[0].y;

		// Verifica a direção imposta pelo evento de teclado, a depender desta
		// direção, calcula a próxima posição da cobra e isto é o que faz a 
		// cobra sempre correr
		switch(direction){
			case "right":
				snakeX += box; break;
			case "left":
				snakeX -= box; break;
			case "up":
				snakeY += box; break;
			case "down":
				snakeY -= box; break;
		}

		previousDirection = direction;

		/*
			Se a posição atual da cobra for igual a posição da comida então
			toca som de comendo, recria a comida em nova posição aleatória
			e aumenta a pontuação escrevendo no campo de texto, se não, 
			apaga a cauda da cobra, isso faz parte dela correr também.
		*/
		if(snake[0].x !== food.x || snake[0].y !== food.y){
			snake.pop();
		}
		else{
			somComendo.play();
			food.x = Math.floor(Math.random() * 15 + 1) * box;
			food.y = Math.floor(Math.random() * 15 + 1) * box;

			// Código adicionado para corrigir um bug, pois a comida de vez
			// em quando aparece em cima do corpo da cobra, então isso pode resolver
			// porém mais algumas análises em relação a isso serão feitas
			let foundX = snake.find(value => value.x === food.x);
			let foundY = snake.find(value => value.y === food.y);
			if(foundX !== undefined && foundY !== undefined){
				food.x = Math.floor(Math.random() * 15 + 1) * box;
				food.y = Math.floor(Math.random() * 15 + 1) * box;
			}


			// Implementação de comida amarela a cada 7 pontos
			// Se a 1ª manobra for satisfeita
			if(colorFood === "yellow"){
				pontuacao += 5;
				colorFood = "red";
				counterYellow++;
				if(counterYellow === 10){
					snakeColor = "yellow";
					counterYellow = 0;
				}
			}else if(colorFood === "lightblue"){
				pontuacao += 10;
				colorFood = "red";
				counterBlue++;
				if(counterBlue === 5){
					snakeColor = "lightblue";
					counterBlue = 0;
				}
			}else{
				pontuacao++;
			}

			if(countPoint === 7){
				colorFood = "yellow";
				countPoint = -1;
			}

			if(challenge[0].ammount > 0){
				countPoint++;
				if(countPoint === 5){
					colorFood = "yellow";
					countPoint = -1;
					challenge[0].ammount--;
				}
			}

			if(challenge[1].ammount > 0){
				colorFood = "lightblue";
				challenge[1].ammount = 0;
			}



			counter++;
			input.value = pontuacao;
			
			// Código implementado para aumentar a velocidade da cobra
			// a cada 10 pontos
			if(counter === 10){
				counter = 0;
				speed -= 5;
			}
		}

		// Com as novas posições adicionadas da cobra, recria a cabeça da cobra
		let newHead = {
			x: snakeX, 
			y: snakeY
		};

		// Escreve esta cabeça na estrutura
		snake.unshift(newHead);

}

/*
	Função para criar o menu inicial ou final dependendo do argumento 
*/
// ---------------------------------------------------------------------------------
function createMenu(text){

	// toca som do menu
	somMenu.play();

	// Define variáveis para criar a DIV de fundo do menu do jogo
	menu = document.createElement('div');
	menu.setAttribute('id', 'menu-game');
	const body = document.getElementsByTagName('body')[0];
	body.appendChild(menu); 

	// Define variáveis para criar a DIV de game-over
	menuGame = document.getElementById('menu-game');
	divOver = document.createElement('div');
	let playTheGame;
	let textButton;

	// Se texto for igual a "Jogar novamente" então cria um menu com game-over
	// com o botão de jogar novamente e o valor da pontuação final
	if(text === 'Play Again'){
		document.getElementsByTagName('body')[0].removeChild(canvas);

		const taskLabel = document.createElement('label');
		const textNode = document.createTextNode("Game Over");

		playTheGame = document.createElement('button');
		textButton = document.createTextNode(text);

		taskLabel.appendChild(textNode);
		divOver.appendChild(taskLabel);
		divOver.classList.add('game-over');

		playTheGame.addEventListener('click', tryPlayAgain);

		divLevel.innerHTML = `<h2 style='margin-right: 25%;'>SUA PONTUACAO É: ${pontuacao}</h2>`;
		pontuacao = 0;

	}
	// Se não, se for igual a "Jogar jogo", cria um menu básico apenas com o botão de 
	// Jogar jogo e adiciona a função de evento para iniciar o jogo
	else{
		playTheGame = document.createElement('button');
		textButton = document.createTextNode(text);

		playTheGame.addEventListener('click', playGame);

		divOver.appendChild(playTheGame);

	}

	// Isto será criado independente se o menu for antes ou após o jogo
	menuGame.appendChild(divOver);
	menuGame.appendChild(playTheGame);
	menuGame.classList.add('panel-menu');

	playTheGame.appendChild(textButton);
	playTheGame.setAttribute('id', 'play-again');

}
// ---------------------------------------------------------------------------------

// Função que recarrega a página se o botão de jogar novamente for pressionado
tryPlayAgain = () => location.reload();


/*
	Função de evento para iniciar o jogo e reescrever a tela do canvas
*/
// ---------------------------------------------------------------------------------
function playGame(){

	// Remove a DIV de menu do corpo da página
	const body = document.getElementsByTagName('body')[0];
	document.getElementsByTagName('body')[0].removeChild(menu);

	// Cria o elemento da DIV de pontuação
	divLevel = document.createElement('div');
	divLevel.setAttribute('id', 'level-div');

	// Cria o elemento de texto dos pontos exibido acima do canvas
	const labelText = document.createElement('label');
	const description = document.createTextNode('PONTOS:');
	labelText.appendChild(description);
	divLevel.appendChild(labelText);

	// Cria o campo de texto onde irão os pontos e será adicionada
	// na DIV de pontuação
	const inputText = document.createElement('input');
	inputText.setAttribute('type', 'text');
	inputText.setAttribute('readonly', '');
	inputText.classList.add('input-class');
	divLevel.appendChild(inputText);

	// Adiciona a DIV de pontuação no corpo da página
	body.appendChild(divLevel);

	// Define globalmente o campo de texto para exibir os pontos
	input = document.getElementsByClassName('input-class')[0];

	// Recria a tela do canvas onde o jogo será realizado
	const canvElement = document.createElement('canvas');
	canvElement.setAttribute('id', 'snake');
	canvElement.setAttribute('width', '512');
	canvElement.setAttribute('height', '512');
	body.appendChild(canvElement);

	// Adiciona o elemento da cobra na tela do canvas
	// no formato 2D
	canvas = document.getElementById('snake');
	context = canvas.getContext("2d");


  	// Define globalmente o intervalo de tempo de execução
  	// do jogo, ou seja, é aqui que de fato se inicia o jogo
	game = setInterval(startGame, speed);    // 100 é o intervalo de tempo inicial
}
// ---------------------------------------------------------------------------------

// Cria o menu inicial do jogo para se iniciar o jogo
// Esta função é a primeira a ser executada
createMenu('Play Game');