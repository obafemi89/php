<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php file</title>
</head>
<body>
    <?php
       
//        $firstname = "Micheal";
//        $wordCount = strlen($firstname);
//        echo "The number  of the word in  firstname in the sentence";

//        // script that prints out the amount of characters in a string
//        echo '<h1></h1>';

//        // to  convertion to  lowercase
//        echo strtolower('UPPER CASING');
//        // CONVERSTION TO UPPERCASE 
//        echo strtoupper('abc');

//        $text ='appclickpap';
//        echo '<br>';
//        echo strpos($text,'pap');
//        // returns index number of the first occurence
//        $animal = 'Hipopotamus';
//        echo strrpos($animal, 'po');
//        echo '<br>';

//        // strrpos() returns the index of the last occurence
//        echo strrpos($animal, 'po');
//        echo '<br>';

//        // strstr() find the first occurence in a string
//        echo strstr($animal, 'po');
//        echo '<br>';

//        // hot to slice a string 
//         echo substr($animal,4,4);

//         $word= 'Appclick';
//         $app ='our link';
//         // render click link
//        echo substr($word,3,5)." ". substr($app,4,4);

//        // type number
//        //integer
//        // float of double
//        // number strings

//        $number1=1500;
//        $number2=1.5;
//        $number3='5';
//        echo '<br>';

//        var_dump($number1);
//        echo '<br>';

//        var_dump($number2);
//        echo '<br>';

//        var_dump($number3);
//        echo '<br>';

//        // how to check if a number is an integer
//        echo is_int($number1);
//        echo '<br>';

//        echo is_float($number2);
//        echo '<br>';

//        // casting 
//        $number4=5;
//        $number4 = (string) $number4;

//        echo '<br>';
//        var_dump($number4);

//        // cast a string to a number

//        $number5 = '5';
//        var_dump($number5);
//        echo '<br>';
//        $number5 = (int) $number5;
//        var_dump($number5);

//        // maths method
//        echo pi();

//        // min and max
//        echo '<br>';
//        echo min(1,2,3,4,5,7,9,0);
//        echo '<br>';
//        echo max(450,800,2500);
//        echo '<br>';
//        echo abs(-4.6);
//        echo '<br>';
//        echo sqrt(64);
//        echo '<br>';
//        echo round(1.7);
//        echo '<br>';
//        echo floor(1.7);
//        echo '<br>';
//        echo ceil(1.1);
//        echo '<br>';

//        echo rand(1,100);
//        echo '<br>';

//        echo rand(20,50);

//        define("avogadro",6.02);
//        echo "................";
//        echo '<br>';
//        // squareroot
//        echo sqrt(16);
//        echo '<br>';

//        echo 4!=4;

//        $number1 =5;
//        $number2 =6;
//        echo $number1 === $number2;

//        // less than great than 

//        echo $number1 > $number2;

//        // && and
//        // ||  or
//        // !
//        echo '<br>';

//        // assigment operator 
//        $x *= 2;
//        echo $x;
//        echo '<br>';

//        // inncreament
//        $y = 4;
//        echo $y+=2;

//        // conditional statement
//        $age = 18;

//        if($age >= 17) {
//         echo "you are welcome to the party";

//     }

//     elseif ($age < 18);

//     $password = "obafemi89";
//    echo "Assuming the password is recieved via ";
//    if(strien($password) < 7){
//     echo "password should be at least 7 charaters long. try again";
//    } else {


//    }
// // write a script that validates for a score and  age 
// // score must be 70 and above and age must be 18 >

// $score = "70";
// $age = "18";
// echo "Assuming the score is recieved via";
// if($age >=18  && $score >=70) {
//     echo "you are eligible for admission";
// } else {
//     echo "score is valid. ";
// } if ($age < 18 || $age > 18 ) {
//     echo "Alert me Age is valid";
// }

// switch operator

$daysOfweek = 'sunday';

switch ($daysOfweek) {
    case 'friday':
        echo 'Junmat mubarak';
        break;
    case 'monday':
        echo 'monday motivation hustle';
        break;
    
    default:
        echo 'invalid day of the week';
        break;
}

// using switch operator give condition for odd numbers and 
// even numbers and do the same using 
// if else statement

// echo '<br>';

// $num = 9; 

// switch ($num % 2) {}
//     case '0':
//         echo '$num is an even number ';
//         break;
//     case 1; 
//     echo '$num is an odd number';
// $num = 9;
// if ($num % 2 == 0) {
//     echo "$num is an even";
// }

// echo '<br>';

$number = 6;
if($number % 2 == 0){
    echo 'number is'. $number. 'and it is even';
}else{
    echo 'number is '. $number. 'and it is odd';
}
echo '<br>';

// echo 57 % 5

// using switch
$switchnumber =3;
switch ($switchnumber) {
    case $switchnumber % 2 ==1;
        echo 'number is odd'
        break;
    
    default:
        # code...
        break;
}

// admin editor viewer 
// conditions admin has all access and all privilleges
// editor has limited access and edit the page 
// viewer can read only 

$user_role = "admin";
switch ($user_role) {
    case 'admin':
        echo "you have admin privillege";
        break;
    case "editor"
        echo "you are editor privillege ";
    case "viewe"
        echo "you have viewer privillege ";
    
    default:
        
        break;
}

// functions 

function sayHello(){
    print "somebody say hello";
}
sayHello();
sayHello();
sayHello();

// function that multiplies itself

function multiplies($number){
    return $number * $number;
};
print '<br>';
 echo multiply(2);

 // a function that convert kilometer to meter 

 function km_to_meters($kilometer){
    return $kilometers * 1000
 };
 $kilometers = 10;
 $meters = km_to_meters($kilometers);
 echo "$kilometers kilometers is equal to $meters meters.";
 
 
    
    
   








       
    ?>
    
    
</body>
</html>