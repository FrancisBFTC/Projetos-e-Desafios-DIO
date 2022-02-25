<?php
        session_start();
        
        unset($_SESSION['usersession']);
        unset($_SESSION['passwordsession']);
        
        session_destroy();
        
        header("Location: index.php");
                
?>