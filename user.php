<?php 



function getUsers()
{
    $ret = json_decode(file_get_contents('users.json'),true);
    return $ret;
}

function getUserById($id)
{
    $users_all = getUsers();
    foreach($users_all as $user)
    {
        if($user['id'] == $id)
        {
            return $user;
        }
    }
    return null;
}

function deleteUserById($id)
{
    $users_all = getUsers();
    foreach($users_all as $i => $user)
    {
        if($user['id'] == $id)
        {
            unset($users_all[$i]);
            file_put_contents('users.json',json_encode($users_all));
            return;
        }
    }
}

function updateUserById($id,$data)
{
    $users_all = getUsers();
    foreach($users_all as $i => $user)
    {
        if($user['id'] == $id)
        {
            $users_all[$i]['title'] = $data['title'];
            $users_all[$i]['museum'] = $data['museum'];
            $users_all[$i]['photo_url'] = $data['photo_url'];
        }
    }

    file_put_contents('users.json',json_encode($users_all));

}




?>