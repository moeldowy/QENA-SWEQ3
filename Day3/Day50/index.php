<?php
session_start();
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
echo "Welcome ".$_POST["username"];
?>
<a href="profile.php">Go to Profile</a>