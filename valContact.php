<?php
ini_set('SMTP', "server.com");
ini_set('smtp_port', "25");
ini_set('sendmail_from', "email@domain.com");

if(isset($_POST['submit'])){

$username=$_POST['username'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];


if(empty($username) || empty($email) || empty($phone) || empty($message)){
    header('Location:contact.php?error');
}

else
{
    $to = "leonshala.2020@gmail.com";

    if(mail($to,$username,$message,$email))
    {
        header("location:contact.php?success");
    }
}
}
else
{
 header("location:index.php");
}
?>