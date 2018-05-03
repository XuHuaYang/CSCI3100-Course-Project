<?php
/*********************************************************************
 * MODULE NAME:subform
 *
 * PROCEDURE INVOCATION:
 *     CALL subform(user)
 *
 * INPUT PARAMETERS:
 *     user is the collection of information that user fill in on the sign in page
 *
 * OUTPUT PARAMETERS:
 *     Insert the user to the database
 *     If succeed in inserting it, set return string to remind success
 *     If fail in inserting it,set return string to remind failure
 *     Return the string
**********************************************************************/
	header('Access-Control-Allow-Origin:*'); 
	header('Content-Type: application/json');
    header('Content-Type: text/html;charset=utf-8');
    $FirstName = $_POST["FirstName"];
    $LastName = $_POST["LastName"];
    $Email = $_POST["Email"];
    $CreditCard = $_POST["CreditCard"];
    $Pincode = $_POST["Pincode"];
    $Password = $_POST["Password"];
    $area1 = $_POST["area1"];
    $area2 = $_POST["area2"];
    $area3 = $_POST["area3"];
    $area4 = $_POST["area4"];
    $area5 = $_POST["area5"];
    $area6 = $_POST["area6"];
    $checkexist=0;

    //vincent
    $dbservername = "localhost";
$dbusername = "root";
$dbpassword = "zwq19961228";
$dbname = "drstats";

$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);

 $sql= "INSERT INTO userinfo VALUES(\"$FirstName\",\"$LastName\",\"$Email\",$CreditCard,$Pincode,$area1,$area2,$area3,$area4,$area5,$area6,\"$Password\",150000);";


 if ($conn->query($sql) === TRUE) {

        $sqlreflect= "sign up successfully!";
     } else {
        $sqlreflect= "fail to sign up, retry " . $conn->error;
        $checkexist=1;
     }
    //vincent
    $json_arr = array("FirstName"=>$FirstName,"LastName"=>$LastName,"Email"=>$Email,"CreditCard"=>$CreditCard,"Pincode"=>$Pincode,"Password"=>$Password,"area1"=>$area1,"area2"=>$area1,"area3"=>$area1,"area4"=>$area1,"area5"=>$area1,"area6"=>$area1,"exist"=>$checkexist);
    $json_obj = json_encode($json_arr);
    echo $json_obj;
    exit;
    //file_put_contents("sub.txt","hello");
    //file_put_contents("sub.txt",json_encode($json_obj));   
?>