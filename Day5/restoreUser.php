<?php
if(isset($_GET["userUrlId"])){
    require "connection.php";
    $id=$_GET["userUrlId"];
    $sqlQuery=$connection->prepare("UPDATE users SET active=1  WHERE id=?");
    if($sqlQuery->execute([$id])){
        header("Location: index.php");
    }else{
        echo"Restore Failed";
        header("Refresh: 3;URL=index.php");
    }
}else{
    header("Location: index.php");
}