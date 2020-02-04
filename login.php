<?php
session_start();
include("connect.php");
$result='';
$q='';
$email='';
$password='';


if(!empty($_POST['email']) && !empty($_POST['pass']))
$q="select  * from signupform where  email='$email' && password='$pass'  ";

$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num == 1){
    $_SESSION['email']=$email;
    header('location:index.php');

}
else{
    header('location:regis.php');
}




?>