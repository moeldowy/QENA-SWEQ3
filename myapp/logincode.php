<?php
if (isset($_POST["username"])){

    $username=$_POST["username"];
    $password=$_POST["password"];
    if($username=="ashraf"&&$password==123){
        session_start();
        echo"Welcome: ".$username;
        $_SESSION["username"]=$username;
        header("Refresh: 3;URL=app.php");
    }else{
        echo"Wrong username or password please try again";
        header("Refresh: 3;URL=index.php");
    }
}else{
    //header("Location: index.php");
    echo "You are not authorized to be here";
    header("Refresh: 3;URL=index.php");
}