<?php
    $servername ="localhost";
    $username = "root";
    $password = "";
    $database = "studentform";



$conn = new mysqli( $servername, $username, $password, $database);
if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error );
}
$stnt = $conn->prepare("INSERT INTO form (name, address, phone, gender, age, course) VALUES (?, ?, ?, ?, ?, ?)");
$stnt->bind_param("ssssis", $name, $address, $phone, $gender, $age, $course);



if($_SERVER["REQUEST_METHOD"]=="POST"){
$name =$_POST["name"];
$address =$_POST["address"];
$phone =$_POST["phone"];
$gender =$_POST["gender"];
$age =$_POST["age"];
$course =$_POST["course"];}

// $stmt->execute();

echo"New record created successfully";
$stnt->close();
$conn->close();


?>