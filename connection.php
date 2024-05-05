<?php
$servername ="localhost";
$userName = "root";
$password = "";
$db_name = "login database";
$conn = new mysqli($servername, $userName, $password, $db_name, 3306);
if($conn->connect_error){
    die("Connection Failed".$conn->connect_error);
}
echo "";
?>