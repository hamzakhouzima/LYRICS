<?php
// include_once '../controller/login.php';

include '../controller/login.php';






// if(isset($_SESSION['password_error'])){

//     echo $_SESSION['password_error'];
//     unset($_SESSION['password_error']);
   

// }else{

//     echo 'nice';
    
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<form method="post" > 
    <input type="email" name="log_email" value="" placeholder="enter your email">
    <?php
    if(isset($_SESSION['email_error'])):?>
        <?php echo $_SESSION['email_error'] ;
        unset($_SESSION['email_error']);  
    endif;
?>

    
    <input type="password" name="log_password" value="" placeholder="set a password">
    <?php
    if(isset($_SESSION['password_error'])):?>
        <?php echo $_SESSION['password_error'] ;
            unset($_SESSION['password_error']);  
    endif;
?>
    <input type="submit" name="submit">
</form>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>