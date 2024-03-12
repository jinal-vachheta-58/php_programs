<!-- // create db using php -->
<?php
//connecting server...
$server = "localhost";
$username = "root";
$password = "";
$database = "";

$conn = mysqli_connect($server,$username,$password);
// die if connection is not successfull
if(!$conn)
{
    die("sorry we failed to connect: ". mysqli_connect_error());
}
else {
    echo "<br><br>connection success full...";
}


// making database...
$sql_query = "CREATE DATABASE practice_db";

$result_query = mysqli_query($conn,$sql_query);
// die if creation of database is not successfull
if(!$result_query)
{
    die("sorry we failed to create database : ". mysqli_error());
}
else {
    echo "<br><br>database creation successfull...";
}

?>
