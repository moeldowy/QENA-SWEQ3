<?php
session_start();
echo "Welcome".$_SESSION["username"]."<br>";


if($_SESSION["username"]=="ali"&&$_SESSION["password"]==123){
    echo'<img src="img/baby.jpeg" width="250px" height="250px">';
    echo"hiiii";
}else{
    echo"there is no photo here";
}
