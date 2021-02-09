<?php

if(isset($_POST['submit'])){

$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


if(empty($username) || empty($email) || empty($phone) || empty($message)){
    header('Location:contact.php?error');
}
else {
    if(isset($_POST['submit'])){
        include_once('databaseConfig.php');
            $obj=new Contact();
            $res=$obj->contact_us($_POST);
            if($res==true){
                header("Location:contact.php?success");
            }else{
                header("Location:contact.php");
            }
    }
}

}
else
{
 header("location:index.php");
}
?>