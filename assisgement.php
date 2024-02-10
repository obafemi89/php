<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assisgenment</title>
</head>
<body>

    <?php 
        $number = -5;
        function check_number( $number ) {
            if ( $number > 0) {
                echo "$number is a positive number.";
            } elseif ( $number < 0) {
                echo "$number is a negative number.";
            } else {
                echo "The number is zero.";
            }
        }


        // create a PHP script that check if a given string contains the word "apple"
        // if it does, echo "The string contains 'apple' " 
        // otherwise, echo "The string does not contain 'apple; "
        $str = "apple";
        function check_for_apple($str) {
            if (strpos($str,"apple") !== false) {
                echo "The string contains 'apple'.";
            } else {
                echo "The string does not contain 'apple'.";
            }
        }
    
    
    ?>
    
</body>
</html>