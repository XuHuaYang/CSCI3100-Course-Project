<?php
header("charset=utf-8");
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Email = $_POST['Email'];
    $CreditCard = $_POST['CreditCard'];
    $Pincode = $_POST['Pincode'];
    $Password = $_POST['Password'];
    $json_arr = array("FirstName"=>$FirstName,"LastName"=>$LastName,"Email"=>$Email,"CreditCard"=>$CreditCard,"Pincode"=>$Pincode,"Password"=>$Password,);
    $json_obj = json_encode($json_arr);
    echo $json_obj;
?>