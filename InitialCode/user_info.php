<?php
    header('Content-Type: application/json');
    header('Content-Type: text/html;charset=utf-8');
    $id = $_POST["id"];

    $userPoint = 100;
    $purchaseNum = 2;
    $Nid = array(1,2);
    $Ncap = array(500,500);
    $Nstatus = array(1,0);
    $Ntitle = array("A simple survey", "Template2");
    $json_arr = array("userPoint"=>$userPoint,"purchaseNum"=>$purchaseNum, "Nid"=>$Nid, "Ntitle"=>$Ntitle, "Ncap"=>$Ncap, "Nstatus"=>$Nstatus);
    echo json_encode($json_arr);
    exit;
?>