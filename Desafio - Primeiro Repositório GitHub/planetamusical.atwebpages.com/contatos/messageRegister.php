<?php
        include "conexao.php";

        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){

                $phoneFrom = $_POST['phoneFrom'];
                $phoneTo = $_POST['phoneTo'];
                $message = $_POST['message'];
                $date = date('d/m h:i A');
                $status = $_POST['status'];
                $insertMessage = "INSERT INTO chat_connection(phonefrom, phoneto, messages, datesend, statussend) VALUES(:PHONEFROM, :PHONETO, :MESSAGE, :DATE, :STATUS)";
                $stmt = $PDO->prepare($insertMessage);
        
                $stmt->bindParam(':PHONEFROM', $phoneFrom);
                $stmt->bindParam(':PHONETO', $phoneTo);
                $stmt->bindParam(':MESSAGE', $message);
                $stmt->bindParam(':DATE', $date);
                $stmt->bindParam(':STATUS', $status);
                
                if($stmt->execute()){
                        $result = array("REGISTRED"=>"YES");
                }else{
                        $result = array("REGISTRED"=>"NO");
                }
                
                echo json_encode($result);
        
                
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }
?>