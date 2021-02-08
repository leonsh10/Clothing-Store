<?php
include_once 'userMapper.php';
include_once 'simpleUserClass.php';
if (isset($_GET['username']) && isset($_GET['username'])) {
    $userId = $_GET['id'];
    $username = $_GET['username'];
    $email = $_GET['email'];
    $simpleUser = new SimpleUser($username,$email);
    $mapper = new UserMapper();
    $mapper->edit($simpleUser, $userId);
    header("Location:dashboard.php");
}