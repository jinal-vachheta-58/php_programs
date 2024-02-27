<!-- // string operator -->
<?php
    $a = "hello";
    $b = $a . " world";
    echo $b;    
    # output : hello world 

    echo "<br>";
    $a = 255;
    $b = $a . " world";
    echo $b;    
    # output : 255 world

    // using assignment operators
    $a = "hello";
    echo $a."<br>";
    $a .= " this is";
    echo $a."<br>";
    $a .= " my world";
    echo $a."<br>";
    #output:
//      hello
//      hello this is
//      hello this is my world
?>