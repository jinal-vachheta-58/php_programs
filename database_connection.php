<?php
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


?>