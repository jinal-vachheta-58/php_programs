<?php
require("validate.php");
// $name = $age = $email = $about_me = $gender = "";
// $nameerr = "";
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    //     if(!isset($_POST['submit']))
    //     {   
    //         if(!empty($_POST["name"]))
    //         {
    //             $nameerr = "name is required";
    //         }
    //         else{
    //             $name = $_POST['name'];
    //         }
    //     }
    // }
                    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    //     // Check if the form was submitted
                    //     if(isset($_POST['submit'])) {
                    //         // Validate the name field
                    //         if(!empty($_POST["name"])) {
                    //             $nameerr = "Name is required";
                    //         } else {
                    //             // Assign name value
                    //             $name = $_POST['name'];
                    //         }
                    //     }
                    // }

                    // $name = $_POST['name'];

// $name = $age = $email = $about_me = $gender = "";
// $nameerr = "";
//     if ($_SERVER["REQUEST_METHOD"] == "POST") {
//         // test_input is a user defined funtion
//         $name = test_input($_POST["name"]);
//         $age = test_input($_POST["age"]);
//         $email = test_input($_POST["email"]);
//         $about_me = test_input($_POST["about_me"]);
//         $gender = $_POST['gender'];
//     }

//     function test_input($data)
//     {
//         $data = trim($data);
//         $data = stripcslashes($data);
//         $data = htmlspecialchars($data);
//         return $data;
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM VALIDATION :</h1><BR>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST">
        name : <input type="text" name="name">
        <span class="error"><?php if(!isset($nameerr)){ echo "$nameerr"; } ?></span>
        <br><br>
        age : <input type="number" name="age"><br><br>
        email : <input type="email" name="email" id=""><br><br>
        about me : <textarea name="about_me" id="" cols="30" rows="10"> </textarea><br><br>
        <!-- gender : <input type="radio" name="gender" id="" value="male"> male -->
        <!-- <input type="radio" name="gender" id="" value="female">female<br><br> -->
        gender : <input type="radio" name="gender" id="" value="male"> male
         <input type="radio" name="gender" id="" value="female"> female<br><br>

        <input type="submit" name="submit" value="submit">
    </form>
    <?php
        // $name = $age = $email = $about_me = $gender = "";

        echo "<h2> your input :  </h2><br>";
        echo "$name <br>";
        echo "$age <br>";
        echo "$email <br>";
        echo "$about_me <br>";
        echo "$gender <br>";

    ?>
</body>
</html>