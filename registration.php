<?php

session_start();



$con = mysqli_connect('localhost','id4813571_rocco1991','rocco1991');


mysqli_select_db($con, 'id4813571_hackatondb');

$username = $_POST ['username'];
$password = $_POST ['password'];
$password1 = $_POST ['password1'];
$email =  $_POST ['email'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];

$hashed_password = password_hash($password, PASSWORD_DEFAULT);



$s = " select * from usertable1 where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result); 


if($num == 1){
$message1 = "Username already taken";
echo "<script type='text/javascript'>alert('$message1');</script>";
}elseif($password != $password1 || $password == ""){
//     $message = "Username and/or Password incorrect.\\nTry again.";
//   echo "<script type='text/javascript'>alert('$message');</script>";
    //  alert("Oops! Password did not match or empty Try again. ");
 }else{
     mkdir("Images/$username", 0777, true);
move_uploaded_file($image_tmp,"Images/$username/$image");
  $reg= "insert into usertable1(username, password, email,imagename) values ('$username', '$hashed_password', '$email','$image')";
  mysqli_query($con, $reg);
  
  echo "registration successfull";
  
}



 ?>
 <script>
function myFunction() {
    alert("Oops! Password did not match or empty Try again!");
}
</script>
