-- Praticando consultas com RIGHT e LEFT JOIN

-- Em qual lado está os valores que terão relacionamento NULO
-- A tabela videos está a direita e a tabela videos_canais
-- Está a esquerda

-- Clausula LEFT : Apresentar dados relacionados +
-- Apresentar dados de LEFT com Relacionamento NULL em RIGHT

SELECT * FROM videos_canais AS vc 
	LEFT OUTER JOIN videos AS v ON vc.fk_video = v.id_video;

-- Clausula RIGHT : Apresentar dados relacionados + 
-- Apresentar dados de RIGHT com Relacionamento NULL em LEFT

SELECT * FROM videos_canais AS vc 
	RIGHT OUTER JOIN videos AS v ON vc.fk_video = v.id_video;

-- Então, RIGHT ou LEFT apontam pra qual lado está o valor
-- que vamos abrir mão deste relacionamento
-- Apresentando-os mesmo que tenham relacionamento NULL


SELECT * FROM videos_canais AS vc 
	RIGHT OUTER JOIN videos AS v ON vc.fk_video = v.id_video
	RIGHT OUTER JOIN canais AS c ON vc.fk_canal = c.id_canal;


-- Invertendo as direções, do LEFT para RIGHT e de RIGHT para LEFT
-- E utilizando UNION para unir as consultas
-- Pois o OUTER JOIN poderá dar conflitos quando utilizados mais de 1 vez


SELECT v.id_video, v.nome_video FROM videos AS v  
	LEFT OUTER JOIN videos_canais AS vc ON vc.fk_video = v.id_video
UNION
SELECT c.id_canal, c.nome_canal FROM videos_canais AS vc
	RIGHT OUTER JOIN canais AS c ON vc.fk_canal = c.id_canal;

-- Lembrando: UNION só funciona em tabelas com quantidade de colunas iguais
-- Logo, é preciso passar apenas informações necessárias no lugar do
-- * (asterisco), na mesma quantidade das 2 consultas

