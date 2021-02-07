<?php
include_once 'userMapper.php';
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];
    $mapper = new UserMapper();
    $mapper->deleteUser($userId);
    header("Location:dashboard.php");
}
?>