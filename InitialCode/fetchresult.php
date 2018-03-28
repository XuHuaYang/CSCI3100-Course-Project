<?php
	header('Content-Type: application/json');
    header('Content-Type: text/html;charset=utf-8');
    $nid = $_POST["nid"];

    $ntitle = "A simple questionnaire";
    $questionnumber = 2;
    $qtitle = array("Do you have a cat?", "Do you like dogs?");
    $choicea = array("Yes","Yes");
    $choiceb = array("No","No");
    $choicec = array("Before","Before");
    $choiced = array("Not Applicable","Not Applicable");
    $anum = array(100,300);
    $bnum = array(200,50);
    $cnum = array(50, 30);
    $dnum = array(150,120);
    $json_arr = array("ntitle"=>$ntitle, "questionnumber"=>$questionnumber,"qtitle"=>$qtitle,"choicea"=>$choicea,"choiceb"=>$choiceb,"choicec"=>$choicec,"choiced"=>$choiced,"anum"=>$anum,"bnum"=>$bnum,"cnum"=>$cnum,"dnum"=>$dnum);
    echo json_encode($json_arr);
?>