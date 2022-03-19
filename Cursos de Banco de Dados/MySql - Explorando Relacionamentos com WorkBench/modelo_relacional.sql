--- Desafio das aulas de MODELO RELACIONAL

--- Apresentando informações da base de dados Youtube_db e tabelas playlist e author


SELECT playlist.name_pl, author.name FROM playlist JOIN author ON playlist.fk_author = author.id_author

--- O resultado seria como este:

/*
name_pl							name
 	
Cursos de PHP + MySql 			Maria
Cursos de JavaScript + Python 	Pedro
Cursos de HTML + CSS 			Flavia

*/


--- Apresentando informações de vídeos de cada Author:


SELECT videos.title, videos.likes, videos.dislikes, author.name FROM videos_playlist 
JOIN videos ON videos.id_video = videos_playlist.fk_videos 
JOIN author ON author.id_author = videos.fk_author 

--- O resultado seria como este:

/*
title		likes	dislikes	name 	

MySql 		10 		2 			Maria
HTML 		30 		1 			Maria
Python 		40 		0 			Maria
JavaScript 	15 		8 			Pedro
PHP 		20 		8 			Pedro
CSS 		18 		3 			João

*/