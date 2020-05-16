<?php

session_start();
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,"CRdata");

 $name = $_POST['user'];
 $pass = $_POST['password'];
 $email = $_POST['email'];

 $s = "select * from registrations where username = '$name' && password = '$pass'";
 $result = mysqli_query($con, $s);

 $num = mysqli_num_rows($result);

 if($num === 1){
     $_SESSION['username'] = $name;
    header('location: home.php');
 }
 else{
    $_SESSION['username'] = $name;
    header('location: login.php');
 }


?>