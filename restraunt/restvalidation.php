<?php

session_start();
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,"CRdata");

 $name = $_POST['user'];
 $pass = $_POST['password'];
 $email = $_POST['email'];

 $s = "select * from restregistrations where restusername = '$name' && restpassword = '$pass'";
 $result = mysqli_query($con, $s);
 $s2 = "select * from allitems where restusername = '$name'";
 $result2 = mysqli_query($con, $s2);

 $num = mysqli_num_rows($result);

 if($num === 1){
     $_SESSION['restusername'] = $name;
    header('location: resthome.php');
 }
 else{
    $_SESSION['restusername'] = $name;
     header('location: restlogin.php');
 }


?>