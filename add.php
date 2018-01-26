<?php

include 'vendor/autoload.php';

$firstName = $_POST['first_name'];
$lastName = $_POST['last_name'];
$email = $_POST['email'];

$user = new \Classes\User();
$user->setFirstName($firstName);
$user->setLastName($lastName);
$user->setEmail($email);
if ($user->insert()) {
    header('location:list.php');

}
