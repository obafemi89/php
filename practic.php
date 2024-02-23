<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practic</title>
</head>
<body>

<h1>
    <?php
    // creating of variable by using a dollar sign
    $greeting = "Hello". " ";

        echo $greeting . "Everybody";

 // function that can calculate my age once i put in my date of birth
        function calculateAge($dateofbirth) {
            $dateofBirth = "1989-10-11";
            $age = calculateAge($dateofbirth);
            echo "you are $age years old";

        };
// Age calculate 
function Age($birth_years){
return"your Age is :". 2004 - $birth_years;
}

$author = "robert";
function nameofauthor($author) {
    return "robert";
}

 ?>
</h1>

</body>
</html>