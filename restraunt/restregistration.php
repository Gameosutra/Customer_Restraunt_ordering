<?php

session_start();
header('location: restlogin.php');
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,"CRdata");

 $name = $_POST['user'];
 $pass = $_POST['password'];
 $email = $_POST['email'];
 $s = "select * from restregistrations where restusername = '$name'";
 $result = mysqli_query($con, $s);

 $num = mysqli_num_rows($result);

 if($num === 1){
         echo "username already taken";
 }else{
         $reg = "insert into restregistrations(restusername, restpassword, restemail) values ('$name','$pass','$email')";
         mysqli_query($con, $reg);
         echo "regestration successfull";
 }


?>