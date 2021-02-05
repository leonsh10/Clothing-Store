<?php

session_start();
//dsfsdfsdfdsfsd
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    if(verifyEmpty($username,$password,$email)){
        header('Location:register.php?error');
    }
    else{
        header('Location:login.php');
    }
    // else if(verifyLogin($username,$password,$email)){
    //         header('Location:login.php');
    // }

}
else{

}

function verifyEmpty($username,$password,$email){
    if(empty($username) || empty($password) || empty($email))
    return true;
    return false;
}

// function verifyLogin($username,$password){
//     global $users;
//     foreach($users as $user){
//     if($user['username'] == $username &&
//      $user['password']==$password ){
//          $_SESSION['role']=$user['role'];
//          return true;
//      }
// }
// return false;
// }

?>