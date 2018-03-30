<?php

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "zwq19961228";
$dbname = "drstats";

$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);


  $nid=$_POST["nid"];
  $email=$_POST["id"];

  $sqlcheckcredit="SELECT u.credit from userinfo u where u.email=\"$email\";";
  $creditresult=$conn->query($sqlcheckcredit);
  while($row=$creditresult->fetch_assoc()){
  		$credit=$row["credit"];
  }

  if($credit>=1500){
  	$canbuy=1;
  	$sqlbuy="INSERT into bought (email,nid) values (\"$email\",\"$nid\");";
  	$conn->query($sqlbuy);
  	$sqlpay="UPDATE userinfo set credit=credit-1500 where email=\"$email\";";
  	$conn->query($sqlpay);
  	

  }
  else{
  	$canbuy=0;
  }
 
 $json_arr = array("result"=>$canbuy);
 echo json_encode($json_arr);
?>