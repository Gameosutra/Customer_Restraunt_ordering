<?php

session_start();
header('location: orderitems.php');
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,"CRdata");

 $name = $_POST['username'];
 $restname = $_POST['restusername'];
 $itemname = $_POST['itemname'];
 $type = $_POST['type'];

$reg = "insert into orderitems(restusername, username, itemname, type) values ('$restname', '$name' ,'$itemname','$type')";
mysqli_query($con, $reg);
$_SESSION['value'] = "entered";
echo "order successfull";
?>