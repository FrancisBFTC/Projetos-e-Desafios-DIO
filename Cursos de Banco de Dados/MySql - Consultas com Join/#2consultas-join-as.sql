-- Fazendo Consultas com os comandos JOIN

SELECT * FROM videos_canais JOIN videos
ON vc.fk_canal = v.id_video;

-- Fazendo Consultas com os comandos JOIN e AS

SELECT * FROM videos_canais AS vc JOIN videos AS v
ON vc.fk_canal = v.id_video;