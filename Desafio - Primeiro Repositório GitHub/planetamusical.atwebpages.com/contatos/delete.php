<?php
	include "conexao.php";
        
        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
                $id = $_POST['id'];
                $mac = $_POST['mac'];
        
                $sql_delete = "DELETE FROM contatos WHERE id=:id AND mac=:mac";
        
                $stmt = $PDO->prepare($sql_delete);
        
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':mac', $mac);
        
                if($stmt->execute()){
                        $dados = array("DELETE"=>"OK");
                }else{
                        $dados = array("DELETE"=>"ERRO");
                }
        
                echo json_encode($dados);
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }

	
?>