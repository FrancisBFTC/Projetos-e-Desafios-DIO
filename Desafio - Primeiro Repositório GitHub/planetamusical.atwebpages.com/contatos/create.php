<?php
	include "conexao.php";
        
        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
                $nome = $_POST['nome'];
                $telefone = $_POST['phone'];
                $email = $_POST['email'];
                $mac = $_POST['mac'];
        
                $sql_insert = "INSERT INTO contatos (mac, nome, telefone, email) 
                VALUES (:MAC, :NOME, :TELEFONE, :EMAIL)";
        
                $stmt = $PDO->prepare($sql_insert);
        
                $stmt->bindParam(':MAC', $mac);
                $stmt->bindParam(':NOME', $nome);
                $stmt->bindParam(':TELEFONE', $telefone);
                $stmt->bindParam(':EMAIL', $email);
                
        
                if($stmt->execute()){
                        $id = $PDO->lastInsertId();
                        $dados = array("CREATE" => "OK", "ID" => $id);
                }else{
                        $dados = array("CREATE" => "ERRO");
                }
                
                echo json_encode($dados);
        }else{
             echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }

	

	
	
?>