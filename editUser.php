<?php

include_once 'userMapper.php';
include_once 'databaseConfig.php';
if(isset($_POST['update'])){
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = $_POST['username'];
    $Email = $_POST['email'];
    $Role=$_POST['role'];

    if(verifyEmpty($name,$Email,$Role)){
        echo 'Ploteso te dhenat';
    }

    // else{
    // $simpleUser = new SimpleUser($username, $email,$password,$role);
    // $mapper = new UserMapper();
    // $mapper->edit($simpleUser, $userId);
    // // header("Location:dashboard.php");
    // }

  
        // $edit = new SimpleUser($name,$email,$password,$role);
        // $mapper = new UserMapper();
        // $mapper->edit($edit,$userId);
        // header('Location:dashboard.php');
    
    
   
    else{
        $result = mysqli_query($connection,"UPDATE user SET username='$name',email='$Email','role'='$Role' WHERE userId = $userid;");
        header("Location:dashboard.php");
       
    }
}

function verifyEmpty($name,$email,$Role){
    if(empty($name) || empty($Email) || empty($Role))
    return true;
    return false;
}

?>



<?php
$id = isset($_GET['id']) ? $_GET['id'] : '';
$result=mysqli_query($connection,"SELECT * from user where userId='$id'") or die(mysqli_error($connection));
while($res=mysqli_fetch_array($result)){
    $username=$res['username'];
    $email=$res['email'];
    $role=$res['role'];
}
?>

<html>
<head>
<title>Edit</title>
<!-- <link rel="stylesheet" href="StiliEdit.css"> -->
</head>
<body>
<div id="div1">
<h3>Ndrysho User-in</h3>
<form id="formaProduktit" method="post" action="editUser.php" role="form">
Emri:<input type ="text " value='<?php  echo $username;  ?>'>
<p></p>
Email:<input type="email" value='<?php echo $email; ?>'>
<p></p>
<label for="role">Choose a Role:</label>

<select name="numbers" id="role">

  <option value="1">0</option>
  <option value="2">1</option>
</select>
<p></p>
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
<input type="submit" name="update" id="buton1"  value="Update">
 <button id="buton1"><a href="dashboard.php">Dashboard</a></button>
                      </form>
</div>
                      </body>

                      </html>

