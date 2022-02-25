<?php
	include "conexao.php";
        
        $bft_code = $_GET['bftcode'];
        $mac = $_POST['mac'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
                $sql_read = "SELECT * FROM contatos WHERE mac='$mac'";
              
                $dados = $PDO->query($sql_read);
        
                $resultado = array();
        
                while($contato = $dados->fetch(PDO::FETCH_OBJ)){
        
                        $resultado[] = array("id"=>$contato->id, "nome"=>$contato->nome, 
                                                        "telefone"=>$contato->telefone, "email"=>$contato->email, "code"=>$contato->code, 
                                                        "ddd"=>$contato->ddd);
                }

                echo json_encode($resultado);
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }       
                
?>
