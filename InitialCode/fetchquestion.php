<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "zwq19961228";
$dbname = "drstats";

$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
$nid=$_POST["nid"];

$sql="SELECT q.title,q.choicea,q.choiceb,q.choicec,q.choiced FROM question q WHERE q.nid=$nid;";


$sql2="SELECT n.title FROM questionnaire n WHERE n.nid=$nid;";



$titleresult=$conn->query($sql2);

while($row = $titleresult->fetch_assoc()){
	$ntitle=$row["title"];
}


$result=$conn->query($sql);
$questionnumber=$result->num_rows;
$questiontitle=array();
$choicea=array();
$choiceb=array();
$choicec=array();
$choiced=array();

while($row = $result->fetch_assoc()){
	
	array_push($questiontitle,$row["title"]);
	array_push($choicea,$row["choicea"]);
	array_push($choiceb,$row["choiceb"]);
	array_push($choicec,$row["choicec"]);
	array_push($choiced,$row["choiced"]);
}




$overall=array("ntitle"=>$ntitle,"questionnumber"=>$questionnumber,"title"=>$questiontitle,"choicea"=>$choicea,"choiceb"=>$choiceb,"choicec"=>$choicec,"choiced"=>$choiced);
echo json_encode($overall);


?>