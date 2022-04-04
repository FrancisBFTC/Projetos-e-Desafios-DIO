const yourShip = document.querySelector('.player-shooter');
const playArea = document.querySelector('#main-play-area');
const instructionsText = document.querySelector('.game-instructions');
const description = document.querySelector('.description-mission');
const startButton = document.querySelector('.start-button');
const placar = document.getElementById('placar');

let alienInterval;

let alienDead = 0;


const aliensImg = [
    'img/nave-monstro-1.png', 
    'img/nave-monstro-2.png', 
    'img/nave-monstro-3.png'
];

let missions = {
    step1 : {
        msg: '1ª missão: Encontre o planeta Axius e elimine' 
          + ' os 100 alienígenas durante 200 Anos-luz ao norte do espaço!',
        running: true,
        year: 0
    }

};

let years = 0;
let indexDir = 0;
let direction = [
    'flying-down',
    'flying-up',
    'flying-right',
    'flying-left'
];

var animation;

//movimento e tiro da nave
function flyShip(event) {
    if(event.key === 'ArrowUp') {
        playArea.classList.remove(direction[indexDir]);
        indexDir = 0;
        playArea.classList.add(direction[indexDir]);
    } else if(event.key === 'ArrowDown') {
        event.preventDefault();
        moveDown();
        playArea.classList.remove(direction[indexDir]);
        indexDir = 1;
        playArea.classList.add(direction[indexDir]);
    } else if(event.key === 'ArrowRight'){
        playArea.classList.remove(direction[indexDir]);
        indexDir = 2;
        playArea.classList.add(direction[indexDir]);
    } else if(event.key === 'ArrowLeft'){
        playArea.classList.remove(direction[indexDir]);
        indexDir = 3;
        playArea.classList.add(direction[indexDir]);
    }else if(event.key === 'w'){
        event.preventDefault();
        moveUp();
    }else if(event.key === 's'){
        event.preventDefault();
        moveDown();
    }else if(event.key === 'a'){
        event.preventDefault();
        moveLeft();
    }else if(event.key === 'd'){
        event.preventDefault();
        moveRight();
    } else if(event.key === " ") {
        event.preventDefault();
        fireLaser();
    }
}

//função de subir
function moveUp() {
    let topPosition = getComputedStyle(yourShip).getPropertyValue('top');
    if(topPosition < "10px") {
        return
    } else {
        let position = parseInt(topPosition);
        position -= 20;
        yourShip.style.top = `${position}px`;
    }
}

//função de descer
function moveDown() {
    let topPosition = getComputedStyle(yourShip).getPropertyValue('top');
    let sizeArea = parseInt(playArea.getBoundingClientRect().height) - 20;
    if(parseInt(topPosition) > sizeArea){
        return
    } else {
        let position = parseInt(topPosition);
        position += 20;
        yourShip.style.top = `${position}px`;
    }
}

//função de ir para esquerda
function moveLeft() {
    let leftPosition = parseInt(getComputedStyle(yourShip).getPropertyValue('left'));

    if(leftPosition < 140){
        return
    } else {
        let position = leftPosition;
        position -= 20;
        yourShip.style.left = `${position}px`;
    }
}

//função de ir para direita
function moveRight() {
    let leftPosition = getComputedStyle(yourShip).getPropertyValue('left');
    let sizeArea = parseInt(playArea.getBoundingClientRect().width) - 20;
    if(parseInt(leftPosition) > sizeArea){
        return
    } else {
        let position = parseInt(leftPosition);
        position += 20;
        yourShip.style.left = `${position}px`;
    }
}

//funcionalidade de tiro
function fireLaser() {
    let laser = createLaserElement();
    playArea.appendChild(laser);
    moveLaser(laser);
}

function createLaserElement() {
    let xPosition = parseInt(getComputedStyle(yourShip).getPropertyValue('left'));
    let yPosition = parseInt(getComputedStyle(yourShip).getPropertyValue('top'));
    let newLaser = document.createElement('img');
    newLaser.src = 'img/shoot.png';
    newLaser.classList.add('laser');
    newLaser.style.left = `${xPosition}px`;
    newLaser.style.top = `${yPosition - 10}px`;
    return newLaser;
}

function moveLaser(laser) {
    let laserInterval = setInterval(() => {
        let xPosition = parseInt(laser.style.left);
        let yPosition = parseInt(laser.style.top);
        let aliens = document.querySelectorAll('.alien');
        let sizeAreaX = parseInt(playArea.getBoundingClientRect().width) - 20;
        let sizeAreaY = parseInt(playArea.getBoundingClientRect().height) - 20;

        aliens.forEach((alien) => { //comparando se cada alien foi atingido, se sim, troca o src da imagem
            if(checkLaserCollision(laser, alien)) {
                alien.src = 'img/explosion.png';
                alien.classList.remove('alien');
                alien.classList.add('dead-alien');
                alienDead++;
                placar.innerHTML = "<h2> Abatidos: " + alienDead + " Anos-Luz: " + years + "</h2>";
            }
        })

        if(missions.step1.running){
            if(yPosition > sizeAreaY+300) {
                 laser.remove();
            } else {
                laser.style.top = `${yPosition - 8}px`;
            }
        }else{
            if(xPosition > sizeAreaX+300) {
                 laser.remove();
            } else {
                laser.style.left = `${xPosition + 8}px`;
            }
        }

    }, 10);
}

//função para criar inimigos aleatórios
function createAliens() {
    let newAlien = document.createElement('img');
    let sizeAreaY = parseInt(playArea.getBoundingClientRect().height) - 20;
    let sizeAreaX = parseInt(playArea.getBoundingClientRect().width) - 20;
    let alienSprite = aliensImg[Math.floor(Math.random() * aliensImg.length)]; //sorteio de imagens
    newAlien.src = alienSprite;
    newAlien.classList.add('alien');
    newAlien.classList.add('alien-transition');

    if(missions.step1.running){
        newAlien.style.left = `${Math.floor(Math.random() * sizeAreaX) + 30}px`;
        newAlien.style.top = `40px`;
    }else{
        newAlien.style.left = `${sizeAreaX}px`;
        newAlien.style.top = `${Math.floor(Math.random() * sizeAreaY) + 30}px`;
    }
    playArea.appendChild(newAlien);
    moveAlien(newAlien);
}

//função para movimentar os inimigos
function moveAlien(alien) {
    let moveAlienInterval = setInterval(() => {
        if(missions.step1.running){
            let xPosition = parseInt(window.getComputedStyle(alien).getPropertyValue('top'));
            let sizeAreaY = parseInt(playArea.getBoundingClientRect().height) - 20;
            if(xPosition >= sizeAreaY) {
                if(Array.from(alien.classList).includes('dead-alien')) {
                    alien.remove();
                }// else {
                 //   gameOver();
                //}
            } else {
                alien.style.top = `${xPosition + 4}px`;
            }
        }else{

        }

    }, 30);
}

//função para  colisão
function checkLaserCollision(laser, alien) {
        let sizeAreaX = parseInt(playArea.getBoundingClientRect().width) - 170;
        let laserTop = parseInt(laser.style.top);
        let laserLeft = parseInt(laser.style.left);
        let laserBottom = laserTop - 20;
        let alienTop = parseInt(alien.style.top);
        let alienLeft = parseInt(alien.style.left);
        let alienBottom = alienTop - 30;
        if(laserLeft != sizeAreaX+300 && laserLeft + 40 >= alienLeft) {
            if(laserTop <= alienTop && laserTop >= alienBottom) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
        
}

//inicio do jogo
startButton.addEventListener('click', (event) => {
    playGame();
})

function playGame() {
    startButton.style.display = 'none';
    instructionsText.style.display = 'none';
    description.style.display = 'none';
    window.addEventListener('keydown', flyShip);
    playArea.classList.remove('back-default');
    playArea.classList.add('back-animate');
    playArea.classList.add(direction[indexDir]);
    yourShip.style.left = "40%";
    yourShip.style.top = "75%";
    animation = getComputedStyle(playArea).getPropertyValue('background-position-y');
    alienInterval = setInterval(() => {
        createAliens();
    }, 2000);

    let countYears = setInterval(() => {
        placar.innerHTML = "<h2> Abatidos: " + alienDead + " Anos-Luz: " + years + "</h2>";
        if(missions.step1.year !== 200){
            if(indexDir === 0)
                missions.step1.year++;
            else
                missions.step1.year--;
        }else{
            if(alienDead === 100){
                alert('Você chegou no Planeta Axius!');
                clearInterval(countYears);
            }
        }

        years = missions.step1.year;
    }, 500);
}

//função de game over
function gameOver() {
    window.removeEventListener('keydown', flyShip);
    clearInterval(alienInterval);
    let aliens = document.querySelectorAll('.alien');
    aliens.forEach((alien) => alien.remove());
    let lasers = document.querySelectorAll('.laser');
    lasers.forEach((laser) => laser.remove());
    playArea.classList.remove(direction[indexDir]);
    playArea.classList.remove('back-animate');
    playArea.classList.add('back-default');
    setTimeout(() => {
        alert('game over!');
        yourShip.style.top = "250px";
        startButton.style.display = "block";
        instructionsText.style.display = "block";
        description.style.display = "block";
    });
}


instructionsText.innerHTML = `${missions.step1.msg}`;