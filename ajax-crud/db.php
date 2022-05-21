<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "ajax_crud";

$con = new mysqli($hostname, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Error connecting to server". $conn->connect_error);
// }else{
//     echo "Server connected successfully";
// }