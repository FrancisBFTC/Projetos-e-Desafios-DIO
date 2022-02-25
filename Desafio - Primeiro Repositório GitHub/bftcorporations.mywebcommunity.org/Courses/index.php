<?php
       
	if (isset($_COOKIE['user']) && isset($_COOKIE['pass'])) {
              header("Location: logged/index.php");
  	}
	include "database/connection.php";
       

	$server = $_SERVER['REMOTE_ADDR'];

	$name = 'data.log';
	$file = fopen($name, 'a');
	fwrite($file, $server."\r\n");
	fclose($file);

	
	

	$button = @$_POST['id'];
	if($button == "clicked"){
		$user = $_POST['user'];
		$pass = $_POST['pass'];

	 
		if(empty($user) || empty($pass)){
			echo "<script type='text/javascript'>alert('Preencha todos os campos!')</script>";
		}else{
			$sql_update = "UPDATE bftc_user SET ip='$server' WHERE id=1";
	        $stmt = $PDO->prepare($sql_update);
	        $stmt->bindParam(':IP', $server);
	        $stmt->bindParam(':ID', $id);
	        $stmt->execute();

	        $usercode = hash('sha512', $user);
			$passcode = hash('sha512', $pass);

			$sql_query = "SELECT * FROM bftc_user WHERE id=1";
			$exec = $PDO->query($sql_query);
			while($datas = $exec->fetch(PDO::FETCH_OBJ)){
                        /* $usercode == $datas->user && $passcode == $datas->pass */
				if($user == "BFTC_System" && $pass == "System3301"){
										
					setcookie("user", $user);
					setcookie("pass", $pass);

                                        header("Location: logged/index.php");
					//echo "<meta name='refresh' content='0;url=bftcorporations.mywebcommunity.org/Courses/logged/index.php' />";
				}else{
					echo "<script type='text/javascript'>alert('Os dados inseridos estão incorretos!')</script>";
				}
			}
		}
	}



?>
<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<title>BFTC Private - Login</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" type="text/css" href="css/media.css"/>
	</head>
	<body>
		<div id="login">
			<fieldset>
				<legend><b>BFTC Login</b></legend>
				<form method="POST" action="">
					<label for="user">User:</label> <input type="text" id="user" name="user" class="texts" placeholder="Meu Usuário"/><br></br>
					<label for="pass">Pass:</label> <input type="password" id="pass" name="pass" class="texts" placeholder="Minha Senha"/><br></br>
					<input type="hidden" name="id" value="clicked"/>
					<input type="image" name="button" class="buttons" src="imgs/entrar.png"/>
				</form>
			</fieldset>
		</div>
	</body>
</html>