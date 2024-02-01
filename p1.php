<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> php variables </h1>
    <?php

    // in php variable ($) sign is must
    // we can put variables inside quotation and outside quotation
    // no need of variable declaration statement
    $text = "php";
    echo "i love $text<br>"; 

    // echo phpversion();

    // php variables are case sensitive
    //ex. $COLOR is not same as #color :
    // use of undefined variable will create an error
    // When you assign a text value to a variable, put quotes around the value.
    $color = "red";
    $COLOR = "purple";
    $coLOR = "YELLOW";
    
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";

    // php variables can be used for arithmatic opertions
    // redeclaration is possible php variables
    $x = 5;
    $y = 4;
    $x = 10;
    echo "<br>sum of x and y is = " . $x + $y;
    ?>
</body>
</html>

<!-- output:
php variables
i love php
8.0.30
My car is red
My house is purple
My boat is YELLOW

sum of x and y is = 14
 -->