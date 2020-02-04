<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "registration form";
    $con = mysqli_connect($host,$user,$pass,$db);
    //Checking error connectivity
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
?>