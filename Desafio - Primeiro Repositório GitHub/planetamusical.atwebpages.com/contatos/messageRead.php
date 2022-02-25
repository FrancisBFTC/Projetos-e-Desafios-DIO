<?php
	include "conexao.php";
        
        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
                $sql_read = "SELECT * FROM chat_connection";
                $dados = $PDO->query($sql_read);
        
                $resultado = array();
        
                while($msg = $dados->fetch(PDO::FETCH_OBJ)){
        
                        $resultado[] = array("id"=>$msg->id, "phonefrom"=>$msg->phonefrom, 
                                                        "phoneto"=>$msg->phoneto, "messages"=>$msg->messages, "datasend"=>$msg->datesend, 
                                                        "statussend"=>$msg->statussend);
                }

                echo json_encode($resultado);
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }       
                
?>