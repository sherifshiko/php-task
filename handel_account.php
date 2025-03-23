<?php

// receiving data

$email=$_POST['email'];
$password=$_POST['password'];

// clean data

$email=htmlspecialchars(trim($email));
$password=htmlspecialchars(trim($password));

// validation

$error=[];

if (empty($email)) {
    # code...
    $error['email'] = "the Email is requird <br>";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    $error['email'] = "email is not vaild ..!";
}

if (empty($password)) {
    # code...
    $error['password'] = "the password is required <br>";
}elseif (strlen($password) < 4) {
    # code...
    $error['password'] = "password can not be less than 4 chars";
}

if (count($error) > 0) {
    # code...
    session_start();
    $_SESSION['validation_error'] = $error;
    header("location:http://localhost/php-task/account.php");

}else{
    header("location:http://localhost/php-task/all-products.php");
}

?>
