// Criando uma calculadora com Funções aritméticas nativas
// Number() - para converter valores em números
// Prompt() - para registrar entradas de usuário
// Alert() - para mostrar mensagem ao usuário
// Template Strings - para usar Strings junto com ${expressões}

function calculadora(){
    const operacao = Number(prompt('Escolha uma operação: \n 1 - Soma (+)\n 2 - Subtração (-)\n 3 - Multiplicação (*)\n 4 - Divisão Real (/)\n 5 - Divisão Inteira (%)\n 6 - Potenciação (**)\n'));

    if(!operacao || operacao > 6){
        alert('Error - Operação Inválida!');
        calculadora();
    }else{
        let n1 = Number(prompt('Insira o primeiro valor:'));
        let n2 = Number(prompt('Insira o segundo valor:'));
        let resultado;

        if(!n1 || !n2){
            alert('Error - Valores Inválidos!');
            calculadora();
        }else{

            function soma(){
                resultado = n1 + n2;
                alert(`${n1} + ${n2} = ${resultado}`);
                novaOperacao();
            }
        
            function subtracao(){
                resultado = n1 - n2;
                alert(`${n1} - ${n2} = ${resultado}`);
                novaOperacao();
            }
        
            function multiplicacao(){
                resultado = n1 * n2;
                alert(`${n1} * ${n2} = ${resultado}`);
                novaOperacao();
            }
        
            function divisaoreal(){
                resultado = n1 / n2;
                alert(`${n1} / ${n2} = ${resultado}`);
                novaOperacao();
            }
        
            function divisaointeira(){
                resultado = n1 % n2;
                alert(`${n1} % ${n2} = ${resultado} (Resto da Divisão)`);
                novaOperacao();
            }
        
            function potenciacao(){
                resultado = n1 ** n2;
                alert(`${n1} ^ ${n2} = ${resultado}`);
                novaOperacao();
            }
        
            function novaOperacao(){
                let opcao = prompt('Gostaria de fazer outra operação?\n1 - Sim\n2 - Não');
        
                if(opcao == 1){
                    calculadora();
                } else if (opcao == 2){
                    alert('Obrigado por utilizar esta aplicação! :)');
                } else {
                    alert('Digite uma opção válida!');
                    novaOperacao();
                }
            }
        
            switch(operacao){
                case 1: soma();
                        break;
                case 2: subtracao();
                        break;
                case 3: multiplicacao();
                        break;
                case 4: divisaoreal();
                        break;
                case 5: divisaointeira();
                        break;
                case 6: potenciacao();
                        break;
            }
        }
    
    }


}

calculadora();