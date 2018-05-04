


<?php
/****************************************************************
     *MODULE NAME:connectsql
     *
     * PROCEDURE INVOCATION:
     *    CALL connectsql()
     *
     * INPUT PARAMETERS:
     *    NONE
     *
     * OUTPUT PARAMETERS:
     *    If connection to database successes,return none
     *    If connection to database fails,throw exception
    *******************************************************************/
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "zwq19961228";
$dbname = "drstats";

$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

