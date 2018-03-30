


<?php
$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "zwq19961228";
$dbname = "drstats";

$conn = mysqli_connect($dbservername,$dbusername,$dbpassword,$dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

