-- Conceito inicial sobre RIGHT e LEFT JOIN

-- INNER JOIN é o mesmo que apenas JOIN
-- JOIN/INNER JOIN não trará nenhum valor que retorna NULL
-- Ou que não há relacionamentos

SELECT * FROM videos_canais AS vc 
	INNER JOIN videos AS v ON vc.fk_video = v.id_video 
	INNER JOIN canais AS c ON vc.fk_canal = c.id_canal
	ORDER BY nome_canal DESC;

-- Trazer todos os valores que não possuem relacionamentos
-- Utilizando OUTER JOIN - Isto dará erro
-- Precisamos entender sobre RIGHT e LEFT JOIN primeiro

SELECT * FROM videos_canais AS vc 
	OUTER JOIN videos AS v ON vc.fk_video = v.id_video 
	OUTER JOIN canais AS c ON vc.fk_canal = c.id_canal
	ORDER BY nome_canal DESC;