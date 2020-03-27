<?php

require('./helper.php');

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

$files=$_FILES['profileUpload'];
$profileImage=upload_profile('./Assets/Profile/',$files);

if(empty($error)){
    $hashed_pass=password_hash($password,PASSWORD_DEFAULT);
    require_once('mysqli_connect.php');

    $query="INSERT INTO user(userID,firstName,lastName,email,password,profileImage,registerDate)";
    $query.="VALUES('',?,?,?,?,?,NOW())";

    $q=mysqli_stmt_init($con);

    mysqli_stmt_prepare($q,$query);

    mysqli_stmt_bind_param($q,'sssss',$firstName,$lastName,$email,$hashed_pass,$profileImage);

    mysqli_stmt_execute($q);

    if(mysqli_stmt_affected_rows($q)==1){
        header('location:./login.php');
        exit;
    }
    else{
        print "Error While Registration";
    }

}
else{
    echo 'Not Validate';
}









?>