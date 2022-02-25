<?php
	include "conexao.php";

        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
                $id = $_POST['id'];
                $mac = $_POST['mac'];
                $nome = @$_POST['nome'];
                $telefone = @$_POST['phone'];
                $email = @$_POST['email'];
                $code = @$_POST['code'];
                $ddd = @$_POST['ddd'];
        
                $sql_update = "UPDATE contatos SET nome=:nome, telefone=:telefone,
                email=:email, code=:code, ddd=:ddd WHERE id=:id AND mac=:mac";
        
                $stmt = $PDO->prepare($sql_update);
        
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':mac', $mac);
                $stmt->bindParam(':telefone', $telefone);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':code', $code);
                $stmt->bindParam(':ddd', $ddd);
                
        
                if($stmt->execute()){
                        $dados = array("UPDATE"=>"OK");
                }else{
                        $dados = array("UPDATE"=>"ERRO");
                }
        
                echo json_encode($dados);
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }
        

?>