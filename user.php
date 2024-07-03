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
    if(in_array($id,$users_all) == false)
    {
        $users_all[$id]['id'] = $id;
    }
    foreach($users_all as $i => $user)
    {
        if($user['id'] == $id)
        {
            $users_all[$i]['title'] = $data['title'];
            $users_all[$i]['museum'] = $data['museum'];
        }
    }

    file_put_contents('users.json',json_encode($users_all,JSON_PRETTY_PRINT));

}

function addUser($newUser)
{
    $newUser['id'] = rand(100000,200000);
    
    updateUserById($newUser['id'],$newUser);

    return $newUser;
}




?>