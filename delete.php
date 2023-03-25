<?php
require_once 'users/users.php';

$user_id = $_GET['id'];

deleteUser($user_id);
