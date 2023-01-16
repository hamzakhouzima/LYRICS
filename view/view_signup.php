<?php
// include_once '../controller/signup.php';
include '../controller/signup.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post"> 
    <input type="text" name="fname" value="" placeholder="enter your first name">
    <input type="text" name="lname" value="" placeholder="enter your last name">
    <input type="email" name="email" value="" placeholder="enter your email">
    <input type="password" name="password" value="" placeholder="set a password">
    <input type="password" name="cpassword" value="" placeholder="confirm password">
    <?php
    if(isset($_SESSON['password_confirmation'])):?>
        <?php echo  $_SESSON['password_confirmation'];
        unset($_SESSON['password_confirmation']);  
    endif;
?>

    <input type="submit" name="submit" >
    <?php
    if(isset($_SESSION['signup_error'])):?>
        <?php echo  $_SESSION['signup_error'];
        unset($_SESSION['signup_error']);  
    endif;
?>

</form>


</body>
</html>