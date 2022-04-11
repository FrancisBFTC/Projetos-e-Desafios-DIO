const yourShip         = document.querySelector('.player-shooter');
const playArea         = document.querySelector('#main-play-area');
const instructionsText = document.querySelector('.game-instructions');
const description      = document.querySelector('.description-mission');
const startButton      = document.querySelector('.start-button');
const placar           = document.getElementById('placar');
const panelButtons     = document.querySelector('.panel');

const UP    = 0;
const DOWN  = 1;
const RIGHT = 2;
const LEFT  = 3;

var kmValue, abatidos, missionNum, yearValue, imgObj, infoStatusGame, attemptsNum, secondsNum;
var introMusic, musicMission, musicFinish, soundLaser, soundExpShip, soundExpAlien, soundAlienPassing;
var soundOvni, soundMonsters, soundMonstersAtt, soundAlarmShip;


var lifeLevel = "";

let alienInterval, initMission;

let pressJ    = false;
let successMission4 = false;
let failTime = false;
let failPass = false;
let failButton = false;
let failAttempt = false;
let valueText;


let aliensPassed = 0;
let alienDead = 0;
let years     = 0;
let distancy  = 0;
let indexDir  = 0;

let seconds = 60;
let attempts = 3;


let life = 100;
let speedAliens = 25;
let gameOverString;
let personDirection = "right";
let directionUp = "";
let counterRun = 0;
let canRunCounter = 0;

let orderColor = 0;
let resultColor = 0;

const mathOperations = ['+', '-'];
let arrayResult = [];
let arrayChars = "ABCDEFGHIJKLMNOP";


const arrayColors = ['#0318E3', '#69E301', '#01B9D0', '#E46303', '#CD02E3', '#5801E3'];

const imgColors = [
    'computer-panel/blue-button.png',
    'computer-panel/green-button.png',
    'computer-panel/lightblue-button.png',
    'computer-panel/orange-button.png',
    'computer-panel/pink-button.png',
    'computer-panel/purple-button.png'
];

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

const horrorAliens = [
    'img/alien0.png', 
    'img/alien1.png', 
    'img/alien2.png'
];


let missions = {
    step1 : {
        msg: '1ª missão: Elimine os 50 alienígenas até 100 Anos-luz ' 
          + 'ao norte do espaço e encontre o planeta Axius!',
        running: false,
        year: 0
    },
    step2 : {
        msg: '2ª missão: Elimine os 100 alienígenas voando até 200km e ' 
          + 'encontre a nave mãe de Axius!',
        running: false,
        km: 0
    },
    step3 : {
        msg: '3ª missão: Extermine os 150 aliens monstruosos para liberar entrada ' 
          + 'na nave mãe!',
        running: false
    },

    step4 : {
        msg: '4ª missão: Descubra a senha de desativação da nave-mãe através de um enigma que foi '
        + 'criado pelos aliens e impeça que a nave decole em direção ao planeta terra!',
        running: false
    },

    mission: 1
}; 

instructionsText.innerHTML = `${missions.step1.msg}`;
description.style.display = 'none';


//movimento e tiro da nave
function flyShip(event) {
    if(event.key === 'ArrowUp') {
        if(missions.step1.running) 
            changeDirectionSpace(UP);
        else if(missions.mission >= 3){
            yourShip.src = 'img/shooter/player_' + personDirection + '_up.png';
            directionUp = "up";
        }
               
    } else if(event.key === 'ArrowDown') {
        if(missions.step1.running) 
            changeDirectionSpace(DOWN);
    } else if(event.key === 'ArrowRight'){
        if(missions.step2.running) 
            changeDirectionSpace(RIGHT);
         else if(missions.mission >= 3){
            personDirection = "right";
            yourShip.src = 'img/shooter/player_' + personDirection + '.png';
            directionUp = "";
        }
    } else if(event.key === 'ArrowLeft'){
        if(missions.step2.running) 
            changeDirectionSpace(LEFT);
        else if(missions.mission >= 3){
            personDirection = "left";
            yourShip.src = 'img/shooter/player_' + personDirection + '.png';
            directionUp = "";
        }
    }else if(event.key === 'w'){
            if(missions.mission < 3) 
                moveUp();
    }else if(event.key === 's'){
            if(missions.mission < 3) 
                moveDown();
    }else if(event.key === 'a'){
        moveLeft();
        walkPerson();
        directionUp = "";
    }else if(event.key === 'd'){
        moveRight();
        walkPerson();
        directionUp = "";
    }else if(event.key === " ") {
        fireLaser();
    }else if(event.key === 'j'){
            if(pressJ)
                if(missions.mission < 4)
                    flyIntoPlanet();
                else
                    walkToMotherShip();

    }else if(event.keyCode === 17){
        if(missions.mission >= 3){
            yourShip.src = 'img/shooter/player_' + personDirection + '_diag.png';
            directionUp = "diag";
        }
    }
}

// Reposiciona personagem quando ele para de correr
function repositionPerson(event){
    if(event.key === 'a' || event.key === 'd'){
        yourShip.src = 'img/shooter/player_' + personDirection + '.png';
        counterRun = 0;
    }
}

// Função para fazer correr o personagem
function walkPerson(){
    if(missions.mission >= 3){
        canRunCounter++;
        if(canRunCounter === 3){
            if(personDirection === 'right'){
                counterRun--;
                counterRun = (counterRun < 1) ? 7 : counterRun;
            } else{
                counterRun++;
                counterRun = (counterRun > 7) ? 1 : counterRun;
            }
            yourShip.src = 'img/shooter/player_run_' + personDirection + counterRun + '.png';
            canRunCounter = 0;
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

//funcionalidade de tiro que cria o laser e o movimenta
function fireLaser() {
    soundLaser.play();
    let laser = createLaserElement();
    playArea.appendChild(laser);
    moveLaser(laser, personDirection, directionUp);
}

// Função que gera novos lasers
function createLaserElement() {
    let xPosition = parseInt(getComputedStyle(yourShip).getPropertyValue('left'));
    let yPosition = parseInt(getComputedStyle(yourShip).getPropertyValue('top'));
    let newLaser = document.createElement('img');
    newLaser.src = 'img/shoot.png';
    newLaser.classList.add('laser');
    if(missions.mission >= 3){
        readjustmentLaser(newLaser, xPosition, yPosition);
    }else{
        newLaser.style.left = `${xPosition}px`;
        newLaser.style.top = `${yPosition - 10}px`;
    }
    return newLaser;
}

// Reajuste de posição de laser para várias posições do personagem
function readjustmentLaser(newLaser, xPosition, yPosition){
    if(directionUp === ''){
       newLaser.style.left = (personDirection === 'left') ? `${xPosition - 30}px` : `${xPosition + 150}px`;
       newLaser.style.top = `${yPosition - 20}px`;
    }else if(directionUp === 'up'){
       newLaser.style.left = (personDirection === 'left') ? `${xPosition + 100}px` : `${xPosition}px`;
       newLaser.style.top = `${yPosition - 30}px`;
    }else{
       newLaser.style.left = (personDirection === 'left') ? `${xPosition - 20}px` : `${xPosition + 90}px`;
       newLaser.style.top = `${yPosition - 40}px`;
    }
}

// Função para mover o laser em diversas situações do jogo
function moveLaser(laser, personDir, dirUp) {
    let laserInterval = setInterval(() => {
        let xPosition = parseInt(laser.style.left);
        let yPosition = parseInt(laser.style.top);
        let aliens = document.querySelectorAll('.alien');
        let sizeAreaX = parseInt(playArea.getBoundingClientRect().width) - 20;
        let sizeAreaY = parseInt(playArea.getBoundingClientRect().height) - 20;

        aliens.forEach((alien) => { //comparando se cada alien foi atingido, se sim, troca o src da imagem
            if(checkLaserCollision(laser, alien)) {

                if(missions.mission >= 3){
                     alien.src = 'img/alienexplosion/explosion-alien.png';
                     let alienX = parseInt(alien.style.left);
                     let alienY = parseInt(alien.style.top);
                     alienExplosion(alienX, alienY);
                }else{
                   alien.src = 'img/explosion.png';
                   soundExpShip.play();
                }

                alien.classList.remove('alien');
                alien.classList.add('dead-alien');
                alienDead++; 
                removeLaser(laser, laserInterval);
            }
        })

        if(missions.step1.running){
            (yPosition < 60) ? removeLaser(laser, laserInterval) : laser.style.top = `${yPosition - 8}px`;
        }else{
            if(missions.mission >= 3){
                if(personDir === "right" && dirUp === ""){
                    (xPosition > sizeAreaX+140) ? removeLaser(laser, laserInterval) : laser.style.left = `${xPosition + 8}px`;
                }else if(personDir === "left" && dirUp === ""){
                    (xPosition < 140) ? removeLaser(laser, laserInterval) : laser.style.left = `${xPosition - 8}px`;
                }else if((personDir === "right" || personDir === "left") && dirUp === "up"){
                     (yPosition < 60) ? removeLaser(laser, laserInterval) : laser.style.top = `${yPosition - 8}px`;
                }else if(personDir === "right" && dirUp === "diag"){
                     if(yPosition < 60 && xPosition > sizeAreaX+140){
                        removeLaser(laser, laserInterval);
                     }else{
                        laser.style.top = `${yPosition - 8}px`;
                        laser.style.left = `${xPosition + 8}px`;
                     } 
                }else if(personDir === "left" && dirUp === "diag"){
                     if(yPosition < 60 && xPosition < 140){
                        removeLaser(laser, laserInterval);
                     }else{
                        laser.style.top = `${yPosition - 8}px`;
                        laser.style.left = `${xPosition - 8}px`;
                     } 
                }
            }else{
                (xPosition > sizeAreaX+140) ? removeLaser(laser, laserInterval) : laser.style.left = `${xPosition + 8}px`;
            }
        }

        abatidos.innerText = alienDead;

    }, 5);
}

// Função para remover Laser e limpar intervalos
function removeLaser(laser, laserInterval){
    laser.remove();
    clearInterval(laserInterval);
    laserInterval = null;
}


// Executa a explosão dos alienígenas na missão 3
function alienExplosion(alienX,alienY) {

        soundExpAlien.play();
        $("#main-play-area").append("<div id='alien-explosion' class='explosion-alien-anim'></div");
        $("#alien-explosion").css("top",alienY);
        $("#alien-explosion").css("left",alienX);
        
        var explosionTime=window.setInterval(explosionReset, 500);
        
        function explosionReset() {
            $("#alien-explosion").remove();
            window.clearInterval(explosionTime);
            explosionTime=null;
        }

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
    let indexImg = 0;

    if(missions.step1.running){
        soundOvni.play();
        newAlien.style.left = `${Math.floor(Math.random() * (sizeAreaX - 150)) + 150}px`;
        newAlien.style.top = `40px`;
    }else if(missions.step2.running){
        soundOvni.play();
        newAlien.style.left = `${sizeAreaX}px`;
        newAlien.style.top = `${Math.floor(Math.random() * (sizeAreaY - 100)) + 100}px`;
        soundOvni.play();
    }else if(missions.step3.running){
        soundMonsters.play();
        indexImg = Math.floor(Math.random() * horrorAliens.length);
        let positionAlien = parseInt(window.getComputedStyle(imgObj).getPropertyValue('left'));
        newAlien.src = horrorAliens[indexImg];
        newAlien.style.left = `${positionAlien}px`;
        if(indexImg === 1){
            newAlien.style.top = `${parseInt(getComputedStyle(yourShip).getPropertyValue('top')) - 120}px`;
        }else{
            newAlien.style.top = `${parseInt(getComputedStyle(yourShip).getPropertyValue('top'))}px`;
        }
    }

    playArea.appendChild(newAlien);
    moveAlien(newAlien, indexImg);
}

// Função para excluir alien morto
function excludeDeadAlien(alien, moveAlienInterval){
    if(Array.from(alien.classList).includes('dead-alien')) {
        alien.remove();
        clearInterval(moveAlienInterval);
        moveAlienInterval = null;
    } else {
        if(missions.mission < 3){
            soundAlienPassing.play();
            aliensPassed++;
            alien.remove();
            clearInterval(moveAlienInterval);
            moveAlienInterval = null;
            if(aliensPassed === 10)
                gameOver('' + aliensPassed + ' naves passaram a fronteira...\nJá é o suficiente para aniquilar a humanidade!\nMissão fracassada!');
        }
    }
}

//função para movimentar os inimigos
function moveAlien(alien, indexImg) {
    let moveAlienInterval = setInterval(() => {
        if(missions.step1.running){
            let yPosition = parseInt(window.getComputedStyle(alien).getPropertyValue('top'));
            let sizeAreaY = parseInt(playArea.getBoundingClientRect().height) - 20;
            
            if(yPosition >= sizeAreaY) 
                excludeDeadAlien(alien, moveAlienInterval);
            else 
                alien.style.top = `${yPosition + 4}px`;
            
        }else{
            if(missions.mission !== 3){
                let xPosition = parseInt(window.getComputedStyle(alien).getPropertyValue('left'));

                if(xPosition <= 140)
                    excludeDeadAlien(alien, moveAlienInterval);
                else 
                    alien.style.left = `${xPosition - 4}px`;
                
            }else{
                let alienX = parseInt(window.getComputedStyle(alien).getPropertyValue('left'));
                let alienY = parseInt(window.getComputedStyle(alien).getPropertyValue('top'));
                let heroX = parseInt(window.getComputedStyle(yourShip).getPropertyValue('left'));
                let heroY = parseInt(window.getComputedStyle(yourShip).getPropertyValue('top'));

                excludeDeadAlien(alien, moveAlienInterval);

                if(checkAlienAttach(heroX, heroY, alienX, alienY, alien)){
                    life--;
                    lifeLevel.innerHTML = life;
                    soundMonstersAtt.play();
                }

                if(indexImg === 2){ // Condicional do alien que salta por cima
                    
                    if(alienX <= heroX + 50){
                         if(alienY <= heroY){
                            alien.style.top = `${alienY + 4}px`;
                         }else{
                            alien.src = 'img/alien2.png';
                            alien.style.left = `${heroX + 200}px`;
                         }
                    }else{
                        alien.src = 'img/alien4.png';
                        alien.style.left = `${alienX - 4}px`;
                        alien.style.top = `${alienY - 2}px`;
                    }
                }else{  // Condicional do alien redondo
                    if(alienX <= heroX){
                        if(alienY <= heroY){
                            alien.style.top = `${alienY + 4}px`;
                        }else{
                            alien.style.top = `${alienY - 100}px`;
                        }
                    }else{
                        alien.style.left = `${alienX - 4}px`;
                    }
                }

            }
        }

        if(life <= 0){
            life = 0;
            clearInterval(moveAlienInterval);
            moveAlienInterval = null;
        }

    }, speedAliens);

    if(life <= 0)
        gameOver(' Você foi morto pelos aliens!');
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

//função para verifica ataque de aliens
function checkAlienAttach(heroX, heroY, alienX, alienY, alien) {

    if(!Array.from(alien.classList).includes('dead-alien')){
        if(alienY >= heroY && alienX < heroX + 150){
            return true;
        }
    }

    return false;
        
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

        description.style.display = 'none';
        yourShip.style.left = "40%";
        yourShip.style.top = "75%";

        life = 100;

        runMission();

        if(missions.step4.running){
            runLastMission();
        }else{
            window.addEventListener('keydown', flyShip);
            abatidos = document.getElementById('abatidos');

             if(missions.step1.running || missions.step2.running){
                playArea.classList.add(direction[indexDir]);
                missionNum = document.getElementById('the-mission');

             }else if(missions.step3.running){
                        insertGoalObject('img/mother-ship.png', 'img-mother-ship');
                   }


            alienInterval = setInterval(() => {
                createAliens();
            }, 1000);
        }
        
    }

}

//função de game over
function gameOver(gameOverString) {
    finishGame();

    setTimeout(() => {
        infoStatusGame.innerHTML = '<h2 style="color: red;">Game Over</h2>'
                + '<p>' + gameOverString + '</p>'
                +'<button id="buttonOk" style="color: white; background-color:black; border: 1px solid white;">OK</button>';
        infoStatusGame.style.display = 'block';

        document.getElementById('buttonOk').addEventListener('click', () => {
            document.getElementById('buttonOk').removeEventListener('click', this);
            infoStatusGame.innerHTML = '';
            infoStatusGame.style.display = 'none';
            yourShip.style.top = "250px";
            description.style.display = "block";
            playArea.classList.remove('back-animate');
            playArea.classList.add('back-default');
            distancy = 0;
            alienDead = 0;
            aliensPassed = 0;
            missions.step1.year = 0;
            missions.step2.km = 0;
        });
        
    });
}

// Função que processa a primeira missão do jogo
function firstMission(){
    
        if(missions.step1.year < 100){     

            if(indexDir === 0){
                missions.step1.year++;
                yearValue.style.color = 'yellow';
            }
            else{
                missions.step1.year--;
                yearValue.style.color = 'red';
            }
        }else{
            if(alienDead >= 50){
                musicMission.pause();
                musicFinish.play();

                yearValue.style.color = 'lightblue';
                years = 0;

                insertGoalObject('img/planeta-1.png', 'img-planet-axius');

                finishGame();

                setTimeout(() => {
                   infoStatusGame.innerHTML = '<h2 style="color: green;">Sucesso</h2>'
                    + '<p>Você encontrou o Planeta Axius! Posicione-se no planeta e viaje pela tecla J.</p>'
                    +'<button id="buttonOk" style="color: white; background-color:black; border: 1px solid white;">OK</button>';
                    infoStatusGame.style.display = 'block';

                    document.getElementById('buttonOk').addEventListener('click', () => {
                        window.addEventListener('keydown', flyShip);
                        document.getElementById('buttonOk').removeEventListener('click', this);
                        infoStatusGame.innerHTML = '';
                        infoStatusGame.style.display = 'none';
                        pressJ = true;
                        missions.step1.running = false;
                        years = 0;
                        alienDead = 0;
                        indexDir = 2;
                        missions.mission++;
                        instructionsText.innerHTML = `${missions.step2.msg}`;
                    });
                    
                });
                
            }
        }

        years = missions.step1.year;
        yearValue.innerText = years;
}

// Função que processa a segunda missão do jogo
function secondMission() {
   
        if(missions.step2.km < 200){     

            if(indexDir === 2){
                missions.step2.km++;
                kmValue.style.color = 'yellow';
            }
            else{
                missions.step2.km--;
                kmValue.style.color = 'red';
            }
        }else{
            if(alienDead >= 100){
                musicMission.pause();
                musicFinish.play();

                kmValue.style.color = 'lightblue';
                kmValue.innerText = distancy + "km";
                distancy = 0;

                insertGoalObject('img/mother-ship.png', 'img-mother-ship');


                finishGame();

                setTimeout(() => {
                    infoStatusGame.innerHTML = '<h2 style="color: green;">Sucesso</h2>'
                    + '<p>Você encontrou a nave mãe em Axius! Coisas te esperam...</p>'
                    +'<button id="buttonOk" style="color: white; background-color:black; border: 1px solid white;">OK</button>';
                    infoStatusGame.style.display = 'block';


                   document.getElementById('buttonOk').addEventListener('click', () => {
                        window.addEventListener('keydown', flyShip);
                        document.getElementById('buttonOk').removeEventListener('click', this);
                        infoStatusGame.innerHTML = '';
                        infoStatusGame.style.display = 'none';
                        yourShip.style.top = "250px";
                        description.style.display = "block";
                        playArea.classList.remove('back-animate2');
                        playArea.classList.add('back-default');
                        playArea.removeChild(imgObj);
                        musicFinish.pause();
                        introMusic.play();
                        missions.step2.running = false;
                        distancy = 0;
                        alienDead = 0;
                        missions.mission++;
                        instructionsText.innerHTML = `${missions.step3.msg}`;
                    });

                    
                });

            }
        }

        distancy = missions.step2.km;
        kmValue.innerText = distancy + "km";
}

function thirdMission(){
    if(alienDead >= 150){
        musicMission.pause();
        musicFinish.play();

        finishGame();
         infoStatusGame.innerHTML = '<h2 style="color: green;">Sucesso</h2>'
                    + '<p>A entrada está liberada! Vá até a nave-mãe e pressione J...</p>'
                    +'<button id="buttonOk" style="color: white; background-color:black; border: 1px solid white;">OK</button>';
                    infoStatusGame.style.display = 'block';

                    document.getElementById('buttonOk').addEventListener('click', () => {
                        document.getElementById('buttonOk').removeEventListener('click', this);
                        infoStatusGame.innerHTML = '';
                        infoStatusGame.style.display = 'none';
                        pressJ = true;
                        window.addEventListener('keydown', flyShip);
                        window.addEventListener('keyup', repositionPerson);
                    });

        
        
        distancy = 0;
        alienDead = 0;
        missions.mission++;
        missions.step3.running = false;
        instructionsText.innerHTML = `${missions.step4.msg}`;

    }
}

function fourthMission(){
    if(!successMission4){
            if(seconds === 0 || attempts === 0){
                soundAlarmShip.pause();
                musicFinish.play();


                setTimeout(() => {
                    failTime = seconds === 0;
                    failAttempt = attempts === 0;

                    let msgFail = "";
                    let msgTime = "";
                    if(failTime){
                        msgTime = "Seu tempo acabou!";
                    }else{ 

                        if(failAttempt){

                            if(failButton && failPass){
                                msgTime = "Botão e Senha Incorretos!";
                            }else if(failButton && !failPass){
                                msgTime = "Botão Incorreto, no entanto, a sua senha está correta!";
                            }else{
                                if(failButton)
                                    msgTime = "Botão Incorreto!";
                                else
                                    msgTime = "Senha Incorreta!";
                            }
                            
                            let password = "";
                            for(let i = 0; i < arrayResult.length; i++)
                                password += arrayChars[arrayResult[i] + 5];

                            msgTime += " A senha correta é '<label style='color:green;'>"+password+"</label>' e você digitou '<label style='color:green;'>"+valueText+"</label>'.";
                        }
                    }
                        
                        infoStatusGame.innerHTML = '<h2 style="color: red;">Game Over!</h2>'
                        + '<p>'+msgTime+' Você falhou em sua missão, agora a nave-mãe está a caminho da terra!</p>'
                        +'<button id="buttonOk" style="color: white; background-color:black; border: 1px solid white;">OK</button>';
                        infoStatusGame.style.display = 'block';
                        panelButtons.style.display = 'none';

                        clearInterval(initMission);

                       document.getElementById('buttonOk').addEventListener('click', () => {
                            document.getElementById('buttonOk').removeEventListener('click', this);
                            infoStatusGame.innerHTML = '';
                            infoStatusGame.style.display = 'none';
                            description.style.display = "block";
                            playArea.classList.remove('front-panel');
                            playArea.classList.add('back-default');
                            musicFinish.pause();
                            introMusic.play();
                            missions.step4.running = false;
                            attempts = 3;
                            seconds = 60;
                            failPass = false;
                            failButton = false;
                            failTime = false;
                            failAttempt = false;
                            valueText = "";
                        });
                });

        }else{
            seconds--;
            secondsNum.innerHTML = seconds;
        }
    }else{
            soundAlarmShip.pause();
            musicFinish.play();

            setTimeout(() => {
                
                let password = "";
                for(let i = 0; i < arrayResult.length; i++)
                    password += arrayChars[arrayResult[i] + 5];
                

                infoStatusGame.innerHTML = '<h2 style="color: green;">Sucesso!</h2>'
                    + '<p>Nave desbloqueada... Interrompendo lançamento automático!\n<label style="color: yellow;">Parabéns novo herói!</label> A senha é <label style="color:green;">'+password+'</label>. Você resolveu o enigma a tempo e o seu planeta está a salvo!</p>'
                    +'<button id="buttonOk" style="color: white; background-color:black; border: 1px solid white;">OK</button>';
                    infoStatusGame.style.display = 'block';

                    clearInterval(initMission);

                    document.getElementById('buttonOk').addEventListener('click', () => {
                        document.getElementById('buttonOk').removeEventListener('click', this);
                       // infoStatusGame.innerHTML = '';
                       // infoStatusGame.style.display = 'none';
                       // description.style.display = "block";
                       // playArea.classList.remove('front-panel');
                       // playArea.classList.add('back-default');
                       // musicFinish.pause();
                       // introMusic.play();
                       // missions.step4.running = false;
                       // attempts = 3;
                       // seconds = 60;
                       // successMission4 = false;
                        alert('Obrigado por chegar até aqui, se gostou do jogo deixe uma estrelinha no repositório github, isto vai me ajudar!\n'
                              + 'Em breve novas missões serão implementadas, aguarde.');
                        location.reload();
                    });
            });

    }
}

// Função para executar 4ª missão
function runLastMission(){
    infoStatusGame.innerHTML = '<h2 style="color: yellow;">Regras do enigma</h2>'
                    + '<div class="list">'
                    + '<ol>'
                    + '<li>Memorize 8 cálculos que vão aparecer na tela </li>'
                    + '<li>Memorize a ordem da piscagem entre os 6 botões coloridos </li>'
                    + '<li>Cada resultado de um cálculo será um número de uma letra na tabela de caracteres </li>'
                    + '<li>Forme a sequência de 8 caracteres e insira a senha pra desativação da nave </li>'
                    + '<li>Valide a senha com o botão colorido correto após for especificado sua ordem </li>'
                    + '</ol>'
                    + '<p>Você tem no máximo 3 tentativas de inserir a senha num tempo de 60 segundos após os ' 
                    + 'os cálculos aparecer na tela e a piscagem dos botões acabar. Se estas regras não forem '
                    + 'cumpridas, a missão será fracassada e a nave irá se explodir no planeta terra. </p>'
                    + '<p>Até aqui você teve uma boa demonstração de força, agora supere os alienígenas na inteligência.'
                    + '<br>Boa Sorte soldado!</p>'
                    + '</div>'
                    +'<button id="buttonOk" style="color: white; background-color:black; border: 1px solid white;">OK</button>';
                    infoStatusGame.style.display = 'block';

    document.getElementById('buttonOk').addEventListener('click', () => {
        document.getElementById('buttonOk').removeEventListener('click', this);

        infoStatusGame.innerHTML = '<input type="password" value="" placeholder="digite a senha aqui" class="input-enigm" style="display: none;">'
                                 + '<div class="enigm-div" style="display:block;">'
                                    + '<label class="num1"></label> ' 
                                    + '<label class="operation"></label> '
                                    + '<label class="num2"></label> = '
                                 + '</div>'
                                 + '<div class="table-chars" style="display:none;">'
                                 + '<table border="2">'
                                    + '<tr><th colspan="17" style="text-align: center;">Tabela de Caracteres</th></tr>'
                                    + '<tr><th>Nº</th> <td>-5</td> <td>-4</td> <td>-3</td> <td>-2</td> <td>-1</td> <td>0</td> <td>1</td> <td>2</td> <td>3</td> <td>4</td> <td>5</td> <td>6</td> <td>7</td> <td>8</td> <td>9</td> <td>10</td></tr>'
                                    + '<tr><th>Chars</th> <td>A</td> <td>B</td> <td>C</td> <td>D</td> <td>E</td> <td>F</td> <td>G</td> <td>H</td> <td>I</td> <td>J</td> <td>K</td> <td>L</td> <td>M</td> <td>N</td> <td>O</td> <td>P</td></tr>'
                                 + '</table>'
                                 + '</div>'
                                 + '<div class="color-square" style="display: none;">'

                                 + '</div>'; 

        let num1 = document.querySelector('.num1');
        let num2 = document.querySelector('.num2');
        let operation = document.querySelector('.operation');
        let inputEnigm = document.querySelector('.input-enigm');
        let enigmDiv = document.querySelector('.enigm-div');
        let tableChars = document.querySelector('.table-chars');
        let colorSquare = document.querySelector('.color-square');

        let countChangeNum = 0;
        arrayResult = [];

        panelButtons.style.display = 'none';

        let changeNumber = setInterval(() => {
            if(countChangeNum < 8){
                let numRand1 = parseInt(Math.floor(Math.random() * 6));
                let numRand2 = parseInt(Math.floor(Math.random() * 6));
                let op = mathOperations[parseInt(Math.floor(Math.random() * mathOperations.length))];

                num1.innerHTML = numRand1;
                num2.innerHTML = numRand2;
                operation.innerHTML = op;

                if(op === '+')
                    arrayResult.push(numRand1 + numRand2);
                else
                    arrayResult.push(numRand1 - numRand2);


                countChangeNum++;
            }else{
                clearInterval(changeNumber);
                changeNumber = null;
                enigmDiv.style.display = 'none';
                colorSquare.style.display = 'block';

                orderColor = parseInt(Math.floor(Math.random() * 8));

                let counterSquare = 0;
                let counterColor = 0;
                let randomSquare = setInterval(() => {
                    if(counterSquare <= 16){
                        if(counterSquare % 2 === 0){
                            let randomColor = parseInt(Math.floor(Math.random() * arrayColors.length));
                            colorSquare.style.backgroundColor = arrayColors[randomColor];
                            if(counterColor === orderColor)
                                resultColor = randomColor; // Salva a cor do botão correto

                            counterColor++;
                        }else{
                            colorSquare.style.backgroundColor = 'black';
                        }
                    }else{
                        clearInterval(randomSquare);
                        randomSquare = null;
                        colorSquare.style.display = 'none';
                        inputEnigm.style.display = 'block';
                        tableChars.style.display = 'block';
                        panelButtons.style.display = 'block';
                        alert('Execute a senha pressionando o botão com a ' + (orderColor + 1) + 'ª cor apresentada na sequência!');
                        initMission = setInterval(fourthMission, 1000);
                        musicMission.pause();
                        soundAlarmShip.play();
                    }
                    counterSquare++;
                }, 500);

            }
        }, 1000);

    
    });


}

// Função que detecta botão colorido correto de acordo com a imagem e a cor
function detectImg(element){
    let pathImg = element.src;
    let correctButton = imgColors[resultColor];

    if(pathImg.includes(correctButton)){

        failButton = false;
        toValidPass();

    }else{
        attempts--;
        attemptsNum.innerHTML = attempts;
        failButton = attempts >= 0;
        if(failButton)
            alert('Botão incorreto! falta +' + attempts + ' tentativa(s).');

        toValidPass();
    }
}

function toValidPass(){
        let inputText = document.querySelector('.input-enigm');
        valueText = inputText.value;

        let i = 0;
        if(valueText !== '' && valueText.length === 8){
            for(i = 0; i < arrayResult.length; i++){
                if(valueText[i] !== arrayChars[arrayResult[i] + 5]){
                    failPass = true;
                    if(!failButton) attempts--;
                    attemptsNum.innerHTML = attempts;
                    alert('Senha incorreta! falta +' + attempts + ' tentativa(s).');
                    break;
                }
            }
        }else{
            failPass = true;
            if(!failButton) attempts--;
            alert('Senha incorreta! falta +' + attempts + ' tentativa(s).');
        }

        
        if(i === arrayResult.length){
            if(!failButton) successMission4 = true;
            failPass = false;
        }
}


// Função que escolhe qual missão  executar em order 
function runMission(){
    switch(missions.mission){
        case 1: placar.innerHTML = "<h2> Abatidos: <label id='abatidos'>" + alienDead + "</label> | "
                        + "Anos-Luz: <label id='year-light'>" + years + "</label>"
                        +" | Missão: <label id='the-mission'>" + missions.mission + "</label> | Vida: <label id='life'>" + life +"</label></h2>";
                yearValue = document.getElementById('year-light');
                initMission = setInterval(firstMission, 500);
                playArea.classList.remove('back-default');
                playArea.classList.add('back-animate');
                missions.step1.running = true;
                break;
        case 2: placar.innerHTML = "<h2> Abatidos: <label id='abatidos'>" + alienDead + "</label> | "
                        + "Distância: <label id='km-value'>" + distancy + "km</label>"
                        +" | Missão: <label id='the-mission'>" + missions.mission + "</label> | Vida: <label id='life'>" + life +"</label></h2>";
                kmValue = document.getElementById('km-value');
                initMission = setInterval(secondMission, 500);
                playArea.classList.remove('back-default');
                playArea.classList.add('back-animate2');
                missions.step2.running = true;
                break;
        case 3: placar.innerHTML = "<h2> Abatidos: <label id='abatidos'>" + alienDead + "</label>"
                        + " | Missão: <label id='the-mission'>" + missions.mission + "</label> | Vida: <label id='life'>" + life +"</label></h2>";
                lifeLevel = document.getElementById('life');
                initMission = setInterval(thirdMission, 500);
                playArea.classList.remove('back-default');
                playArea.classList.add('back-animate2');
                missions.step3.running = true;
                yourShip.src = 'img/shooter/player_' + personDirection + '.png';
                yourShip.style.width = '200px';
                yourShip.style.height = '200px';
                yourShip.style.top = '380px';
                window.addEventListener('keyup', repositionPerson);
                speedAliens = 20;
                break;
        case 4: placar.innerHTML = "<h2> Tentativas: <label id='attempts'>" + attempts + "</label>"
                        + " | Segundos: <label id='seconds'>" + seconds + "</label> | Missão: <label id='the-mission'>" + missions.mission +"</label></h2>";
                attemptsNum = document.getElementById('attempts');
                secondsNum = document.getElementById('seconds');
                playArea.classList.remove('back-default');
                playArea.classList.add('front-panel');
                missions.step4.running = true;
                yourShip.src = '';
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
    if(missions.mission >= 3)
        window.removeEventListener('keyup', repositionPerson);
}

// Inserir objeto do propósito da missão seria criar um planeta Axius para a missão 1
// Ou criar a nave mãe da missão 2
function insertGoalObject(path, classObj){
    imgObj = document.createElement('img');
    imgObj.src = path;
    if(classObj === 'img-planet-axius'){
        imgObj.style.top = '70px';
        imgObj.style.left = '200px';
    }
    imgObj.classList.add(classObj);
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


// Para verificar se a posição do personagem está próximo a nave-mãe
function walkToMotherShip(){
    let motherShipX = parseInt(getComputedStyle(imgObj).getPropertyValue('left'));
    let heroX = parseInt(getComputedStyle(yourShip).getPropertyValue('left'))

    if(heroX >= motherShipX){
        playArea.removeChild(imgObj);
        playArea.removeChild(yourShip);
        yourShip.style.top = "250px";
        description.style.display = "block";
        playArea.classList.remove('back-animate2');
        playArea.classList.add('back-default');
        pressJ = false;
        window.removeEventListener('keydown', flyShip);
        window.removeEventListener('keyup', repositionPerson);
        soundMonstersAtt.pause();
        soundMonsters.pause();
        musicFinish.pause();
        introMusic.play();     
    }else{
        alert('Você não está próximo a nave!\nCaminhe até a nave digitando D');
    }
}

// Esconde as informações iniciais do jogo
let hideInfoGame = (element) => {
    element.style.display = 'none';
    description.style.display = 'block';
    infoStatusGame = element;
}

let initMusic = () => {
    introMusic = document.getElementById('intro-music-menu');
    musicMission = document.getElementById('music-mission');
    musicFinish = document.getElementById('music-mission-finish');
    soundLaser = document.getElementById("laser-sound");
    soundExpShip = document.getElementById("explosion-ship-sound");
    soundExpAlien = document.getElementById("explosion-alien-sound");
    soundAlienPassing = document.getElementById("alien-passing-sound");

    soundOvni = document.getElementById("ovni-sound");
    soundMonsters = document.getElementById("monsters-sound");
    soundMonstersAtt = document.getElementById("monsters-attach");
    soundAlarmShip = document.getElementById("mothership-alarm");

    introMusic.addEventListener("ended", function(){ 
        introMusic.currentTime = 0; 
        introMusic.play(); 
    }, false);

    musicFinish.addEventListener("ended", function(){ 
        musicFinish.currentTime = 0; 
        musicFinish.play(); 
    }, false);

    musicMission.addEventListener("ended", function(){ 
        musicMission.currentTime = 0; 
        musicMission.play(); 
    }, false);

    soundAlarmShip.addEventListener("ended", function(){ 
        soundAlarmShip.currentTime = 0; 
        soundAlarmShip.play(); 
    }, false);



    introMusic.play();
}

let loadMusic = setInterval(initMusic, 20);