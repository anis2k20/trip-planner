<?php 
error_reporting(0);

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "tripplanner";
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// if(!$conn){
//     echo "Connection failed: ".mysqli_connect_error();
// }
// else {
//     echo "Connection successful";
// }

?>