<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> PHP DATA TYPES :  </h1>
    <!-- PHP supports the following data types:
    String
    Integer
    Float (floating point numbers - also called double)
    Boolean
    Array
    Object
    NULL
    Resource -->

    <?php 
        // get variable using var_dump() function
        // it returns data types and value
        $x = 5;
        var_dump($x);

        echo "<br>";
        $x = "jinal";
        var_dump($x);

        echo "<br>";
        $x = 3.3847;
        var_dump($x);

        echo "<br>";
        $x = true;
        var_dump($x);

        echo "<br>";
        $x = array("roshni" , 67, 7.987);
        var_dump($x);

        echo "<br>";
        $x = null;
        var_dump($x);
    
    ?>
</body>
</html>
<!-- 
output:
PHP DATA TYPES :
int(5)
string(5) "jinal"
float(3.3847)
bool(true)
array(3) { [0]=> string(6) "roshni" [1]=> int(67) [2]=> float(7.987) } 
NULL
-->