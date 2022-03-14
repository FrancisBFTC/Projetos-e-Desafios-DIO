// manipular o objeto Error

//new Error(message, fileName, lineNumber);

// todos os parâmetros são opcionais e
// fileName e lineNumber não são padrão então
// podem não funcionar em alguns browsers.

const meuErro = new Error('Mensagem Inválida');

throw meuErro;

// Posso ter meu próprio nome do erro
// e também a stack do erro

const novoErro = new Error('This is a test error example');
novoErro.name = 'TestError';
novoErro.stack;

throw novoErro;