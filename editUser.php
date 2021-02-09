<?php
include_once 'userMapper.php';
include_once 'simpleUserClass.php';
if (isset($_GET['username']) && isset($_GET['username'])) {
    $userID = $_GET['id'];
    $username = $_GET['username'];
    $email = $_GET['email'];
    $simpleUser = new SimpleUser($username, "", $email, 0);
    $mapper = new UserMapper();
    $mapper->edit($simpleUser, $userID);
    header("Location:dashboard.php");
}