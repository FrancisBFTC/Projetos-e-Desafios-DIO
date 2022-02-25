<?php
	
        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
                $connect = mysqli_connect("fdb15.eohost.com", "2163708_admin", "1324354657687980Site*", "2163708_admin");
                
                $addrip = $_POST['addrip'];
                $addrmac = $_POST['addrmac'];
                $verify = $_POST['action'];
                
                if($verify == "verifyMac"){
                        $sql_read = "SELECT * FROM login_integral WHERE addrmac='$addrmac'";
                }else{
                        $myPhone = $_POST['phone'];
                        $myStatus = $_POST['status'];
                        $sql_read = "SELECT * FROM login_integral WHERE phone='$myPhone' AND addrmac='$addrmac'";
                }
                
                mysqli_query($connect, "UPDATE login_integral SET addrip='$addrip' WHERE addrmac='$addrmac'");
                $result = mysqli_query($connect, $sql_read);
                
                if($verify == "verifyMac"){
                        if(mysqli_num_rows($result) > 0){
                             $row = mysqli_fetch_assoc($result);
                             $addrmac = $row["addrmac"];
                             $addrip = $row["addrip"];
                             $phone = $row["phone"];
                             $status = $row["status"];
                             
                             $resultado = array();
                             
                             $resultado = array("VERIFY"=>"YES", "mac"=>$addrmac, 
                                              "ip"=>$addrip, "phone"=>$phone, "status"=>$status);
                             
                        }else{
                             $resultado = array("VERIFY"=>"NO");
                        }
                }else{
                        if(mysqli_num_rows($result) > 0){
                        
                             $update = "UPDATE login_integral SET status='$myStatus'";
                             mysqli_query($connect, $update);
                             
                             $row = mysqli_fetch_assoc($result);
                             $addrmac = $row["addrmac"];
                             $addrip = $row["addrip"];
                             $phone = $row["phone"];
                             $status = $row["status"];
                             
                             
                             $resultado = array();
                             
                             $resultado = array("VERIFY"=>"YES", "mac"=>$addrmac, 
                                              "ip"=>$addrip, "phone"=>$phone, "status"=>$status);
                             
                        }else{
                             $resultado = array("VERIFY"=>"NO");
                        }
                }
                
                
                
                echo json_encode($resultado);        
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }
        


?>