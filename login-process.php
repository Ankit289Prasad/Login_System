<?php

require('./helper.php');

$error=array();

$email=validate_input_email($_POST['email']);
if(empty($email)){
    $error[]="You forgot to enter your Email";
}

$password=validate_input_text($_POST['password']);
if(empty($password)){
    $error[]="You forgot to enter your Password";
}


if(empty($error)){
    $query="SELECT userID,firstName,lastName,email,password,profileImage FROM user WHERE email=?";
    $q=mysqli_stmt_init($con);
    mysqli_stmt_prepare($q,$query);

    mysqli_stmt_bind_param($q,'s',$email);

    mysqli_stmt_execute($q);

    $result=mysqli_stmt_get_result($q);

    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    if(!empty($row)){
        if(password_verify($password,$row['password'])){
            header("location:./memoria.php");
            exit();
        }else{
            print "You entered a wrong password";
        }
    }else{
        print "You are not a member please register!!";
    }

}else{
    echo "Please Fill out email and password to login!";
}

?>