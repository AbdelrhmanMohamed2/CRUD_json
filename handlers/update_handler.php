<?php
require_once '../users/users.php';

$user_id = $_POST['id'];
$user_name = $_POST['name'];
$user_email = $_POST['email'];
$user_phone = $_POST['phone'];

updateUser($user_id, $user_name, $user_email, $user_phone);
header("location:../index.php");
