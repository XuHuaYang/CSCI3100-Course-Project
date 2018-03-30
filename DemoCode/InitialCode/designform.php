<?php

	$dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "zwq19961228";
    $dbname = "drstats";

    $conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

$email=$_POST["email"];
$type=$_POST["type"];
$numberofquestion=$_POST["numberofquestion"];
$ntitle=$_POST["ntitle"];
$qtitle=$_POST["qtitle"];
$choicea=$_POST["choicea"];
$choiceb=$_POST["choiceb"];
$choicec=$_POST["choicec"];
$choiced=$_POST["choiced"];


$sqlcheckcredit="SELECT u.credit from userinfo u where u.email=\"$email\";";
$creditresult=$conn->query($sqlcheckcredit);
while($row=$creditresult->fetch_assoc()){
	$credit=$row["credit"];
}

if($credit>=1500){
  $canrelease=1;

#get the credit deducted
  $sqlpay="UPDATE userinfo set credit=credit-1500 where email=\"$email\";";
  $conn->query($sqlpay);

  #insert the questionnaire into the datebase
  $sqlinsertquestionnaire="INSERT into questionnaire (title,finished,type,people) values (\"$ntitle\",0,$type,0);";
  $conn->query($sqlinsertquestionnaire);


#get nid of the questionnaire just inserted
  $sqlgetnid="SELECT max(n.nid) from questionnaire n; ";
  $nidresult=$conn->query($sqlgetnid);
  while($row=$nidresult->fetch_assoc()){
  	$nid=$row["max(n.nid)"];
  }

#insert the new release relation into the database
  $sqlinsertrelease="INSERT into releases (email,nid) values (\"$email\",$nid)";
  $conn->query($sqlinsertrelease);

  $i=0;
  while($i<$numberofquestion){
  	$sqlinsertquestion="INSERT into question (nid,title,choicea,choiceb,choicec,choiced,acount,bcount,ccount,dcount) values ($nid,\"$qtitle[$i]\",\"$choicea[$i]\",\"$choiceb[$i]\",\"$choicec[$i]\",\"$choiced[$i]\",0,0,0,0);";
  	$conn->query($sqlinsertquestion);
  	$i=$i+1;
  }

}
else{
	$canrelease=0;
}


$json_arr = array("result"=>$canrelease);

echo json_encode($json_arr);




?>