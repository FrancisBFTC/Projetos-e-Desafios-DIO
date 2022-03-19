--- Este é um arquivo criado para explicar como pode ser acessado o command line no Windows

--- Os primeiros passos é instalar o XAMPP e depois abri-lo.
--- Depois na interface do XAMPP que vai se abrir, executamos que estará na porta 3306 apenas pressionando o botão "start"
--- Após isto, Basta pressionar no botão "Shell" a sua direita e abrirá uma tela do prompt de comando
--- Então, apenas digite a seguinte linha de comando:

--- mysql -u root


--- Pronto! Agora você poderá digitar os comandos para visualizar banco de dados e tabelas, primeiro visualize seu banco de dados:

SHOW DATABASES;


--- Verifique se contém alguma base de dados que você criou, se não, crie uma:

CREATE DATABASE dio_mysql;


--- Para entrar no banco de dados, basta usar o seguinte comando:

USE dio_mysql


--- Agora, você poderá fazer todas as operações dentro deste banco de dados, então vamos visualizar quais tabelas possuem:

SHOW TABLES;


--- A princípio, não terá nenhuma tabela, então irá mostrar como empty, logo, é preciso criar uma tabela:

CREATE TABLE people(
	id_people INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(30) NOT NULL,
	born DATE NOT NULL
)


--- Desta forma, foi gerada uma tabela com o nome people, que possui 3 colunas não-nulas, o id_people se incrementa
--- automaticamente a cada valor inserido e é uma chave primária, ou seja, só pode existir 1 id com aquele valor,
--- já o name é do tipo varchar com 30 caracteres e o born é do tipo DATE, vamos ver como inserir dados nesta tabela:

INSERT INTO people (name, born) VALUES ('John', '1996/08/14');
INSERT INTO people (name, born) VALUES ('Mary', '1995/09/15');
INSERT INTO people (name, born) VALUES ('Miguel', '1994/10/16');


--- Adicionamos 3 dados na tabela people e sempre é bom respeitar o ponto-e-vírgula no final de cada comando
--- caso exista mais de 1 linha de comando, mas quando não há, não é preciso inserir o ponto-e-vírgula, a menos
--- que você esteja no command line pelo prompt, aí sim, é obrigatório utilizar ponto-e-vírgula


--- Você poderá atualizar os valores desta tabela, como:

UPDATE people SET born = '1990/10/17' WHERE id = 3

--- Digamos que erramos algum dado, como a data do Miguel, podemos atualizar como o comando acima
--- então atualizamos a data do campo born onde id é igual a 3, ou seja, o id do Miguel, ou também poderíamos fazer assim:

UPDATE people SET born = '1990/10/17' WHERE name = 'Miguel'

--- Então assim, alteramos diretamente a data do campo onde está o nome "Miguel"


--- Podemos também selecionar os campos e apresentar na tela as informações:


SELECT * FROM people

--- Assim apresentamos todas as informações da tabela people, mas agora, vou apresentar apenas os nomes

SELECT name FROM people

--- Eu também posso apresentar o nome apenas de um dos dados, como exemplo, o John:

SELECT name FROM people WHERE id = 1

--- Também poderia selecionar o nome onde o nome fosse igual a "John", como:

SELECT name FROM people WHERE name = 'John'



--- Agora eu vamos deletar um dado, por exemplo, vamos deletar o dado da Mary:

DELETE FROM people WHERE id = 2


--- Nesta hora muito cuidado para utilizar o DELETE, os comandos para se ter mais cuidado, é o DELETE e DROP, pois uma vez
--- deletados, não há mais volta.

--- Se um novo SELECT for dado aqui, os dados que serão apresentados serão do John e do Miguel. Agora vamos adicionar mais
--- um campo, que será o campo "cidade":

ALTER TABLE people ADD cidade VARCHAR(10) NOT NULL AFTER born

--- Assim, alteramos a tabela people, adicionando a coluna cidade do tipo varchar de 20 caracteres, não-nulo após o campo born.

--- Então, poderíamos atualizar o campo de cada um:


UPDATE people SET cidade = 'formosa' WHERE id = 1;
UPDATE people SET cidade = 'planaltina' WHERE id = 3;

--- Porque pulamos do ID 1 para o ID 3? justamente, porque o ID é primário, isto é, mesmo que um ID seja apagado
--- como o ID da Mary, o ID nunca pode ser repetido, então se o ID da Mary era 2, este ID já era, se adicionássemos
--- outro campo com INSERT, como:


INSERT INTO (name, born, cidade) VALUES ('Mary', '1994/04/14', 'sobradinho');

--- Este novo campo iria vir com o ID = 4, então o ID 2 nunca mais será visto, isto é o que faz o ID ser primário.

--- Se quiser alterar o nome de um campo, basta fazer:

ALTER TABLE author CHANGE `born` `nasc` DATE NOT NULL;


--- Se quiser remover esta tabela basta fazer:

DROP TABLE people


--- Se quiser remover o banco de dados, basta fazer:

DROP DATABASE dio_mysql