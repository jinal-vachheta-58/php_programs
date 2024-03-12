<!-- // create db using php -->
<?php
//connecting server...
$server = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($server,$username,$password);
// die if connection is not successfull
if(!$conn)
{
    die("sorry we failed to connect: ". mysqli_connect_error());
}
else {
    echo "<br><br>connection success full...";
}

// connecting database...
$database = "practice_db";

$result_select_db = mysqli_select_db($conn,$database);
// die if selection of database is not successfull
if(!$result_select_db)
{
    die("sorry we failed to select database : ". mysqli_error($conn));
}
else {
    echo "<br><br>database selection successfull...";
}

// // selecting and displaying data of table
$sql_query = "select * from tb1";
$result_query = mysqli_query($conn,$sql_query);

$num_row = mysqli_num_rows($result_query);

// die if creation of table is not successfull
// if(!$result_query)
// {
//     die("sorry we failed to insert data into database table : ". mysqli_error($conn));
// }
// else {
//     echo "<br><br>insert data into database table successfull...";
// }

if ($num_row > 0) {
    while ($result = mysqli_fetch_assoc($result_query)) {
        echo "<br>";
        // print_r($result);
        echo "id : " . $result['id'] ."  ||  name : " . $result['name'] . "  ||  mobile : ".$result['mobile']; 
        // echo $result;
    }
}

?>