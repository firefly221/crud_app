<?php 

    $errors = [];
    $isValid = true;
    $title = '';
    $museum = '';
    require 'user.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST')
     {
        $title = $_POST['title'];
        $museum = $_POST['museum'];

        if(strlen($title) < 6 || strlen($title) > 30)
        {
          $errors['title'] = "Title must be between 6 and 30 characters\n";
          $isValid = false;
        }
        if(strlen($museum) < 6 || strlen($museum) > 30)
        {
          $errors['museum'] = "Museum name must be between 6 and 30 characters\n";
          $isValid = false;
        }


    if($isValid)
    {   
      
        $user['id'] = 0;
        $user['title'] = $_POST['title'];
        $user['museum'] = $_POST['museum'];
        $ID = addUser($user)['id'];

        $tmp_name = $_FILES['photo']['tmp_name'];

        //Get the file name
        $fileName = $_FILES['photo']['name'];
        //Find a position with a dot
        $dotPosition = strpos($fileName,'.');
        //Take the substring from the dot to the end of the string
        $extension = substr($fileName,$dotPosition);


        move_uploaded_file($tmp_name,'images/' . $ID . $extension);
        header('Location: http://localhost/crudapp/index.php'); 
        exit;

    }

  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new painting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container-sm">
    <form method="POST" action = "" enctype="multipart/form-data">
      <div class="mb-3"> 
        <label for="title" class="form-label">Title</label>
        <input type="text" value = "<?= $title ?>" class="form-control <?php 
        if(isset($errors['title']))
        {
          echo 'is-invalid';
        } 
        ?>" id="title" name="title">
        <div class="invalid-feedback">
          <?= $errors['title'] ?>
        </div>
      </div>  
      <div class="mb-3"> 
        <label for="museum" class="form-label">Current museum</label>
        <input  value="<?= $museum ?>" type="text" class="form-control <?php 
        if(isset($errors['museum']))
        {
          echo 'is-invalid';
        } 
        ?>" id="museum" name="museum">
        <div class="invalid-feedback">
          <?= $errors['museum'] ?>
        </div>
      </div> 
      <div class="mb-3"> 
        <label class="input-group-text" for="file">Upload</label>
        <input type="file" class="form-control <?php 
        if(isset($errors['file']))
        {
          echo 'is-invalid';
        } 
        ?>" id="file" name="photo">
        <div class="invalid-feedback">
          <?= $errors['file'] ?>
        </div>
      </div>  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>




</body>
</html>







