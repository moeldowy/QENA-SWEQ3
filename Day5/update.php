<?php
if(isset($_POST["update"])){
    require "connection.php";
    $id=$_POST["id"];
    $name=filter_var($_POST["name"],FILTER_SANITIZE_STRING);
    $date_of_birth=filter_var($_POST["date_of_birth"],FILTER_SANITIZE_STRING);
    $city=filter_var($_POST["city"],FILTER_SANITIZE_STRING);
    $status=filter_var($_POST["status"],FILTER_SANITIZE_STRING);
    $sqlQuery=$connection->prepare("UPDATE users SET name=?,city=?,date_of_birth=?,status=?  WHERE id=?");
    if($sqlQuery->execute([$name,$city,$date_of_birth,$status,$id])){
        header("Location: index.php");
    }else{
        echo"Delete Failed";
        header("Refresh: 3;URL=index.php");
    }
}else{
    header("Location: index.php");
}