<?php 
// hostname
// username
// password
// database name

$postname ="localhost";
$username = "root";
$password = "";
$database = "january";

$conn = new mysqli("$hostname","$username","$password","$database");

if($conn -> connect_error){
    die("connection failed". $conn -> connect_error);
}

?>