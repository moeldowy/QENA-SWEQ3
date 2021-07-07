<?php
require "connection.php";
$id=$_GET["userUrlId"];
$sqlQuery=$connection->prepare("DELETE FROM users WHERE id=?");
if($sqlQuery->execute([$id])){
    header("Location: index.php");
}else{
    echo"Delete Failed";
    header("Refresh: 3;URL=index.php");
}