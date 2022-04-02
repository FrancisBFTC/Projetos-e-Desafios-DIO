// Scripts para o jogo do dinossauro

/* Constantes do D.O.M e Variáveis Globais */
// -------------------------------------------------

const dino = document.querySelector('.div-dino');
const background = document.querySelector('.div-background');
let isJumping = false;
let score = 0;
let birdWind = false;
let position = 0;
let counter = 0;
let speed = 20;

let imgsCactus = [
	'img/cactus.png',
	'img/cactus-3.png',
	'img/cactus-4.png'
];

// -------------------------------------------------

/* Eventos do teclado */
// -------------------------------------------------

let identKeyUp = (event) => {
	if(event.keyCode === 32)
		if(!isJumping) jumpDino();
}

document.addEventListener('keydown', identKeyUp);

// -------------------------------------------------


/* Funções do jogo */
// -------------------------------------------------

// Função de salto do dinossauro
function jumpDino(){
	isJumping = true;

	// dinossauro subindo
	let upInterval = setInterval(() => {
		if(position >= 200){
			clearInterval(upInterval);

			// dinossauro descendo
			let downInterval = setInterval(() => {
				if(position <= 0){
					clearInterval(downInterval);
					isJumping = false;
				}else{
					position -= 25;
					dino.style.bottom = `${position}px`;
				}
			}, 20);

		}else{
			position += 25;
			dino.style.bottom = `${position}px`;
		}
	}, 20);

}

// Função que cria um cactus
function createCactus(){
	const cactus = document.createElement('div');
	let cactusPos = 1000;
	let ramdomTime = Math.random() * 6000;
	let indexCactus = Math.floor(Math.random() * 3);

	cactus.classList.add('div-cactus');
	cactus.style.left = `${1000}px`;
	cactus.style.backgroundImage = `url(${imgsCactus[indexCactus]})`;
	background.appendChild(cactus);


	let leftInterval = setInterval(() => {
		counter++;
		score++;
		if(cactusPos < -60){
			clearInterval(leftInterval);
			background.removeChild(cactus);
		}else if(cactusPos > 0 && cactusPos < 60 && position < 60){
			// Game Over
			clearInterval(leftInterval);
			document.body.innerHTML = '<h1 class="game-over"> FIM DE JOGO</h1>';
		}else {
			cactusPos -= 10;
			cactus.style.left = `${cactusPos}px`;
		}

	}, speed);

	if(counter > 20){
		speed--;
		counter = 0;
	}

	setTimeout(createCactus, ramdomTime);
}

// Função que cria um passáro
function createBird(){
	const bird = document.createElement('div');
	let birdPosX = 1000;
	let birdPosY = Math.floor(Math.random() * 200);
	let ramdomTime = Math.random() * 6000;
	if(birdPosY <= 70) birdPosY = 70;

	bird.classList.add('div-bird');
	bird.style.left = `${1000}px`;
	bird.style.bottom = `${birdPosY}px`;
	background.appendChild(bird);

	score++;

	let leftIntervalB = setInterval(() => {
		if(birdPosX < -44){
			clearInterval(leftIntervalB);
			clearInterval(birdWinds);
			background.removeChild(bird);
		}else if(birdPosX > 0 && birdPosX <= 60 && position == birdPosY){
			// Game Over
			clearInterval(leftIntervalB);
			document.body.innerHTML = '<h1 class="game-over"> FIM DE JOGO</h1>';
		}else {
			birdPosX -= 10;
			bird.style.left = `${birdPosX}px`;
			
		}
	}, speed+20);

	let birdWinds = setInterval(() => {
		if(!birdWind){
			bird.style.background = `url(img/bird-wind-down.png)`;
			birdWind = true;
		}
		else{
			bird.style.background = `url(img/bird-wind-up.png)`;
			birdWind = false;
		}
	}, 250);

	setTimeout(createBird, ramdomTime);
}

// -------------------------------------------------


/* Chamada das funções principais do jogo */
// -------------------------------------------------
createCactus();

createBird();

// -------------------------------------------------

