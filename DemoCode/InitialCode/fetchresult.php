<?php
    /********************************************************
     * MODULE NAME:fetchresult
     *
     * PROCEDURE INVOCATION:
     *     CALL fetchresult(nid)
     *
     * INPUT PARAMETER:
     *     INPUT is the nid of the question
     *
     * OUTPUT PARAMETER:
     *     Return the question with the given nid in the database
     *     Including the question title,four question choices and
     *     the number of  people who select this choice
    ********************************************************/
	
    $nid =$_POST["nid"];

    $ntitle = "A simple questionnaire";
    $questionnumber = 0;
    $qtitle = array();
    $choicea = array();
    $choiceb = array();
    $choicec = array();
    $choiced = array();
    $anum = array();
    $bnum = array();
    $cnum = array();
    $dnum = array();

    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "zwq19961228";
    $dbname = "drstats";

    $conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

    $sqlntitle="SELECT n.title from questionnaire n where n.nid=$nid;";
    $titleresult=$conn->query($sqlntitle);
    while($row = $titleresult->fetch_assoc()){
        $ntitle=$row["title"];
    }



    $sqlquestion="SELECT q.title, q.choicea, q.choiceb, q.choicec, q.choiced, q.acount, q.bcount, q.ccount, q.dcount from question q where q.nid=$nid;";
   


    $questionresult=$conn->query($sqlquestion);
    while($row = $questionresult->fetch_assoc()){
        array_push($qtitle,$row["title"]);
        array_push($choicea,$row["choicea"]);
        array_push($choiceb,$row["choiceb"]);
        array_push($choicec,$row["choicec"]);
        array_push($choiced,$row["choiced"]);
        array_push($anum,$row["acount"]);
        array_push($bnum,$row["bcount"]);
        array_push($cnum,$row["ccount"]);
        array_push($dnum,$row["dcount"]);
        $questionnumber=$questionnumber+1;
    }



    $json_arr = array("ntitle"=>$ntitle, "questionnumber"=>$questionnumber,"qtitle"=>$qtitle,"choicea"=>$choicea,"choiceb"=>$choiceb,"choicec"=>$choicec,"choiced"=>$choiced,"anum"=>$anum,"bnum"=>$bnum,"cnum"=>$cnum,"dnum"=>$dnum);
    echo json_encode($json_arr);
?>