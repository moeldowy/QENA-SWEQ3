<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Website</title>
</head>
<body>
<form method="get" action="<?=$_SERVER['PHP_SELF']?>">
    Age<input type="text" name="age">
    <input type="submit" value="send">
</form>
<?php
//validations
//filters
//santization
//string functions
//regulaer expression
    if(isset($_GET["age"])){
          $age=$_GET["age"];
        //echo htmlspecialchars($_GET["name"]);
        $realAge=filter_var($age,FILTER_SANITIZE_NUMBER_INT);
        echo $realAge;
    }
    $name="ali";
    if(strlen($name)>10){
        //echo"leeeh abotreka";
    }else{
        //echo $name;
    };
    $names=["ali","ashraf","ahmed","khaled"];
    if(in_array($name,$names)){
            echo"ahw marmy westehm";
    }else{
        echo"la manenash";
    }

?>
</body>
</html>