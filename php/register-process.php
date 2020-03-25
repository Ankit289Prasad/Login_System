<?php

require('helper.php');

$error =array();

$firstName=validate_input_text($_POST['firstName']);
if(empty($firstName)){
    $error[]="You forgot to enter your First Name";
}

$lastName=validate_input_text($_POST['lastName']);
if(empty($lastName)){
    $error[]="You forgot to enter your Last Name";
}

$email=validate_input_email($_POST['email']);
if(empty($email)){
    $error[]="You forgot to enter your Email";
}

$password=validate_input_text($_POST['password']);
if(empty($password)){
    $error[]="You forgot to enter your Password";
}

$confirm_pwd=validate_input_text($_POST['confirm_pwd']);
if(empty($confirm_pwd)){
    $error[]="You forgot to enter your Confirm Password";
}






if(empty($error)){
    echo 'Validate';
}
else{
    echo 'Not Validate';
}









?>