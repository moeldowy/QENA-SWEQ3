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
    <?php
        session_start();
        if(isset($_SESSION["username"])){
            echo"You are really Logged in";
            header("Refresh: 3;URL=app.php");
        }else{?>
            <h3>Login to Use our TODO app</h3>
            <form method="post" action="logincode.php">
                <label for="username">username</label>
                <input type="text" name="username" id="username"><br>
                <label for="password">Password</label>
                <input type="password" name="password" id="password"><br>
                <input type="submit" value="Login">
            </form>
        <?php }
    ?>

</body>
</html>
