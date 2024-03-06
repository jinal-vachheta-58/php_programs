<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .error{
            color : red;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
    $nameerr = $emailerr = $gendererr =  "";
    $name = $email = $gender = $about_me = $age = "";
    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {

        //VALIDATE NAME 
        if(empty($_POST["name"]))
        {
            $nameerr = "name is required...";
        }
        else{
            $name = test_input($_POST["name"]);
            if(!preg_match("/^[a-zA-Z ']*$/",$name))
            {
                $nameerr = "only letters and white spaces are allowd";
            }
        }
        
        // VALIDETE EMAIL 
        if (empty($_POST["email"])) {
            $emailerr = "email address is required...";
        }
        else {
            $name = test_input($_POST["email"]);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $emailerr = "Enter valid email...";
            }
        }
        
        // CHECK IF comment IS EMPTY OR NOT
        if (empty($about_me)) {
            $about_me = "";
        }
        else{
            $about_me = test_input($_POST["about_me"]); 
        }

        // CHECK IF age IS EMPTY OR NOT
        // age is not necessary
        if (empty($age)) {
            $age = "";
        }
        else{
            $age = test_input($_POST["age"]);
        }

        // CHECK IF GENDER IS EMPTY OR NOT
        if (empty($_POST["gender"])) {
            $gendererr = "gender is required...";
        }
        else{
            $gender = test_input($_POST["gender"]); 
        }

        
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    

<h1>FORM VALIDATION :</h1><BR>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="POST">
    name : <input type="text" name="name">
    <span class="error"><?php if(isset($nameerr)){ echo "$nameerr"; }else {
        # code...
    } ?></span>
    <br><br>
    age : <input type="number" name="age"><br><br>
    
    email : <input type="email" name="email" id=""><br><br>
    <span class="error"><?php if(isset($emailerr)){ echo "$emailerr"; } ?></span>

    about me : <textarea name="about_me" id="" cols="30" rows="10"> </textarea><br><br>
    <!-- gender : <input type="radio" name="gender" id="" value="male"> male -->
    <!-- <input type="radio" name="gender" id="" value="female">female<br><br> -->
    gender : <input type="radio" name="gender" id="" value="male"> male
    <input type="radio" name="gender" id="" value="female"> female<br><br>
    <span class="error"><?php if(isset($gendererr)){ echo "$gendererr"; } ?></span>
    <input type="submit" name="submit" value="submit">
</form>

<?php

echo "<h2> your input :  </h2><br>";
echo "$name <br>";
echo "$age <br>";
echo "$email <br>";
echo "$about_me <br>";
echo "$gender <br>";

?>
</body>
</html>