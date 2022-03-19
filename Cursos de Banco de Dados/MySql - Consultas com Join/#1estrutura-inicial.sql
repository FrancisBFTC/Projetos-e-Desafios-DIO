-- Criando a base de dados youtube_canais

CREATE DATABASE youtube_canais;

-- Entrando na base de dados youtube_canais

USE youtube_canais;

-- Criando a tabela canais em youtube_canais

CREATE TABLE canais (
	id_canal INT PRIMARY KEY AUTO_INCREMENT,
	nome_canal VARCHAR(30) NOT NULL
);

-- Inserindo dados na tabela canais

INSERT INTO canais (nome_canal) VALUES ('React');
INSERT INTO canais (nome_canal) VALUES ('PHP');
INSERT INTO canais (nome_canal) VALUES ('CSS');

-- Criando a tabela videos

CREATE TABLE videos (
	id_video INT PRIMARY KEY AUTO_INCREMENT,
	nome_video VARCHAR(30) NOT NULL,
	autor_video VARCHAR(30) NOT NULL
);

-- Inserindo dados na tabela videos

INSERT INTO videos (nome_video, autor_video) VALUES ('Login com React', 'React');
INSERT INTO videos (nome_video, autor_video) VALUES ('Componentes com React', 'React');
INSERT INTO videos (nome_video, autor_video) VALUES ('Listas com PHP', 'PHP');
INSERT INTO videos (nome_video, autor_video) VALUES ('Funções com PHP', 'PHP');
INSERT INTO videos (nome_video, autor_video) VALUES ('Páginas com HTML', 'HTML');

-- Criando a tabela videos_canais

CREATE TABLE videos_canais (
	id_canais_video INT PRIMARY KEY AUTO_INCREMENT,
	fk_canal INT NOT NULL,
	fk_video INT NOT NULL
);


-- Inserindo dados na tabela videos_canais

INSERT INTO videos_canais (fk_canal, fk_video) VALUES (2, 4);
INSERT INTO videos_canais (fk_canal, fk_video) VALUES (2, 3);
INSERT INTO videos_canais (fk_canal, fk_video) VALUES (1, 1);
INSERT INTO videos_canais (fk_canal, fk_video) VALUES (1, 2);

-- Adicionando chave estrangeira em fk_canal e fk_video

ALTER TABLE videos_canais ADD CONSTRAINT fk_canal FOREIGN KEY (fk_canal)
REFERENCES canais(id_canal) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE videos_canais ADD CONSTRAINT fk_video FOREIGN KEY (fk_video)
REFERENCES videos(id_video) ON DELETE CASCADE ON UPDATE CASCADE;


-- Apresentando tudo da tabela videos, canais e videos_canais

SELECT * FROM videos;
SELECT * FROM canais;
SELECT * FROM videos_canais;





