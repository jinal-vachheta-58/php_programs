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



// // insert data into database table "tb1"
// $sql_query = "CREATE TABLE `practice_db`.`tb2` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(30) NOT NULL , `mobile` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";

// $result_query = mysqli_query($conn,$sql_query);
// // die if creation of table is not successfull
// if(!$result_query)
// {
//     die("sorry we failed to create table : ". mysqli_error($conn));
// }
// else {
//     echo "<br><br>table creation successfull...";
// }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $num = "";
    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $num = $_POST["num"];

        // // insert data into database table "tb1"
$sql_query = "insert into tb1(name,mobile) values('$name','$num')";
$result_query = mysqli_query($conn,$sql_query);
// die if creation of table is not successfull
if(!$result_query)
{
    die("sorry we failed to insert data into database table : ". mysqli_error($conn));
}
else {
    echo "<br><br>insert data into database table successfull...";
}
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        NAME : <input type="text" name="name" required>
        mobile : <input type="number" name="num" id="" required>

        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>