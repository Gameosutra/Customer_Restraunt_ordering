<?php

session_start();
header('location: login.php');
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,"CRdata");

 $name = $_POST['user'];
 $pass = $_POST['password'];
 $email = $_POST['email'];
 $pref = $_POST['pref'];
 $s = "select * from registrations where username = '$name'";
 $result = mysqli_query($con, $s);

 $num = mysqli_num_rows($result);

 if($num === 1){
         echo "username already taken";
 }else{
         $reg = "insert into registrations(username, password, email, preference) values ('$name','$pass','$email','$pref')";
         mysqli_query($con, $reg);
         echo "regestration successfull";
 }


?>