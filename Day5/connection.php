<?php
try{
    $connection=new PDO("mysql:host=localhost;dbname=umsdb","root","");
}catch (PDOException $exception){
    echo $exception->getMessage();
}

