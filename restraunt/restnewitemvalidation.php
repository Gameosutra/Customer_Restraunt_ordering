<?php

session_start();
header('location: viewitems.php');
 $con = mysqli_connect('localhost','root','');

 mysqli_select_db($con,"CRdata");

 $name = $_POST['username'];
 echo '<script>console.log("'.$name.'")</script>';
 $itemname = $_POST['itemname'];
 $type = $_POST['type'];
 $s = "select * from allitems where itemname = '$itemname'";
 $result = mysqli_query($con, $s);

$reg = "insert into allitems(username, itemname, type) values ('$name','$itemname','$type')";
mysqli_query($con, $reg);
echo "item added successfully";
 


?>