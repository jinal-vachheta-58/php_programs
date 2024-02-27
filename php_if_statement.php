<?php
$a = 3;
$b = 10;

if ($a < $b) {
    echo "a is smaller<br>";
}

if ($a == $b) {
    echo "a and b is equal<br>";
}


// string comparison with different data type
$a = 3;
$b = "3";

if ($a == $b) {
    echo "a and b is equal but in different data types <br>";
}

// strict comparison
$a = 3;
$b = "3";

if ($a === $b) {
    echo "a and b is not equal because of different data types <br>";
}

?>