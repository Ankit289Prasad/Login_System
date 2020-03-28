<?php
session_start();
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
    <link rel="icon" href="./logon.ico" type="image/x-icon">
    <title>Memoria Photo Gallery</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/main1.css">
    
</head>

<?php
$user=array();
if(isset($_SESSION['userID'])){
    
    $user=get_user_info($con,$_SESSION['userID']);
}
function get_user_info($con,$userID){
    $query="SELECT firstName,lastName,email,profileImage FROM user WHERE userID =?";
    $q=mysqli_stmt_init($con);

    mysqli_stmt_prepare($q,$query);

    mysqli_stmt_bind_param($q,'i',$userID);

    mysqli_stmt_execute($q);

    $result=mysqli_stmt_get_result($q);

    $row=mysqli_fetch_array($result);
    return empty($row)?false:$row;
    
    }
    ?>
<body>
    <section id="main-site">
        <div class="container py-5">
            <div class="row">
                <div class="col-4 offset-4 shadow py-4">
                    <div class="upload-profile-image d-flex justify-content-center pb-5">
                        <div class="text-center">
                        <img class="img rounded-circle" style="width:200px; height:200px" src="<?php echo isset($user['profileImage'])?$user['profileImage']:'./Assets/Profile/beard.png'; ?>" alt="">
                        <h4 class="py-2">
                            <?php
                                if(isset($user['firstName'])){
                                    printf('%s %s',$user['firstName'],$user['lastName']);
                                }
                            ?>
                        </h4>
                        </div>
                    </div>
                    <div class="user-info px-4">
                        <ul class="font-ubuntu navbar-nav">
                                <li class="nav-link">
                                    <b>First Name: </b><span><?php echo isset($user['firstName'])?$user['firstName']:''; ?></span></li>
                                   <li class="nav-link"><b>Last Name: </b><span><?php echo isset($user['lastName'])?$user['lastName']:''; ?></span></li>
                                    <li class="nav-link"><b>Emal: </b><span><?php echo isset($user['email'])?$user['email']:''; ?></span>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include('./footer.php');
?>
