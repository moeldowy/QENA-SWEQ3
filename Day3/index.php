<?php
//http/s protocol is stateless[every request has no idea about the others requests] protocol
//super global variables
//All Super Globals is Arrays
//echo $_POST[""]
//or loop
//Case sensitive all letters are capital
//data passing
/*$GLOBALS;
$_SESSION;
$_POST; is more secure than get has no limit/ for multipart form (file upload)
$_GET; is faster than post //2000 charcater
$_SERVER;
$_FILES;
$_REQUEST;
$_SESSION;
$_COOKIE;
$_ENV;*/
$x=5;
echo $x;
echo "Welcome: ".$_POST["username"];
//echo "My password is: ".$_GET["password"];
