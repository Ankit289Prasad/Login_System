<?php

function Createdb(){
    $DB_HOST="localhost";
    $DB_USER="root";
    $PASSWORD="";
    $DB_NAME="register_db";

    $con=mysqli_connect($DB_HOST,$DB_USER,$PASSWORD);

    if(!$con){
        die("Connection Failed: ".mysqli_connect_error());
    }
    $sql="CREATE DATABASE IF NOT EXISTS $DB_NAME
    COLLATE utf8mb4_general_ci";
    
    if(mysqli_query($con,$sql))
    {
        $con=mysqli_connect($DB_HOST,$DB_USER,$PASSWORD,$DB_NAME);

        $sql="CREATE TABLE IF NOT EXISTS USER(
                userID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                firstName varchar(100),
                lastName varchar(100),
                email varchar(200) not null,
                password varchar(200) not null,
                profileImage varchar(255),
                registerDate datetime
                );";

        if(mysqli_query($con,$sql)){
            return $con;
        }
        else
        {
            echo "Cannot Create table...!".mysqli_error($con);
        }
    }
    else{
        echo "Error while creating database ".mysqli_error($con);
    }
    
}

?>