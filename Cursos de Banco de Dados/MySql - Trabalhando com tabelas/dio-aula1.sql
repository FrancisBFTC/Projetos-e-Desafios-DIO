CREATE TABLE pessoas (
	id INT NOT NULL PRIMARY KEY AUTOINCREMENT,
	nome VARCHAR(30) NOT NULL,
	nascimento DATE
)

INSERT INTO pessoas (nome, nascimento) VALUES ('Wenderson', '1996/08/14')
INSERT INTO pessoas (nome, nascimento) VALUES ('Pedro', '1995/07/17')
INSERT INTO pessoas (nome, nascimento) VALUES ('Marcela', '2000/04/05')