<?php
	
        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
                $connect = mysqli_connect("fdb15.eohost.com", "2163708_admin", "1324354657687980Site*", "2163708_admin");
                
                $lastId = (int) $_POST['lastId'];
                $from = $_POST['from'];
                $to = $_POST['to'];
                
              
                $sql_read = "SELECT * FROM chat_connection WHERE id > '$lastId' AND phonefrom = '$from' AND phoneto = '$to' OR id > '$lastId' AND phoneto = '$from' AND phonefrom = '$to'";
                $result = mysqli_query($connect, $sql_read);
                        

                if(mysqli_num_rows($result) > 0){
                       $row = mysqli_fetch_assoc($result);
                       $id = $row["id"];
                       $phonefrom = $row["phonefrom"];
                       $phoneto = $row["phoneto"];
                       $messages = $row["messages"];
                       $datesend = $row["datesend"];
                       $statussend = $row["statussend"];
                             
                     
                             
                       $resultado = array("FINDED"=>"TRUE", "id"=>$id, "phonefrom"=>$phonefrom, "phoneto"=>$phoneto, 
                                           "messages"=>$messages, "datesend"=>$datesend, "statussend"=>$statussend);
                             
                }else{
                      $resultado = array("FINDED"=>"FALSE");
                }
             
                
                
                
                echo json_encode($resultado);        
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }
        


?>