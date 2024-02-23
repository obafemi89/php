<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

function generatePassword($length = 12) {
// define character sets
    $upperCase ="O";
    $lowerCase ="latude";
    $symbols = "@";
    $numbers = "89";

// concatenate all character sets
$characters = $upperCase . $lowerCase . $symbols . $numbers;

// shuffle the characters randomly
$shuffled_chars = str_shuffle("$characters");

// Ensure at least one character from each set
$password =  substr(str_shuffle($upperCase), 0, 1). substr(str_shuffle($lowerCase), 0, 1).
substr(str_shuffle($symbols), 0, 1). substr(str_shuffle($numbers), 0, 1).
substr($shuffled_chars, 0, $length -0);

$password = str_shuffle($password);

return $password;

}
$password = generatePassword();
echo $password
?>

</body>
</html>