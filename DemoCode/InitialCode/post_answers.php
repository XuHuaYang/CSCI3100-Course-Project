<?php

$dbservername = "localhost";
    $dbusername = "root";
    $dbpassword = "zwq19961228";
    $dbname = "drstats";

    $conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

$email=$_POST["id"];
$nid =$_POST["nid"];
$answers =$_POST["answers"];

$sqlfetch="SELECT q.qid from question q where q.nid=$nid; ";

$qidresult=$conn->query($sqlfetch);

$number=0;






#questionnaire people+1
    	$sqlpeopleadd="UPDATE questionnaire set people=people+1 where nid=$nid;";
    	$conn->query($sqlpeopleadd);



while($row = $qidresult->fetch_assoc()){
	$qid=$row["qid"];
	
	
    	#question people +1
    	$ans=$answers[$number];
    	if($ans=="a"){
    		$sqlinsert="UPDATE question set acount=acount+1 where qid=$qid;";
    		$conn->query($sqlinsert);
    		
    		    	}
    	if($ans=="b"){
    		$sqlinsert="UPDATE question set bcount=bcount+1 where qid=$qid;";
    		$conn->query($sqlinsert);
    	}
    	if($ans=="c"){
    		$sqlinsert="UPDATE question set ccount=ccount+1 where qid=$qid;";
    		$conn->query($sqlinsert);
    		
    	}
    	if($ans=="d"){
    		
    		$sqlinsert="UPDATE question set dcount=dcount+1 where qid=$qid;";
    		$conn->query($sqlinsert);
    	}
    	
    	



	 $number=$number+1;
}




$sqlgetcredit="UPDATE userinfo set credit=credit+2 where email=\"$email\";";
$conn->query($sqlgetcredit);


#check if the questionnaire is full, if so, change the type to finished 
$sqlcheckfinished="SELECT n.people from questionnaire n where n.nid=$nid;";
$peopleresult=$conn->query($sqlcheckfinished);
while($row=$peopleresult->fetch_assoc()){
	$peoplenumber=$row["people"];
}

if($peoplenumber>=500){
	$sqlfinish="UPDATE questionnaire set finished=1 where nid=$nid;";
	$conn->query($sqlfinish);
}


?>