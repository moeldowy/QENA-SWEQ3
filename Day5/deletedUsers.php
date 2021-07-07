<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
<?php
require "User.php";
require "connection.php";
$sqlQuery=$connection->prepare("SELECT * FROM users WHERE active=0");
$sqlQuery->execute();
$users=$sqlQuery->fetchAll(PDO::FETCH_CLASS,"User");

?>
<div class="container">
    <?php
    include "Menu.php";
    ?>
    <h5 class="display-5">Users Management System</h5>
    <div class="row">
        <div class="col">
           <?php
           if(!empty($users)){?>
               <table class="table table-success table-striped">
                   <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">Name</th>
                       <th scope="col">City</th>
                       <th scope="col">Age</th>
                       <th scope="col">Status</th>
                       <th scope="col">Manage</th>
                   </tr>
                   </thead>
                   <tbody>
                   <?php foreach ($users as $user){?>
                       <tr>
                           <th scope="row"><?= $user->id;?></th>
                           <td><?= $user->name;?></td>
                           <td><?= $user->city;?></td>
                           <td><?= $user->age;?></td>
                           <td><?= $user->status;?></td>
                           <td>
                               <a onclick="return confirm('Are your need to delete that user?')" href="delete.php?userUrlId=<?= $user->id;?>"><i class="material-icons" style="color: darkred;">delete_sweep</i></a>
                               <a href="restoreUser.php?userUrlId=<?= $user->id;?>"><i class="material-icons" style="color: darkgreen;">settings_backup_restore</i></a>
                           </td>
                       </tr>
                   <?php } ?>
                   </tbody>
               </table>
           <?php }else{
               echo"No Deleted users Here!";
               header("Refresh: 3;URL=index.php");
           }
           ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>