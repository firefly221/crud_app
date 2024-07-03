<?php 

    if(isset($_POST['title']) && isset($_POST['museum']) 
        && $_FILES['file']['error'] == 0)
    {   
        
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
    <form method="POST" action = "">
      <div class="mb-3"> 
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>  
      <div class="mb-3"> 
        <label for="museum" class="form-label">Current museum</label>
        <input type="text" class="form-control" id="museum" name="museum">
      </div> 
      <div class="mb-3"> 
        <label class="input-group-text" for="file">Upload</label>
        <input type="file" class="form-control" id="file" name="photo">
      </div>  
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>




</body>
</html>







