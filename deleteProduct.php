<?php
include_once 'userMapper.php';
if (isset($_GET['idProduktit'])) {
    $idProduktit = $_GET['idProduktit'];
    $mapper = new UserMapper();
    $mapper->deleteProduct($idProduktit);
    header("Location:dashboard.php");
}
?>