<?php
$dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "zwq19961228";
    $dbname = "drstats";

    $conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

    $nid=array();
    $title=array();
    $type=array();

    $number=0;
    $keyword=$_POST["word"];
    $sqlsearch="SELECT n.nid, n.title, n.type from questionnaire n where n.title like \"%$keyword%\";";
    $searchresult=$conn->query($sqlsearch);
    while($row=$searchresult->fetch_assoc()){
    	array_push($nid,$row["nid"]);
    
    	array_push($title,$row["title"]);

    	array_push($type,$row["type"]);
    	$number=$number+1;
    }

    #$sqlsearch="SELECT count(n.nid) from questionnaire n where n.title like \"%$keyword%\";";
    #$countresult=$conn->query($sqlsearch);
    #while($row=$countresult->fetch_assoc()){
    	#$number=$row["count(n.nid)"];
    #}
    

    
  


$json_arr = array("nid"=>$nid,"title"=>$title,"type"=>$type,"number"=>$number);

echo json_encode($json_arr);


?>