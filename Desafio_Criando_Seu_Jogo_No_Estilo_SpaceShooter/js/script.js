const yourShip         = document.querySelector('.player-shooter');
const playArea         = document.querySelector('#main-play-area');
const instructionsText = document.querySelector('.game-instructions');
const description      = document.querySelector('.description-mission');
const startButton      = document.querySelector('.start-button');
const placar           = document.getElementById('placar');

const UP    = 0;
const DOWN  = 1;
const RIGHT = 2;
const LEFT  = 3;

var kmValue, abatidos, missionNum, yearValue, imgObj;
var introMusic, musicMission, musicFinish;

let alienInterval, initMission;

let pressJ    = false;

let alienDead = 0;
let years     = 0;
let distancy  = 0;
let indexDir  = 0;

const direction = [
    'flying-down',
    'flying-up',
    'flying-right',
    'flying-left'
];

const aliensImg = [
    'img/nave-monstro-1.png', 
    'img/nave-monstro-2.png', 
    'img/nave-monstro-3.png'
];

let missions = {
    step1 : {
        msg: '1ª missão: Encontre o planeta Axius e elimine' 
          + ' os 100 alienígenas durante 200 Anos-luz ao norte do espaço!',
        running: false,
        year: 0
    },
    step2 : {
        msg: '2ª missão: Encontre um objeto valioso e elimine' 
          + ' os 300 alienígenas voando por 500km!',
        running: false,
        km: 0
    },

    mission: 1
}; 

instructionsText.innerHTML = `${missions.step1.msg}`;


//movimento e tiro da nave
function flyShip(event) {
    if(event.key === 'ArrowUp') {
        changeDirectionSpace(UP);
    } else if(event.key === 'ArrowDown') {
        changeDirectionSpace(DOWN);
    } else if(event.key === 'ArrowRight'){
        changeDirectionSpace(RIGHT);
    } else if(event.key === 'ArrowLeft'){
        changeDirectionSpace(LEFT);
    }else if(event.key === 'w'){
        moveUp();
    }else if(event.key === 's'){
        moveDown();
    }else if(event.key === 'a'){
        moveLeft();
    }else if(event.key === 'd'){
        moveRight();
    }else if(event.key === " ") {
        fireLaser();
    }else{
        if(event.key === 'j'){
            if(pressJ)
                flyIntoPlanet();
        }

    }
}

//função de subir
function moveUp() {
    let topPosition = parseInt(getComputedStyle(yourShip).getPropertyValue('top'));
    if(topPosition < 60) {
        return
    } else {
        let position = topPosition;
        position -= 20;
        yourShip.style.top = `${position}px`;
    }
}

//função de descer
function moveDown() {
    let topPosition = parseInt(getComputedStyle(yourShip).getPropertyValue('top'));
    let sizeArea = parseInt(playArea.getBoundingClientRect().height) - 20;
    if(topPosition > sizeArea){
        return
    } else {
        let position = topPosition;
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
    let leftPosition = parseInt(getComputedStyle(yourShip).getPropertyValue('left'));
    let sizeArea = parseInt(playArea.getBoundingClientRect().width) - 20;
    if(leftPosition > sizeArea){
        return
    } else {
        let position = leftPosition;
        position += 20;
        yourShip.style.left = `${position}px`;
    }
}


// Altera direção de viagem no espaço
function changeDirectionSpace(index){
    playArea.classList.remove(direction[indexDir]);
    indexDir = index;
    playArea.classList.add(direction[indexDir]);
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
            }
        })

        if(missions.step1.running){
            (yPosition > sizeAreaY+300) ? laser.remove() : laser.style.top = `${yPosition - 8}px`;
        }else{
            (xPosition > sizeAreaX+300) ? laser.remove() : laser.style.left = `${xPosition + 8}px`;
        }

        abatidos.innerText = alienDead;

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
        newAlien.style.left = `${Math.floor(Math.random() * (sizeAreaX - 150)) + 150}px`;
        newAlien.style.top = `40px`;
    }else{
        newAlien.style.left = `${sizeAreaX}px`;
        newAlien.style.top = `${Math.floor(Math.random() * (sizeAreaY - 100)) + 100}px`;
    }
    playArea.appendChild(newAlien);
    moveAlien(newAlien);
}

//função para movimentar os inimigos
function moveAlien(alien) {
    let moveAlienInterval = setInterval(() => {
        if(missions.step1.running){
            let yPosition = parseInt(window.getComputedStyle(alien).getPropertyValue('top'));
            let sizeAreaY = parseInt(playArea.getBoundingClientRect().height) - 20;
            if(yPosition >= sizeAreaY) {
                if(Array.from(alien.classList).includes('dead-alien')) {
                    alien.remove();
                }// else {
                 //   gameOver();
                //}
            } else {
                alien.style.top = `${yPosition + 4}px`;
            }
        }else{
            let xPosition = parseInt(window.getComputedStyle(alien).getPropertyValue('left'));
           // let sizeAreaX = parseInt(playArea.getBoundingClientRect().width) - 20;
            if(xPosition <= 140) {
                if(Array.from(alien.classList).includes('dead-alien')) {
                    alien.remove();
                }// else {
                 //   gameOver();
                //}
            } else {
                alien.style.left = `${xPosition - 4}px`;
            }
        }

    }, 30);
}

//função para  colisão
function checkLaserCollision(laser, alien) {
        let laserTop = parseInt(laser.style.top);
        let laserLeft = parseInt(laser.style.left);
        let laserBottom = laserTop - 20;
        let alienTop = parseInt(alien.style.top);
        let alienLeft = parseInt(alien.style.left);
        let alienBottom = alienTop - 30;
        let alienRight = alienLeft + 150;
        if(laserLeft + 40 >= alienLeft && laserLeft <= alienRight) {
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
    if(pressJ === false){
        clearInterval(loadMusic);
        introMusic.pause();
        musicMission.play();

        startButton.style.display = 'none';
        instructionsText.style.display = 'none';
        description.style.display = 'none';
        window.addEventListener('keydown', flyShip);
        playArea.classList.remove('back-default');
        playArea.classList.add('back-animate');
        playArea.classList.add(direction[indexDir]);
        yourShip.style.left = "40%";
        yourShip.style.top = "75%";
        
        runMission();

        alienInterval = setInterval(() => {
            createAliens();
        }, 2000);
    }

}

//função de game over
function gameOver() {
    finishGame();

    setTimeout(() => {
        alert('game over!');
        yourShip.style.top = "250px";
        startButton.style.display = "block";
        instructionsText.style.display = "block";
        description.style.display = "block";
        playArea.classList.remove('back-animate');
        playArea.classList.add('back-default');
    });
}

// Função que processa a primeira missão do jogo
function firstMission(){
        yearValue = document.getElementById('year-light');
        abatidos = document.getElementById('abatidos');
        missionNum = document.getElementById('the-mission');
        if(missions.step1.year < 10){      
            missions.step1.running = true;

            if(indexDir === 0){
                missions.step1.year++;
                yearValue.style.color = 'yellow';
            }
            else{
                missions.step1.year--;
                yearValue.style.color = 'red';
            }
        }else{
            if(alienDead >= 5){
                musicMission.pause();
                musicFinish.play();

                yearValue.style.color = 'lightblue';
                years = 0;

                insertGoalObject('img/planeta-1.png');

                finishGame();

                setTimeout(() => {
                    alert('Você chegou no Planeta Axius!\n Viage até o planeta pressionando J');
                    pressJ = true;
                    window.addEventListener('keydown', flyShip);
                });
                
                missions.step1.running = false;
                years = 0;
                alienDead = 0;
                indexDir = 2;
                missions.mission++;
                instructionsText.innerHTML = `${missions.step2.msg}`;
            }
        }

        years = missions.step1.year;
        yearValue.innerText = years;
}

// Função que processa a segunda missão do jogo
function secondMission() {
    kmValue = document.getElementById('km-value');
    abatidos = document.getElementById('abatidos');
    missionNum = document.getElementById('the-mission');
        if(missions.step2.km < 20){      
            missions.step2.running = true;

            if(indexDir === 2){
                missions.step2.km++;
                kmValue.style.color = 'yellow';
            }
            else{
                missions.step2.km--;
                kmValue.style.color = 'red';
            }
        }else{
            if(alienDead >= 5){
                kmValue.style.color = 'lightblue';
                kmValue.innerText = distancy + "km";
                distancy = 0;

                finishGame();

                setTimeout(() => {
                    alert('Você encontrou o objeto valioso em Axius!');
                    yourShip.style.top = "250px";
                    startButton.style.display = "block";
                    instructionsText.style.display = "block";
                    description.style.display = "block";
                    playArea.classList.remove('back-animate');
                    playArea.classList.add('back-default');
                });
                
                missions.step2.running = false;
                distancy = 0;
                alienDead = 0;
                missions.mission++;
                instructionsText.innerHTML = `${missions.step2.msg}`;
            }
        }

        distancy = missions.step2.km;
        kmValue.innerText = distancy + "km";
}

// Função que escolhe qual missão  executar em order 
function runMission(){
    switch(missions.mission){
        case 1: placar.innerHTML = "<h2> Abatidos: <label id='abatidos'>" + alienDead + "</label> | "
                        + "Anos-Luz: <label id='year-light'>" + years + "</label>"
                        +" | Missão: <label id='the-mission'>" + missions.mission + "</label></h2>";
                initMission = setInterval(firstMission, 500);
                break;
        case 2: placar.innerHTML = "<h2> Abatidos: <label id='abatidos'>" + alienDead + "</label> | "
                        + "Distância: <label id='km-value'>" + distancy + "km</label>"
                        +" | Missão: <label id='the-mission'>" + missions.mission + "</label></h2>";
                initMission = setInterval(secondMission, 500);
                break;
    }
}
 
// Função para finalizar jogo tanto no gameover quanto nas missões
function finishGame(){ 
    window.removeEventListener('keydown', flyShip); 
    clearInterval(initMission);
    initMission = null;
    clearInterval(alienInterval);
    let aliens = document.querySelectorAll('.alien');
    aliens.forEach((alien) => alien.remove());
    let lasers = document.querySelectorAll('.laser');
    lasers.forEach((laser) => laser.remove());
    playArea.classList.remove(direction[indexDir]);
    
    
}

// Inserir objeto de propósito da missão seria criar um planeta Axius para a missão 1
// Ou criar o objeto valioso da missão 2
function insertGoalObject(path){
    imgObj = document.createElement('img');
    imgObj.src = path;
    imgObj.style.top = '70px';
    imgObj.style.left = '200px';
    imgObj.classList.add('img-planet-axius');
    playArea.appendChild(imgObj);
}

// Faz o planeta Axius dar zoom se pressionar J, como se tivesse voando
// até lá
function flyIntoPlanet(){
    let shipTop = parseInt(yourShip.style.top);
    let shipBottom = shipTop + 80;
    let shipLeft = parseInt(yourShip.style.left);
    let shipRight = shipLeft + 150;
    let planetTop = parseInt(imgObj.style.top);
    let planetBottom = planetTop + 500;
    let planetLeft = parseInt(imgObj.style.left);
    let planetRight = planetLeft + 500;

    if(shipTop >= planetTop && shipBottom <= planetBottom &&
        shipLeft >= planetLeft && shipRight <= planetRight){

        let traveling = setInterval(() => {
            let shipWidth = parseInt(yourShip.style.width);
            let shipHeight = parseInt(yourShip.style.height);

            if(shipWidth >= 0 || shipHeight >= 0){
                shipWidth--;
                shipHeight--;
                yourShip.style.width = `${shipWidth}px`;
                yourShip.style.height = `${shipHeight}px`;
            }else{
                playArea.removeChild(imgObj);
                yourShip.style.top = "250px";
                startButton.style.display = "block";
                instructionsText.style.display = "block";
                description.style.display = "block";
                playArea.classList.remove('back-animate');
                playArea.classList.add('back-default');
                pressJ = false;
                clearInterval(traveling);
                musicFinish.pause();
                introMusic.play();
            }

        }, 125);

        imgObj.classList.add('img-planet-effect');

    }else{
        alert('Você não está na coordenada do planeta Axius!\nVoe até o planeta com W, A, S ou D');
    }
}


let initMusic = () => {
    introMusic = document.getElementById('intro-music-menu');
    musicMission = document.getElementById('music-mission');
    musicFinish = document.getElementById('music-mission-finish');

    introMusic.addEventListener("ended", function(){ 
        introMusic.currentTime = 0; 
        introMusic.play(); 
    }, false);

    introMusic.play();
}

let loadMusic = setInterval(initMusic, 20);