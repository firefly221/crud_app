<?php 
    require 'user.php';

    if(!isset($_GET['id']))
    {
      echo 'NOT FOUND';
      exit;
    }

    
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']) && isset($_POST['museum']) 
        && $_FILES['photo']['error'] === 0)
    {
        $userId = $_GET['id'];
        $user = getUserById($userId);
        updateUserById($userId,$_POST);
        $tmp_name = $_FILES['photo']['tmp_name'];

        //Get the file name
        $fileName = $_FILES['photo']['name'];
        //Find a position with a dot
        $dotPosition = strpos($fileName,'.');
        //Take the substring from the dot to the end of the string
        $extension = substr($fileName,$dotPosition);


        move_uploaded_file($tmp_name,'images/' . $userId . $extension);
        header('Location: http://localhost/crudapp/index.php'); 
        exit;
    }

    


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container-sm">
    <form method="POST" action = "" enctype="multipart/form-data">
      <div class="mb-3"> 
        <label for="title" class="form-label">New Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>  
      <div class="mb-3"> 
        <label for="museum" class="form-label">Current museum</label>
        <input type="text" class="form-control" id="museum" name="museum">
      </div> 
      <div class="mb-3">
        <label for="formFile" class="form-label">Default file input example</label>
        <input class="form-control" type="file" id="formFile" name="photo">
      </div> 
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>