<?php
require_once("mysqli_connect.php");
$con=Createdb();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable-no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="rgba(24, 229, 236, 0.589)">
    <link rel="icon" href="./logn.ico" type="image/x-icon">
    <title>Memoria Photo Gallery Login</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/main1.css">
    
</head>
<body>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    require('login-process.php');
}

?>
    <section id="login-form" style="background:url('./Assets/background1.png') no-repeat;margin-top:-10px; padding: 6.5% 0; background-size: cover;">
        <div class="row m-0">
            <div class="col-lg-4 offset-lg-2">
                <div class="text-center pb-5">
                <h1 class="login-title text-dark">Login</h1>
                <p class="p-1 m-1 font-ubuntu text-black-50" style="font-size: 80%; ">Login and Enjoy Memoria</p>
                <span class="font-ubuntu text-black-50"style="font-size: 90%">Create a new Account <a href="./index.php">Sign Up</a></span>
                </div>
                <div class="upload-profile-image d-flex justfy-content-center pb-0" style="left:-70px;position: relative;top:-30px;width: 10%;margin-left: auto;margin-right: auto;transition: filter .8s ease;">
                    <div class="text-center">
                    <img src="Assets/Profile/beard.png" style="width:150px; height:150px; "  class="img rounded-circle mx-3" alt="default-profile">
                   </div>
                </div>
                <div class="d-flex justify-content-center">
                    <form action="login.php" method="POST" enctype="multipart/form-data" id="log-form">
                        <div class="form-row " style="margin-top: 11px;width:150%;">
                            <div class="col">
                                <input type="email"required name="email" id="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-row " style="margin-top: 11px;width:150%;">
                            <div class="col">
                                <input type="password"required name="password" id="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <div class="submit-btn text-center pt-5 ">
                            <button type="submit" class="btn btn-warning rounded-pill text-dark px-5 enableOnInput" style="justify-content: center" id="button1">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
    include('./footer.php');
?>