<!-- conditional statements in php -->

<?php
    $x = 40;
    $y = 50;

    if($x > $y)
    {
        echo "x is larger";
    }
    elseif ($x < $y) {
        echo "y is larger";
    }
    else {
        echo "both are same";
    }
?>

<?php
    $op = "abc";
    switch($op)
    {
        case "abc":
            echo "<br>your option is $op";
            break;
        case "xyz":
            echo "<br>your option is $op";
            break;
        default:
            echo "<br>invalid option....";
    }
?>

<?php 
    echo (5 > 3) ? "<br>5 is larger...." : "<br>3 is larger";
?>