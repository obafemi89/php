<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class work</title>
</head>
<body>
    <?php 
    
    
 // loops are used to execute a bloock of code over and over again
 // type of loop
 // for loop
 // for each
 // while loop
 // do while loop

 // for loop
 // print welcome to appclick *10

 // for (expression 1 assigment; expression 2; comparison; expression 3 increment)
 // 
 for($number = 1; $number<= 10; $number++){
    echo "welcome to appclick: '.$number". "<br>";
 }

 for($num=1; $num <=5;$num++){
    echo $num."<br>";
 }

 for($num= 30; $num <= 50; $num++){
    echo $num."<br>";
 }

 for($num = 30; $num <= 50; $num++) {
    if($num % 3 == 0) {
        echo $num . " ";
    }
 }

 echo"<br>";

 for($num = 30; $num <= 50; $num++) {
    if($num % 3 == 0 && $num % 5 == 0) {
        echo $num . " ";
    }
 }
  echo"<br>";

 // while loop 

 $age = 1;
 while($age <=10){
    echo $age;
    $age++;
 }
  echo"<br>";

 // echo numbers that are divisible by 7 between 1500 - 3600
 $num = 1500;
 while($num <= 3600) {
    if($num % 7 == 0){
        echo $num. " ";
    }
    $num++;
 }
  echo"<br>";

 // do while loop 
$a = 4;
 do{
echo  $a;
$a++;
 }while ($a <= 10);

  echo"<br>";

 // foreach loop
 $colors = array("red", "green", "blue");
 foreach($colors as $color) {
    echo $color;
 }

  echo"<br>";

 //  wite a function that generate random numbers untill a certain condition is met
 function generateRandomNumberUntillCondition($threshold) {
    $num = 0;
    $numbers = [];
    while($num <= $threshold) {
      $randomNumber = rand(1, 100);
      $numbers[] = $randomNumber;
      $num += $randomNumber;
      {
         return $numbers;
      }
    }

 }

  echo"<br>";

 // do while  loop generate number 60 down 40

 $num = 60;

 do {
   echo $num . " ";
   $num--;
 } while ($num >= 40);

 

 //  generate random number

//  function generateRandomNumbers($inputNumber) {
//    do{
//       $generateRandomNumber = rand(40,60);
//       echo "Random number generate is : ". $GenerateRandomNumber;
//    } while ($GenerateRandomNumber <= $inputNumber) ;

//  }

//Array
$ListenOfGirls = array("Desire , Titilayo, Bola, 4");

$ListOfGirls[0] = "Jessica";

var_dump($ListOfGirls);
print '<br>';
array_push($ListOfGirls, 'chiboy');
var_dump($ListOfGirls);

// associative arrays have keys and values
$footbsllers = array("chelsea" => "loto", "matthew" => "tola");
var_dump($footbsllers);
print '<br>';
echo $footballers["chelsea"];
print '<br>';

// soucek
$footbsllers["westham"] = "soucek";
print '<br>';

var_dump($footbsller);

// multidimentionals
$club = array(array('manchester', 'city'), array('chelsea', 'westham'),array(array(array('lodon'))));
print '<br>';
echo $club[2][0][0][1][0];

$listOfNumbers = [1,3,4.7];

foreach ($$listOfNumbers as $num){
   echo $num * 2 . '<br>';

}



// only multiply the even numbers by 2
$$arrayofnumbers = array(2,3,4,5,6,7,89);

foreach($arrayofnumbers as $number) {
   if($number % 2 == 0) {
      echo $number * 2;
   }
   else{
      echo $number * 3;
   }
}
  
   
      
   
   






 





 
    
    
    
    
    ?>
    
</body>
</html>