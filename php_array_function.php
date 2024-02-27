<!-- array functions -->
<!-- 
sizeof
in_array()
array_search()
count
list
current
next
previous
end
each

 -->

 <?php
    $a = ["jinal","krisha","aasima","khushi"];
    print_r($a);
    echo "<br>";
    echo "<br>";
    
//__________________________________________
    echo "total element of array : ".count($a);  
    // ans 4
    echo "<br>";
    echo "<br>";
    //_______________________________________
    echo "total size of array : ".sizeof($a);  
    // ans 4
    echo "<br>";
    echo "<br>";
    //_______________________________________

    $a = ["jinal","krisha","aasima","khushi"];
    echo "value is found : ".in_array("krisha",$a); 
    // if value exists than returns 1 or 0
    echo "<br>";
    echo "<br>";
    //_______________________________________
    echo "value is found at position : ".array_search("khushi",$a);
    echo "<br>";
    echo "<br>";

    //_______________________________________
    $info=array('coffee', 'brown', 'caffeine');
    // Listing all the variables

    list($drink, $color, $power) = $info;
    echo "$drink is $color and $power makes it special.";

    echo "<br>";
    echo "<br>";

    //_______________________________________
    $info = array('coffee', 'brown', 'caffei
    ne');
    list($a[0], $a[1], $a[2]) = $info;
    var_dump($a);

    //_______________________________________
    //Return the current element in an array.

    $transport = array('foot', 'bike', 'car', 'plane');
$mode = current($transport); // $mode = 'foot';
$mode = next($transport); // $mode = 'bike';
$mode = current($transport); // $mode = 'bike';
$mode = prev($transport); // $mode = 'foot';
$mode = end($transport); // $mode = 'plane';
$mode = current($transport); // $mode = 'plane';

$arr = array();
var_dump(current($arr)); // bool(false)

$arr = array(array());
var_dump(current($arr)); // array(0) { }
//________________________________________

// sorting of array
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
echo "fruits[" . $key . "] =" . $val. "\n";
}

//_________________________________________
$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
echo "$key = $val\n";
}

//________________________________________
// merge arrays one or more
//return an array
$beginning = 'foo';
$end = array(1 => 'bar');
$result = array_merge((array)$begin
ning, (array)$end);
print_r($result);

///________________________________________
// reverse an arrays 
//return an array
$input = array("php", 8.0, array("gre
en", "red"));
$result = array_reverse($input);
$result_keyed = array_reverse($inpu
t, true);

 ?>