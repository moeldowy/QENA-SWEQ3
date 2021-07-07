<?php
require "connection.php";
if(isset($_POST["add"])&&!empty($_POST)){
    $name=filter_var($_POST["name"],FILTER_SANITIZE_STRING);
    $date_of_birth=filter_var($_POST["date_of_birth"],FILTER_SANITIZE_STRING);
    $city=filter_var($_POST["city"],FILTER_SANITIZE_STRING);
    $status=filter_var($_POST["status"],FILTER_SANITIZE_STRING);
    $sqlQuery=$connection->prepare("INSERT INTO users (name,city,date_of_birth,status)VALUES (?,?,?,?)");
    if($sqlQuery->execute([$name,$city,$date_of_birth,$status])){
        header("Location: index.php");
    }else{
        echo"Failed Insertion";
        header("Refresh: 3;URL=index.php");
    }
}else{
    echo "Egry yala";
    header("Refresh: 3;URL=index.php");
}
