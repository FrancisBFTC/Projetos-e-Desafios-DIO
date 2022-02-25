<?php
       include "conexao.php";
       
        $bft_code = $_GET['bftcode'];
        
        if($bft_code == "YmZ0Y29ycG9yYXRpb25zQGdtYWlsLmNvbSANCg=="){
               $addrmac = $_POST['addrmac'];
               $addrip = $_POST['addrip'];
               $phone = $_POST['phone'];
               $status = $_POST['status'];
               
               $sql_insert = "INSERT INTO login_integral(addrmac, addrip, phone, status) VALUES(:MAC, :IP, :PHONE, :STATUS)";
               
               $register = $PDO->prepare($sql_insert);
               $register->bindParam(':MAC', $addrmac);
               $register->bindParam(':IP', $addrip);
               $register->bindParam(':PHONE', $phone);
               $register->bindParam(':STATUS', $status);
               
               if($register->execute()){
                       $datas = array("REGISTER"=>"YES");
               }else{
                       $datas = array("REGISTER"=>"NO");
               }
               
               echo json_encode($datas);       
        }else{
            echo "<h1><b>404 ERROR! page not found!</b></h1>";
        }
        

?>