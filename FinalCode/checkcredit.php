<?php
/*********************************************************************
 * MODULE NAME:checkcredit
 *
 * PROCEDURE INVOCATION:
 *     CALL checkcredit(nid,id,canbuy)
 *
 * INPUT PARAMETERS:
 *     nid is the questionnaire the user wants to buy
 *     id is the identification of the user in the database
 *     so input is nid and id
 *
 * OUTPUT PARAMETERS:
 *     IF user's credit >= 1500, user can buy the questionnaire data,
 *         consume the credit, return flag canbuy = 1
 *     ELSE user can not buy the questionnaire, return flag canbuy = 0
 *     Return the flag canbuy
**********************************************************************/
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