<?php
session_start();
require_once 'userMapper.php';
require_once 'products.php';

if(isset($_POST['submit'])){
    
    $pershkrimiP=$_POST['pershkrimiProduktit'];
    $qmimiP=$_POST['qmimiProduktit'];
    $fotoP=$_POST['fotoProduktit'];
    $emriP=$_POST['emri'];
    if(verifyEmpty($emriP,$pershkrimiP,$qmimiP,$fotoP)){
    header('Location:dashboard.php?error');
}



else if (isset($_POST['submit'])) {
    $registerP = new ProductsLogic($_POST);
    $registerP->insertData();
    header('Location:dashboard.php');
}

}

function verifyEmpty($emriP,$pershkrimiP,$qmimiP,$fotoP){
    if(empty($emriP) || empty($pershkrimiP) || empty($qmimiP) || empty($fotoP))
    return true;
    return false;
}

class ProductsLogic
{
    public $emriProduktit ="";
    public $pershkrimiProduktit="";
    public $qmimiProduktit="";
    public $fotoProduktit="";

    public function __construct($formData)
    {
        
        $this->emriProduktit= $formData['emri'];
        $this->pershkrimiProduktit= $formData['pershkrimiProduktit'];
        $this->qmimiProduktit= $formData['qmimiProduktit'];
        $this->fotoProduktit= $formData['fotoProduktit'];
    }

    public function insertData()
    {
        $product = new products($this->emriProduktit,$this->pershkrimiProduktit, $this->qmimiProduktit, $this->fotoProduktit);
        $mapper = new UserMapper();
        $mapper->insertProducts($product);
        header("Location:dashboard.php");
    }
}
?>