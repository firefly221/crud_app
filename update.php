<?php 
    require 'user.php';

    if(!isset($_GET['id']))
    {
      echo 'NOT FOUND';
      exit;
    }
    

    if(isset($_POST['title']) && isset($_POST['museum']) 
        && isset($_POST['photo_url']))
    {
        $userId = $_GET['id'];
        $user = getUserById($userId);
        updateUserById($userId,$_POST);
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
    <form method="POST" action = "">
      <div class="mb-3"> 
        <label for="title" class="form-label">New Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>  
      <div class="mb-3"> 
        <label for="museum" class="form-label">Current museum</label>
        <input type="text" class="form-control" id="museum" name="museum">
      </div> 
      <div class="mb-3"> 
        <label for="photo_url" class="form-label">New photo url</label>
        <input type="text" class="form-control" id="photo_url" name="photo_url">
      </div>  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>
</html>