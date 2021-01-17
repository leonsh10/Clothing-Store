<?php

session_start();

require 'variables.php';

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    // if(verifyEmpty($username,$password)){
    //     header('Location:login.php');
    // }
    if(verifyLogin($username,$password)){
            header('Location:index.php');
    }
    else{
        header("Location:index.php");
}
}
else{
    header("Location:index.php");
}


function verifyEmpty($username,$password){
    if(empty($username) || empty($password))
    return true;
    return false;
}

function verifyLogin($username,$password){
    global $users;
    foreach($users as $user){
    if($user['username'] == $username &&
     $user['password']==$password ){
         $_SESSION['role']=$user['role'];
         return true;
     }
}
return false;
}

?>