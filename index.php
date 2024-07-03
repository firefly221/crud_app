<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Museum</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php 
        require 'user.php';

        $users = getUsers();
        
        foreach($users as $user){
    ?>
        <tr>
            <td><?= $user['id'] ?></td>
            <td><?= $user['title'] ?></td>
            <td><?= $user['museum'] ?></td>
            <td>
            <a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
            <a href="update.php?id=<?= $user['id'] ?>" class = "btn btn-warning">Update</a>
            <a href="view.php?id=<?= $user['id']?>" class="btn btn-success">View</a>    
            </td>
        </tr>

    <?php 
        }
    ?>
    </tbody>
    </table>

    
</body>
</html>