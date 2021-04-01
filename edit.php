<?php 

include_once 'userMapper.php';
include_once 'databaseConfig.php';
if(isset($_POST['update'])){
$id = isset($_POST['idProduktit']) ? $_POST['idProduktit'] : '';
$name=$_POST['emri'];
$pershkrimi=$_POST['pershkrimiProduktit'];
$qmimi = $_POST['qmimiProduktit'];
$foto=$_POST['fotoProduktit'];

if(verifyEmpty($name,$pershkrimi,$qmimi,$foto)){
    header('Location:edit.php?error');
}

else{
    $result = mysqli_query($connection,"UPDATE produktet SET emriProduktit='$name',pershkrimiProduktit='$pershkrimi',qmimiProduktit='$qmimi',fotoProduktit='$foto' WHERE idProduktit = $id;");
    header("Location:dashboard.php");
}

}

function verifyEmpty($name,$pershkrimi,$qmimi,$foto){
    if(empty($name) || empty($pershkrimi) || empty($qmimi) || empty($foto))
    return true;
    return false;
}
?>
<?php

$id = isset($_GET['idProduktit']) ? $_GET['idProduktit'] : '';

$result=mysqli_query($connection,"SELECT * from produktet where idProduktit='$id'") or die(mysqli_error($connection));

while($res=mysqli_fetch_array($result)){
    $name=$res['emriProduktit'];
    $qmimi=$res['qmimiProduktit'];
    $pershkrimi=$res['pershkrimiProduktit'];
    $foto=$res['fotoProduktit'];
}
?>



<html>
<head>
<title>Edit</title>
<link rel="stylesheet" href="StiliEdit.css">
</head>
<body>
<div id="div1">
<h3>Ndrysho Produktin</h3>
<form id="formaProduktit" method="post" action="edit.php" role="form">
<p></p>
<div id="errori" style="height:30px;margin-top:-15px; color:red;font-family: montserrat, sans-serif;text-align:center; ">
        <?php
                $Msg="";
                if(isset($_GET['error'])){
            $Msg=" Ploteso te gjitha te dhenat!! ";
            echo $Msg;    
                }
                ?>
                </div>
Emri i Produktit:                    
                    <input type="text" id="pName"  size="20" value="<?php echo $name; ?>" name="emri" > 
                    <p></p>
                    Pershkrimi i Produktit:
                    <textarea id="pershkrimi" name="pershkrimiProduktit" id="pPershkrimi"   rows="1" cols="15" ><?php echo $pershkrimi; ?></textarea>
                    <p></p>Qmimi i Produktit:
                    <input type="number" min="0" name="qmimiProduktit" max="10000"  id="pQmimi" value=<?php echo $qmimi; ?>> 
                    <p></p>
                    <input type="hidden" name="idProduktit" value="<?php echo $_GET['idProduktit'];?>">
                    <p></p>
                    <label class="custom-file-upload">
    <input type="file" name="fotoProduktit" id="fotoP" accept="image/*">
    Upload new photo       
                    </label>  
                    <p></p>Foto paraprake e Produktit:<?php echo $foto; ?>
                    <p></p>
                    <input type="submit" id="buton1" name="update" value="Update">
                    <button id="buton1"><a href="dashboard.php">Dashboard</a></button>
                    <p></p>
                      </form>
</div>
                      </body>

                      </html>