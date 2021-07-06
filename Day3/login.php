<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Username<input type="text" name="username"><br>
        Password<input type="password" name="password"><br>
        <input type="file">
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
//$x=5;
//$arr[]=$x;
//$y=6;
//$arr[]=$y;
//arr=[$x,$y]
$arr=[];
array_push($arr,5,6,7);
array_push($arr,10);
array_shift($arr);
var_dump($arr);