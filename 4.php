<!-- 
loop statements
1) for loop
2) while loop
3) do while loop
4) foreach loop
and break and continue statements
 -->

<?php
// for loop 
echo "<br>for loop.......<br>";
    for($i = 1; $i<= 10 ;$i++)
    {
        if($i == 6)
        {
            break;
        }
        echo "Iteration $i <br>";
    }

// while loop
echo "<br>while loop.......<br>";
$i = 1;
while ($i <= 10)
{
    if($i == 3)
        {
            echo "this is third iteration<br>";
            $i++;
            continue;
        }
    echo "Iteration $i <br>";
    $i++;
}

// do while loop
echo "<br>do while loop.......<br>";
$i = 1;
do{
    echo "  Iteration no. $i";

}while($i != 1);
echo "<br> outside of do while loop";

// foreach loop (ex 1)
echo "<br><br>";
echo "<br>foreach loop (ex 1).......";
$arr = array("jinal","aasima", "khushi" ,"krisa"); 
foreach ($arr as $a) {
    echo "<br>$a";
}

// foreach loop (ex 2)
echo "<br><br>foreach loop (ex 2).......";
$a = range(1,6);
foreach ($a as $range_values) {
    echo "<br> $range_values";
}
?>

<!-- OUTPUT: 

for loop.......
Iteration 1
Iteration 2
Iteration 3
Iteration 4
Iteration 5

while loop.......
Iteration 1
Iteration 2
this is third iteration
Iteration 4
Iteration 5
Iteration 6
Iteration 7
Iteration 8
Iteration 9
Iteration 10

do while loop.......
Iteration no. 1
outside of do while loop


foreach loop (ex 1).......
jinal
aasima
khushi
krisa

foreach loop (ex 2).......
1
2
3
4
5
6 -->