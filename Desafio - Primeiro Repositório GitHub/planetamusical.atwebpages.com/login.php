<?php
        
        session_start();
        
        $conexao = mysql_connect("localhost", "root", "");
        $banco = mysql_select_db("aula", $connect);
        
        $user = $_POST['user'];
        $password = $_POST['password'];
        
        $login = mysql_query("SELECT * FROM aula_cadastrar WHERE user = '$user' AND password = '$password'");
        $verificarlogin = mysql_num_rows($login);
        
        if($verificarlogin = 1){
                
                
                
                echo "<meta http-equivalent=refresh content='0; URL=assuntos/casa.php';>";
        }
        else{
                if($verificarlogin == 0){
                
                        $_SESSION['usersession'] = $user;
                        $_SESSION['passwordsession'] = $password;
                        
                        
                        echo "<font color='red'>Login incorreto e/ou não existe!</font>
                                <meta http-equivalent=refresh content='5; URL=index.php';>";
                
                }
        
        }
?>