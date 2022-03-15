var myButton = document.getElementById('mode-selector');
var myH1 = document.getElementById('page-title');
var myBody = document.getElementsByTagName('body')[0];
var myFooter = document.getElementsByTagName('footer')[0];

// 3 temas diferentes
const LIGHT_MODE = 'light-mode';
const DARK_MODE  = 'dark-mode';
const DARK_BLUE  = 'vim-dark-blue';

const MODES = [
    LIGHT_MODE,
    DARK_MODE,
    DARK_BLUE
];

var counter = 1;

// quando o botão for clicado
myButton.addEventListener('click', function(){
    changeClasses(MODES[counter]);
    changeText();
    counter++;
});

function changeClasses(mode){
    if(counter === 3){
        MODES.map(function(item){
            myButton.classList.remove(item);
            myH1.classList.remove(item);
            myBody.classList.remove(item);
            myFooter.classList.remove(item);
        }, 0);
        counter = 0;
        mode = MODES[counter];
    }
    myButton.classList.add(mode);
    myH1.classList.add(mode);
    myBody.classList.add(mode);
    myFooter.classList.add(mode);
}

function changeText(){
    let lightMode = "Light Mode";
    let darkMode = "Dark Mode";
    let blueMode = "Dark Blue";

    if(MODES[counter] === DARK_MODE){
        myButton.innerHTML = blueMode;
        myH1.innerHTML = darkMode + " ATIVO";
    } else if(MODES[counter] === DARK_BLUE){
        myButton.innerHTML = lightMode;
        myH1.innerHTML = blueMode + " ATIVO";
    }else{
        myButton.innerHTML = darkMode;
        myH1.innerHTML = lightMode + " ATIVO";
    }
}
