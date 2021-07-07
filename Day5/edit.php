<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h5 class="display-5">Edit User Management System</h5>
    <?php
    require "connection.php";
    require "User.php";
    $id=$_GET["userUrlId"];
    $sqlQuery=$connection->prepare("SELECT * FROM users WHERE id=?");
    if($sqlQuery->execute([$id])){
        $data=$sqlQuery->fetchAll(PDO::FETCH_CLASS,"User");
        foreach ($data as $user){
        ?>
        <form class="row g-3" method="post" action="update.php">
            <div class="col-md-4">
                <input type="hidden" value="<?=$user->id;?>" name="id">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?=$user->name;?>" required>
            </div>
            <div class="col-md-4">
                <label for="dob" class="form-label">Date Of Birth</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="dob"  aria-describedby="inputGroupPrepend2" name="date_of_birth" value="<?=$user->date_of_birth;?>" required>
                </div>
            </div>
            <div class="col-md-6">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" value="<?=$user->city;?>" required>
            </div>

            <div class="col-md-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status" required>
                    <option value="...">...</option>
                    <option value="Married" <?= ($user->status=="Married")?"selected":"";?>>Married</option>
                    <option value="Single"<?= ($user->status=="Single")?"selected":"";?>>Single</option>
                    <option value="Divorced"<?= ($user->status=="Divorced")?"selected":"";?>>Divorced</option>
                </select>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="update">Update User</button>
            </div>
        </form>
    <?php
        }}else{
        echo"Edit Failed";
        header("Refresh: 3;URL=index.php");
    }

    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>