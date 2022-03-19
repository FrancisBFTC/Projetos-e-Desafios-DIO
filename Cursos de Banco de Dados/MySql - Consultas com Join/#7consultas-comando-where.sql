-- Realizando consultas com comando WHERE
-- Apresentando conteúdo apenas de 1 canal

SELECT * FROM videos_canais 
	JOIN videos ON videos_canais.fk_video = videos.id_video
	JOIN canais ON videos_canais.fk_canal = canais.id_canal
	WHERE canais.id_canal = 2;

-- Realizando uma consulta mais personalizada
-- Dados de 2 canais

SELECT vd.nome_video, cs.nome_canal FROM videos_canais AS v_c
	JOIN videos AS vd ON v_c.fk_video = vd.id_video
	JOIN canais AS cs ON v_c.fk_canal = cs.id_canal
	WHERE cs.id_canal = 2
UNION
SELECT v.nome_video, c.nome_canal FROM videos_canais AS vc
	JOIN videos AS v ON vc.fk_video = v.id_video
	JOIN canais AS c ON vc.fk_canal = c.id_canal
	WHERE c.id_canal = 4;