<?php 

// echo $_SERVER['REQUEST_METHOD'] ;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fullname= $_POST["fullname"];
    $email= $_POST["email"];
    $password= $_POST["password"];
    $cpassword= $_POST["cpassword"];
}

echo $fullname;
echo "<br>";

echo $password;
echo "<br>";

echo $cpassword;
echo "<br>";

echo $email;
echo "<br>";

// VALIDATION
if($password !== $cpassword){
    echo "password does not match";
}
echo "<br>";
if(strlen($password <= 8)){
    echo "password match";
}else{

}
echo "<br>";
$hashpassword= password_hash($cpassword, PASSWORD_DEFAULT);
echo $hashpassword;

?>