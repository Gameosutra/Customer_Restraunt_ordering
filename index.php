<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: main.php");
exit(); }
?>
<html>
<p>the page to redirected to after login</p>
</html>
