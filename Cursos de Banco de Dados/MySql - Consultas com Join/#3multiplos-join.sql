-- Implementando múltiplos comandos JOIN

SELECT * FROM videos_canais AS vc 
	JOIN videos AS v ON vc.fk_video = v.id_video 
	JOIN canais AS c ON vc.fk_canal = c.id_canal;

-- Apresentando apenas informações relevantes

SELECT v.nome_video, v.autor_video, c.nome_canal 
FROM videos_canais AS vc 
	JOIN videos AS v ON vc.fk_video = v.id_video 
	JOIN canais AS c ON vc.fk_canal = c.id_canal
	ORDER BY nome_canal DESC;


