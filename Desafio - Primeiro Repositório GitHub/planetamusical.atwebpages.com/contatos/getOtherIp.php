<?php
	
        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
                $connect = mysqli_connect("fdb15.eohost.com", "2163708_admin", "1324354657687980Site*", "2163708_admin");
                
                $phone = $_POST['phone'];

                $sql_read = "SELECT * FROM login_integral WHERE phone='$phone'";

                $result = mysqli_query($connect, $sql_read);
                
            
                if(mysqli_num_rows($result) > 0){
                   $row = mysqli_fetch_assoc($result);
                   $addrip = $row["addrip"];
                             
                   $resultado = array();
                             
                  $resultado = array("GETIP"=>"YES", "ip"=>$addrip);
                             
                  }else{
                      $resultado = array("GETIP"=>"NO");
                  }
                
                
                
                
                echo json_encode($resultado);        
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }
        


?>