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
$sqlQuery=$connection->prepare("SELECT * FROM users WHERE active=1");
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
                       <a href="softDelete.php?userUrlId=<?= $user->id;?>"><i class="material-icons" style="color: darkred;">delete_sweep</i></a>
                       <a href="edit.php?userUrlId=<?= $user->id;?>"><i class="material-icons" style="color: #9a9a05;">edit_note</i></a>
                   </td>
               </tr>
               <?php } ?>
               </tbody>
           </table>
       </div>
   </div>
    <form class="row g-3" method="post" action="insert.php">
        <div class="col-md-4">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="col-md-4">
            <label for="dob" class="form-label">Date Of Birth</label>
            <div class="input-group">
                <input type="date" class="form-control" id="dob"  aria-describedby="inputGroupPrepend2" name="date_of_birth" required>
            </div>
        </div>
        <div class="col-md-6">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>

        <div class="col-md-3">
            <label for="status" class="form-label">Status</label>
            <select class="form-select" id="status" name="status" required>
                <option value="...">...</option>
                <option value="Married">Married</option>
                <option value="Single">Single</option>
                <option value="Divorced">Divorced</option>
            </select>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit" name="add">Add User</button>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>