<?php

const DATA_FILE = __DIR__ . '/users.json';

// ####################### get All Users ###########################
function getAllUsers()
{
    $all_users = file_get_contents(DATA_FILE);
    $all_users = json_decode($all_users, true);
    return $all_users;
}
// ##################################################


// ####################### create User ###########################
function createUser($data)
{
    $all_users = getAllUsers();
    $last_user = end($all_users);
    $last_id = $last_user['id'];

    $data['id'] = $last_id + 1;
    $all_users[] = $data;
    $all_users = json_encode($all_users);
    file_put_contents(DATA_FILE, $all_users);
}
// ##################################################


// ####################### get One User ###########################

function getOneUser($id)
{
    $all_users = getAllUsers();
    foreach ($all_users as  $user) {
        if ($user['id'] == $id) {

            return $user;
        }
    }
}
// ##################################################


// ####################### delete User ###########################
function deleteUser($id)
{
    $all_users = getAllUsers();
    foreach ($all_users as $key => $user) {
        if ($user['id'] == $id) {

            unset($all_users[$key]);

            break;
        }
    }
    $all_users = json_encode($all_users);
    file_put_contents(DATA_FILE, $all_users);
    header("location:index.php");
}
// ##################################################


// ####################### delete User ###########################
function updateUser($id, $name, $email, $phone)
{
    $all_users = getAllUsers();


    foreach ($all_users as &$user) {
        if ($user['id'] == $id) {

            $user['name'] = $name;
            $user['email'] = $email;
            $user['phone'] = $phone;


            break;
        }
    }
    $all_users = json_encode($all_users);
    file_put_contents(DATA_FILE, $all_users);
    header("location:index.php");
}
// ##################################################
