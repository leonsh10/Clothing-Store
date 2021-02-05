<?php

session_start();
include('variables.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    if(verifyEmpty($username,$password)){
        header('Location:login.php?error');
    }
    else if(verifyLogin($username,$password)){
            header('Location:index.php');
    }
}
else{
   
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