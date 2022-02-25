<?php
	include "conexao.php";

        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
                $mac = $_POST['addrmac'];
                $ip = $_POST['addrip'];
        
                $sql_update = "UPDATE login_integral SET addrip=:IP WHERE addrmac=:MAC";
        
                $stmt = $PDO->prepare($sql_update);
        
                $stmt->bindParam(':IP', $ip);
                $stmt->bindParam(':MAC', $mac);
                
        
                if($stmt->execute()){
                        $dados = array("UPDATEIP"=>"YES");
                }else{
                        $dados = array("UPDATEIP"=>"NO");
                }
        
                echo json_encode($dados);
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }
        

?>