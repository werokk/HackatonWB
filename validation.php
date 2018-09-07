<?php

session_start();


$con = mysqli_connect('localhost','id4813571_rocco1991','rocco1991');


mysqli_select_db($con, 'id4813571_hackatondb');

$username = $_POST ['username'];
$password = $_POST ['password'];


$s = " select * from usertable1 where username = '$username' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
$error = "username/password incorrect";

if($num == 1 ){
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if(password_verify($password, $row['password'])){
    $_SESSION['loggedin'] = true;
  $_SESSION['username']= $username;
  header('location:home.php');
}else{
    header("location: index.php");
}

}else{
         $_SESSION["error"] = $error;
    header("location: index.php");

}



 ?>
