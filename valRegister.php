<?php

session_start();
require_once 'userMapper.php';
include_once 'simpleUserClass.php';
include_once 'adminClass.php';
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    if(verifyEmpty($username,$password,$email) || preg_match('/^[a-zA-Z0-9]{5,30}+$/', $username) == false
    || filter_var($email, FILTER_VALIDATE_EMAIL) == false
    ){
        header('Location:register.php?error');
    }
    else if (isset($_POST['submit'])) {
        $register = new RegisterLogic($_POST);
        $register->insertData();
        header('Location:login.php');
    }
    else{
        header('Location:login.php');
    }

}
else{

}

function verifyEmpty($username,$password,$email){
    if(empty($username) || empty($password) || empty($email))
    return true;
    return false;
}

class RegisterLogic
{
    private $username = "";
    private $password = "";
    private $email = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
        $this->email = $formData['email'];
    }

    public function insertData()
    {
        $user = new SimpleUser($this->username, $this->password,$this->email,0);

        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:login.php");
    }
}

?>