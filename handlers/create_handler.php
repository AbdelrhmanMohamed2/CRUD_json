<?php

require_once '../users/users.php';

// createUser(['name' => 'new name', 'email' => 'new@email.com', 'phone' => 55555555555555555]);
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$userData = ['name' => $name, 'email' => $email, 'phone' => $phone];

createUser($userData);

header("location:../index.php");
