<?php
    header('Content-Type: application/json');
    header('Content-Type: text/html;charset=utf-8');
	$userID = 1;
    $userName = "LSY";
    $userSex = "male";
    $userAge = 18;
    $userPoint = 100;
    $json_arr = array("userID"=>$userID,"userName"=>$userName,"userSex"=>$userSex,"userAge"=>$userAge,"userPoint"=>$userPoint);
    echo json_encode($json_arr);
    exit;
?>