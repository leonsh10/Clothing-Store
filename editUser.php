<?php
session_start();
include_once 'userMapper.php';
include_once 'databaseConfig.php';
include_once 'simpleUserClass.php';
include_once 'products.php';
if(isset($_POST['update'])){
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $username = $_POST['username'];
    $email =$_POST['email'];
    $role = $_POST['role'];

    if(verifyEmpty($username,$email)){
        echo 'Ploteso te dhenat';
    }

    // {
    // $simpleUser = new SimpleUser($username,'',$email,$role);
    // $mapper = new UserMapper();
    // $mapper->edit($simpleUser, $id);
    // // header("Location:dashboard.php");
    // }

  
        // $edit = new SimpleUser($name,$email,$password,$role);
        // $mapper = new UserMapper();
        // $mapper->edit($edit,$userId);
        // header('Location:dashboard.php');
    
    
   
    else{
        $result = mysqli_query($connection,"UPDATE user SET username='$username',email='$email',role='$role'  WHERE userId = 153;")or die(mysqli_error($connection));
        header("Location:dashboard.php");
       
    }
}

function verifyEmpty($username,$email){
    if(empty($username) || empty($email))
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
Emri:<input type ="text " name="username" value='<?php  echo $username;  ?>'>
<p></p>
Email:<input type="email" name="email" value='<?php echo $email; ?>'>
<p></p>
<label name="role" for="role">Choose a Role:</label>

<select name="role" id="role" >
<option name="role" selected="selected"><?php echo $role; ?></option>
  <option name="role" value="0">0</option>
  <option name="role" value="1">1</option>
</select>
<p></p>
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
<input type="submit" id="buton1" name="update"   value="Update">
 <button id="buton1"><a href="dashboard.php">Dashboard</a></button>
                      </form>
</div>
                      </body>

                      </html>

