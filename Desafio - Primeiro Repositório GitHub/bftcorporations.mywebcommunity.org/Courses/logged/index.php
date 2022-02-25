<?php
      
        
	if (!isset($_COOKIE['user']) && !isset($_COOKIE['user'])) {
                header("Location: ../index.php"); 
                exit;
  	}
        

  	function initDiv($modulo){
            $link = @$_GET['link'];
            if($link == $modulo){
                echo '<div class="mod">';
		echo '<table>';
		echo '<tr>';
            }
        }
        
        function endDiv($modulo){
            $link = @$_GET['link'];
            if($link == $modulo){
                echo '</tr>';
		echo '</table>';
                echo '</div>';
            }
        }

	function videos($modulo, $uri){
		$link = @$_GET['link'];
			
                        if($link == $modulo){
			

				echo '<td>';
                                echo '<iframe width="250" height="200" src="https://www.youtube.com/embed/'.$uri.'" frameborder="2" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br>';
                                echo '<a href="https://www.youtube.com/watch?v='.$uri.'" class="linkvideo" target="blank">Link para o video</a>';
				echo '</td>';
				
								
				
                        }
					
	 	}
?>
<html>
	<head>
		<title>BFTC Private - Courses</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../css/style.css"/>
		<link rel="stylesheet" type="text/css" href="../css/media.css"/>
		<style type="text/css">
			a.link:hover{
				color: #ffffff;
			}

			a.link{
				color: #00ff00;
				font-size: 20px;
				text-decoration: none;
			}

			a.linkvideo{
				color: #0000ff;
				text-decoration: none;
                               
			}

			a.linkvideo:hover{
				color: #ffffff;
			}

		</style>
	</head>
	<body>
		<div id="header-logo">
			<header id="cabecalho">
                        <hgroup>
                                <h1 class="titles">BFTCourses</h1>
           		</hgroup>
                        <hr>
                        </header>
		</div>
		<div id="list-modules">
			<ul>
				<li><a href="?link=modulo1" class="link">Módulo 1 - Introdução na Informática Básica</a></li>
				<?php
                                        initDiv("modulo1");
                                                videos("modulo1", "xvlHAbRBQ8I");
                                                videos("modulo1", "5_y8aUw7858");
                                                videos("modulo1", "JZaChTYV6pU");
                                                videos("modulo1", "L0FWgjxKJbs");
                                                videos("modulo1", "3x6aifLBA-E");
                                                videos("modulo1", "JTmdGFXoiiw");
                                                videos("modulo1", "Z3xvg0GHIg0");
                                                videos("modulo1", "EFRYyfDY4E8");
                                                videos("modulo1", "FNS3m3AfRqE");
                                                videos("modulo1", "B925LtRv1sE");
                                                videos("modulo1", "eYlFFJDO9Hs");
                                                videos("modulo1", "kgQWxodGL1I");
                                                videos("modulo1", "HtCYFBwjpYc");
                                                videos("modulo1", "WyRtgXem-4o");
                                        endDiv("modulo1");
				?>
				<li><a href="?link=modulo2" class="link">Módulo 2 - Utilização dos principais softwares</a></li>
				
				<li><a href="?link=modulo3" class="link">Módulo 3 - Manipulação do sistema</a></li>
				
				<li><a href="?link=modulo4" class="link">Módulo 4 - Introdução a lógica de programação</a></li>
				
				<li><a href="?link=modulo5" class="link">Módulo 5 - Programação em C</a></li>
				
				<li><a href="?link=modulo6" class="link">Módulo 6 - Desenvolvimento de softwares em C</a></li>
				
				<li><a href="?link=modulo7" class="link">Módulo 7 - Programação em Java</a></li>
				
				<li><a href="?link=modulo8" class="link">Módulo 8 - Desenvolvimento de softwares em Java</a></li>
				
				<li><a href="?link=modulo9" class="link">Módulo 9 - Criando um projeto em C e Java</a></li>
				
				<li><a href="?link=modulo10" class="link">Módulo 10 - Noções de segurança da informação</a></li>
				
			</ul>
		</div>
	</body>
</html>