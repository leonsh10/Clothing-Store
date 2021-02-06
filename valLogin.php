<?php

session_start();
// include('variables.php');
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
require_once 'userMapper.php';

if (isset($_POST['submit'])) {
    $login = new LoginLogic($_POST);
    $login->verifyData();
} 
 else {
    header("Location:login.php");
}

class LoginLogic{


    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

public function verifyData()
    {
        if ($this->vEmpty($this->username, $this->password)) {
            header('Location:login.php?error');
        } else if ($this->upCorrect($this->username, $this->password)) {
            
            header('Location:index.php');
        } 
        // else {
        //     header("Location:login.php");
        // }
    }

private function vEmpty($username, $password)
{
    if (empty($username) || empty($password)) {
        return true;
    }
    return false;
}

private function upCorrect($username, $password)
{
    $mapper = new UserMapper();
    $user = $mapper->getUserByUsername($username);
    if ($user == null || count($user) == 0) return false;
    else if (password_verify($password, $user['password'])) {
        if ($user['role'] == 1) {
            $obj = new Admin($user['id'], $user['username'], $user['password'],$user['email'], $user['role']);
            $obj->setSession();
        } else {
            $obj = new SimpleUser($user['id'], $user['username'], $user['password'],$user['email'], $user['role']);
            $obj->setSession();
        }
        return true;
    } else return false;
}

}

?>