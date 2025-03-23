<?php



// recieving data 

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$phone=$_POST['phone_number'];
$facebook=$_POST['facebook_url'];
$twitter=$_POST['twitter_url'];
$instagram=$_POST['instagram_url'];




// clean data

$username =htmlspecialchars(trim($username));
$password=htmlspecialchars(trim($password));
$email=htmlspecialchars(trim($email));
$phone=htmlspecialchars(trim($phone));
$facebook=htmlspecialchars(trim($facebook));
$twitter=htmlspecialchars(trim($twitter));
$instagram=htmlspecialchars(trim($instagram));



// validation

$error=[];

if (empty($username)) {
    # code...
    $error['username'] = "the username is requird";
}elseif(strlen($username) < 3) {
    # code...
    $error['username'] = "username can be not less than 3 chars";
}

if (empty($password)) {
    # code...
    $error['password'] = "the password is requird";
}elseif(strlen($password) < 4) {
    # code...
    $error['password'] = "password can be not less than 4 chars";
}


if (empty($email)) {
    # code...
    $error['email'] = "the email is requird";
}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
    # code...
    $error['email'] = "email is not vaild";
}

if (empty($phone)) {
    # code...
    $error['phone'] = "the phone is requird";
}elseif(!filter_var($phone,FILTER_VALIDATE_INT)) {
    # code...
    $error['phone'] = "the phone is not vaild";
}


if (empty($facebook)) {
    # code...
    $error['facebook'] = "the facebook is requird";
}elseif(!filter_var($facebook,FILTER_VALIDATE_URL)) {
    # code...
    $error['facebook'] = "the facebook is not vaild";
}

if (empty($twitter)) {
    # code...
    $error['twitter'] = "the twitter is requird";
}elseif(!filter_var($twitter,FILTER_VALIDATE_URL)) {
    # code...
    $error['twitter'] = "the twitter is not vaild";
}

if (empty($instagram)) {
    # code...
    $error['instagram'] = "the instagram is requird";
}elseif(!filter_var($instagram,FILTER_VALIDATE_URL)) {
    # code...
    $error['instagram'] = "the instagram is not vaild";
}



if (count($error) > 0) {
    # code...
    session_start();
    $_SESSION['user_error'] = $error;
    header("location:http://localhost/php-task/users.php");
}else{
    
    header("location:http://localhost/php-task/index.php");
}