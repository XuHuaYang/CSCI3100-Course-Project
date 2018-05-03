<?php

    $dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "zwq19961228";
    $dbname = "drstats";

    $conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

    header('Content-Type: application/json');
    header('Content-Type: text/html;charset=utf-8');
    $email =$_POST["id"];
    $rorb=$_POST["ntype"];
    
   
    $number = 0;
    $nid = array();
    $Ncap = array();
    $Nstatus = array();
    $Ntitle = array();
    $sqlcredit="SELECT u.credit from userinfo u where u.email=\"$email\";";
    $sqlbought="SELECT n.nid,n.title,n.finished,n.people from bought b,questionnaire n where b.email=\"$email\" and b.nid=n.nid;";
    $sqlboughtnumber="SELECT count(n.nid) from questionnaire n, bought b where b.email=\"$email\" and b.nid=n.nid;";

    $sqlreleases="SELECT n.nid,n.title,n.finished,n.people from releases r,questionnaire n where r.email=\"$email\" and r.nid=n.nid;";

    $sqlreleasesnumber="SELECT count(n.nid) from questionnaire n, releases r where r.email=\"$email\" and r.nid=n.nid;";
    


    $creditresult=$conn->query($sqlcredit);
    while($row =$creditresult->fetch_assoc()){
        $credit=$row["credit"];
    }
if($rorb==1){
    $boughtresult=$conn->query($sqlbought);
    while($row = $boughtresult->fetch_assoc()){
    
        array_push($nid,$row["nid"]);
        array_push($Ncap,$row["people"]);
        array_push($Nstatus,$row["finished"]);
        array_push($Ntitle,$row["title"]);
    
    }
    
    #echo $nid;
    #echo $Ncap;
    #echo $Nstatus;
    #echo $Ntitle;
    $boughtnumber=$conn->query($sqlboughtnumber);
    while($row = $boughtnumber->fetch_assoc()){
       $number=$row["count(n.nid)"];
    }
    
}else{
    $releaseresult=$conn->query($sqlreleases);
    while($row = $releaseresult->fetch_assoc()){
    
        array_push($nid,$row["nid"]);
        array_push($Ncap,$row["people"]);
        array_push($Nstatus,$row["finished"]);
        array_push($Ntitle,$row["title"]);
    
    }
    $releasenumber=$conn->query($sqlreleasesnumber);
    while($row = $releasenumber->fetch_assoc()){
       $number=$row["count(n.nid)"];
    }
}







    $json_arr = array("userPoint"=>$credit,"number"=>$number, "Nid"=>$nid, "Ntitle"=>$Ntitle, "Ncap"=>$Ncap, "Nstatus"=>$Nstatus);
    echo json_encode($json_arr);
    exit;
?>