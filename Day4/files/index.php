<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Files Managment system</title>
</head>
<body>
    <h3>Upload Files</h3>
    <form method="post" enctype="multipart/form-data" action="<?=$_SERVER['PHP_SELF']?>">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>
    <?php
    //name,tmp_name,size
       if(isset($_FILES["file"])){
           $name=$_FILES["file"]["name"];
           $size=$_FILES["file"]["size"];
           $tmpName=$_FILES["file"]["tmp_name"];
           $arrName=explode(".",$name);
           $ext=end($arrName);
           $allowedExten=["jpg","png","jpeg","gif"];
           if(in_array($ext,$allowedExten)){
               if($size<=5242880){
                   move_uploaded_file($tmpName,"img/$name");
                   echo" <img src='img/$name' width='200px' height='200px'>";
               }else{
                   echo"your file size is more than 5 MB";
               }

           }else{
               echo"Your file is not an image";
           }

       }else{
           echo"Please Upload your file at First";
       }

    ?>

</body>
</html>
