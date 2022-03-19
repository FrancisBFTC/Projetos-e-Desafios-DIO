-- Inserindo novos dados com tabelas relacionadas
-- Novo dado -> ID = 4

INSERT INTO canais (nome_canal) VALUES ('HTML');

-- Apresentando dados na tela da tabela canais

SELECT * FROM canais;

-- Apresentando dados na tela da tabela videos

SELECT * FROM videos;

/*
Agora eu preciso relacionar o video de HTML do ID = 5
com o canal HTML do ID = 4, inserindo um novo dado
em videos_canais sendo ID = 5
*/

INSERT INTO videos_canais (fk_canal, fk_video)
	VALUES (4, 5);


-- Apresentando o novo dado relacionado
-- Curso HTML com Canal HTML

SELECT * FROM videos_canais 
	JOIN videos ON videos_canais.fk_video = videos.id_video
	JOIN canais ON videos_canais.fk_canal = canais.id_canal;