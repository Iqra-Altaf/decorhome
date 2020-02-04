<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "signup";
$con = mysqli_connect($host,$user,$pass,$db);



if(mysqli_connect_errno()){
    die("connection failed".mysqli_connect_errno());


}

else{
    echo"Connected to database($db)";
}


?>