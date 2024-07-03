<?php 
    require 'user.php';



    if(isset($_GET['id']))
    {
        $user_id = $_GET['id'];
        $user_data = getUserById($user_id);
    }



    if($user_data == 0)
    {
        echo 'NOT FOUND';
        exit;
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class = "p-3 mb-2 bg-dark-subtle text-dark-emphasis">

    <div class="container text-center border border-0">
        <h2>You are viewing <?= $user_data['title'] ?></h2>
        <h3>It's currently in <?= $user_data['museum'] ?></h3>
        <img src="images/<?= $user_data['id'] ?>.jpg"  class="img-fluid" width="400px">
    </div>
    
</body>
</html>