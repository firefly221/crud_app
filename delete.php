<?php 
    require 'user.php';

    $user_id = $_GET['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if(isset($_POST['choice']))
        {
            $ans = $_POST['choice'];
            if($ans == 'YES')
            {
                deleteUserById($user_id);
               
            }
            else
            {

            }
            header("Location: http://localhost/crudapp/index.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Delete</title>
</head>
<body>
    <div class="mb-3 container-sm text-center"> 
    <h1>Are you sure?</h1>
    <form method="POST">
        <input type="hidden" value="NO" name="choice">
        <button type="submit" class="btn btn-success">No, take me back</button>
    </form>
    <hr>
    <form method="POST">
        <input type="hidden" value="YES" name="choice">
        <button type="submit" class="btn btn-danger" >Yes, delete this painting</button>
    </form>
    </div>
</body>
</html>








