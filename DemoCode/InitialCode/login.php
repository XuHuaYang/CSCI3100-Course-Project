<?php
/*********************************************************************
 * MODULE NAME:login
 *
 * PROCEDURE INVOCATION:
 *     CALL login(userEmail,password)
 *
 * INPUT PARAMETERS:
 *     userEmail,password
 *
 * OUTPUT PARAMETERS:
 *     IF userEmail matches the password in the database
 *        Then marks login status successful
 *     If userEmail does not match the password in the databse or can not find user with the userEmail in the database
 *        Then marks login status failed
 *     Return the login status 
**********************************************************************/
    header('Content-Type: application/json');
    header('Content-Type: text/html;charset=utf-8');
	$Email = $_POST["Email"];
    $password = $_POST["password"];
    

    //vincnet
    $dbservername = "localhost";
$dbusername = "root";
$dbpassword = "zwq19961228";
$dbname = "drstats";

$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);


$sql= "select u.email from userinfo u where u.email=\"$Email\" and u.password=\"$password\";";

$sqlresult=mysqli_query($conn, $sql);
$result=$sqlresult->num_rows;

    //vincent
    $json_arr = array("msg"=>$result);
    echo json_encode($json_arr);
    exit;
?>