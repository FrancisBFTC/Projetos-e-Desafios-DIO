--- Aulas de MySql - Trabalhando com Tabelas

CREATE TABLE pessoa (
	id INT NOT NULL PRIMARY KEY AUTOINCREMENT,
	nome VARCHAR(30) NOT NULL,
	nascimento DATE
);

INSERT INTO pessoa (nome, nascimento) VALUES ('Wenderson', '1996/08/14');
INSERT INTO pessoa (nome, nascimento) VALUES ('Pedro', '1995/07/17');
INSERT INTO pessoa (nome, nascimento) VALUES ('Marcela', '2000/04/05');

ALTER TABLE 'pessoa' ADD 'genero' VARCHAR(1) NOT NULL AFTER 'nascimento';

SELECT * FROM pessoa ORDER BY nome;
SELECT * FROM pessoa ORDER BY nascimento;

SELECT * FROM pessoa;
DELETE FROM pessoa WHERE id = 2;

INSERT INTO pessoa (nome,nascimento, genero) VALUES ('Flavia', '1994/06/11', 'F');

UPDATE pessoa SET genero = 'M' WHERE id = 1;
UPDATE pessoa SET genero = 'F' WHERE id = 3;
UPDATE pessoa SET genero = 'F' WHERE id = 4;

SELECT COUNT(id), genero FROM pessoa GROUP BY genero