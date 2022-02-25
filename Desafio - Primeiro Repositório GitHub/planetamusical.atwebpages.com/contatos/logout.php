<?php
	include "conexao.php";

        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
                $mac = $_POST['mac'];
                $status = $_POST['status'];
        
                $sql_update = "UPDATE login_integral SET status=:status WHERE addrmac=:mac";
        
                $stmt = $PDO->prepare($sql_update);
        
                $stmt->bindParam(':mac', $mac);
                $stmt->bindParam(':status', $status);
                
        
                if($stmt->execute()){
                        $dados = array("LOGOFF"=>"YES");
                }else{
                        $dados = array("LOGOFF"=>"NO");
                }
        
                echo json_encode($dados);
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }
        
	
?>