<?php
include_once 'userMapper.php';
include_once 'databaseConfig.php';
include_once 'products.php';
session_start();
$emri=$_SESSION['username'];
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
    $userList2=$mapper->getAllContacts();
    $userList3=$mapper->getAllProducts();
    
} else {
    // header("Location:index.php");
}



?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="stiliDashboard/Dashboard.css">
</head>
<body>
<header>
        <div id="headerMajtas">
            <ul id="headmUL">

                <li class="listaHeader"><a href="index.php">HOME</a></li>
                <li class="listaHeader"><a href="news.php">NEWS</a></li>
              
                <?php
      if (isset($_SESSION['role']) && $_SESSION['role'] =='1')  {
      ?>
        <li class="listaHeader"><a href="dashboard.php">DASHBOARD</a></li>  
      <?php
      }
      ?>

            </ul>
        </div>

        <div id="headerDjathtas">
            <ul id="headdUL">
                <li>
                </li>
                <li class="listaHeader"><a href="aboutUs.php">ABOUT</a></li>
                <li class="listaHeader"><a href="shop.php">SHOP</a></li>
                <li class="listaHeader"><a href="contact.php">CONTACT</a></li>
                <?php
      if (isset($_SESSION['role']))  {
      ?>
        <li class="listaHeader"><a href="logout.php">LOGOUT</a></li>  
      <?php
      }
      else{
          ?>
          
        <li class="listaHeader"><a href="login.php">LOGIN</a></li>  
        <?php
      }
      ?>
            </ul>
        </div>
    </header>


<main>
<div id="mainDiv">


    <div>
    
        <h2 id="titulliTabeles">User list</h2>
        <table>
            <thead>
                <tr>
                    <td >ID</td>
                    <td >Emri</td>
                    <td >Email</td>
                    <td >Fshij/Edit</td>
                </tr>
            </thead>
            <tbody>
                <?php
                            
                            if (is_array($userList) || is_object($userList))
                        {
                            foreach ($userList as $user) {
                                ?>
                                    <tr>
                                    <td><?php echo $user['userId']; ?></td>
                                        <td><?php echo $user['username']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><button id="butonFshij"><a style="text-decoration:none;" href=<?php echo "deleteUser.php?id=" . $user['userId'];
                                                    ?>>Fshij</button>
                                                    <button id="butonFshij"><a style="text-decoration:none;" href=<?php echo "editUser.php?id=" . $user['userId'];
                                                    ?>>Edit</button></td>
                                    </tr>
                                <?php
                                }
                            }
                                ?>
            </tbody>
        </table>


        <h2 id="titulliTabeles2">Contact Us</h2>

        <table>
            <thead>
                <tr>
                    <td >ID</td>
                    <td >Emri</td>
                    <td >Email</td>
                    <td >Numri</td>
                    <td id="mesazhi">Mesazhi</td>
                </tr>
            </thead>
            <tbody>
                <?php
                            
                            if (is_array($userList2) || is_object($userList2))
                        {
                            foreach ($userList2 as $user) {
                                ?>
                                    <tr>
                                    <td><?php echo $user['id']; ?></td>
                                    <td><?php echo $user['name']; ?></td>
                                        <td><?php echo $user['email']; ?></td>
                                        <td><?php echo $user['phone']; ?></td>
                                        <td  id="mesazhi"><?php echo $user['message']; ?></td>
                                    </tr>
                                <?php
                                }
                            }
                                ?>
            </tbody>
        </table>





    </div>


    <!-- <h2 id="titulliTabeles2">About Us</h2>
                <div id="aboutUs">
                
                    <div id="aboutUsForma">
                            <form>
                            <p></p>
                            Title:<input type="text" name="title">
                            Title2:<input type="text" name="title2">
                            <input type="submit" id="submit" name="submit" value="Add">
                            <p></p>
                            SubTitle:<input type="text" name="subTitle">
                            Emri1:<input type="text" name="emri1">
                            Emri2:<input type="text" name="emri2">
                            <p></p>
                            Texti:<textarea name="pershkrimi" id="" cols="30" rows="10"></textarea>
                            Puntori:<textarea name="pershkrimiPuntorit" id="" cols="30" rows="10"></textarea>
                            Skills:<textarea name="skills" id="" cols="30" rows="10"></textarea>
                            <p></p>
                            Thenja:<input type="text" size="55" name="thenja">
                            
                            <p></p>
                           
                            
                            </form>

                    </div>

                </div> -->
    


            <div id="produkti">
            
                <div id="formaP">
                <form id="formaProduktit" method ="POST" action="valProducts.php" >
                <h4 style="margin:0; margin-right:560px; color:red; border:1px solid #babeff ;justify-content:start;">User:<?php  echo $emri?></h4>
                <h3>Shto Produkt</h3>
                <div id="errori" style="height:30px;margin-top:-15px; color:red;font-family: montserrat, sans-serif;text-align:center; ">
        <?php
                $Msg="";
                if(isset($_GET['error'])){
            $Msg=" Ploteso te gjitha te dhenat!! ";
            echo $Msg;    
                }
                ?>

                </div>

                    <p></p>
                    <input type="text" id="pName"  size="15" placeholder="Emri Produktit" name="emri" > 
                    <p></p>
                    <textarea id="pershkrimi" name="pershkrimiProduktit" id="pPershkrimi" placeholder="Pershkrimi"  rows="4" cols="40" ></textarea>
                    <p></p>
                    <input type="number" min="0" name="qmimiProduktit" max="10000"  id="pQmimi" placeholder="Qmimi" > 
                    <p></p>
    
                    <label> Shto Foto
                    <input type="file" name="fotoProduktit" id="fotoP"  accept="image/*" >
                    <input type="hidden" name="id">
                    </label>  
                    <input type="submit" id="butonP" name="submit" value="Shto Produktin">

                  
                    </div>
                        
                        <h2 id="titulliTabeles2" style="margin-right:480px;">Produktet</h2>

        <table>
            <thead>
                <tr>
                    <td >ID</td>
                    <td >Produkti</td>
                    <td >Pershkrimi</td>
                    <td >Qmimi</td>
                    <td style="width:22%;" id="mesazhi">Foto</td>
                    <td style="width:20%;">Fshij/Edit</td>
                </tr>
            </thead>
            <tbody>
            <?php        

            $query3="select * from produktet";
            $query_run3=mysqli_query($connection,$query3);    
            
  
                            if (is_array($userList3) || is_object($userList3))
                        {
                            foreach ($userList3 as $user) {
                               
                                ?>
                                    <tr>
                                    <td><?php echo $user['idProduktit']; ?></td>
                                    <td><?php echo $user['emriProduktit']; ?></td>
                                        <td><?php echo $user['pershkrimiProduktit']; ?></td>
                                        <td><?php echo $user['qmimiProduktit']; ?>$</td>
                                        <td>
                                        <?php echo '<img src="images/'.$user['fotoProduktit'].'"width="200px;" height="250px;"'?></td>
                                        <td><button id="butonFshij"><a style="text-decoration:none;" href=<?php echo "deleteProduct.php?idProduktit=" . $user['idProduktit'];
                                                    ?>>Fshij</button>
                                                    <button name="butoni12" style="margin-top:10px;"id="butonFshij"><a style="text-decoration:none;" href=<?php echo "edit.php?idProduktit=" . $user['idProduktit'];?>>Edit</button>
                                        </td>
                                       
                                        
                                    </tr>
                                <?php
                                
}
}

                    
                                ?>
            </tbody>
        </table>
                        
                                    </div>
                </form>

               

                  


</div>
</main>

    <footer>
        <div id="diviPosht">
            <div id="vija">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <div id="diviLart">
            <div id="divLM">
                <ul id="listaMajtas">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="news.php">News</a></li>
                    <li><a href="aboutUs.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <?php
      if (isset($_SESSION['role']))  {
      ?>
        <li class="listaHeader"><a href="logout.php">Logout</a></li>  
      <?php
      }
      else{
          ?>
          
        <li class="listaHeader"><a href="login.php">Login</a></li>  
        <?php
      }
      ?>
                </ul>
            </div>
            <div id="divLD">
                <ul id="listaDjathtas">
                    <li><a href="https://www.facebook.com/"><img
                                src="llogot/iconfinder_1_Facebook2_colored_svg_5296500.png">Facebook</a></li>
                    <li><a href="https://instagram.com/"><img src="llogot/insta.png">Instagram</a></li>
                    <li><a href="https://twitter.com/"><img src="llogot/twitter.png">Twitter</a></li>
                </ul>
            </div>
        </div>
        <div id="diviFundit">
            <div id="copyright">
                <B><p>Copyright &copy;2020 Classify - All Rights Reserved</p></B>
            </div>
        </div>
    </footer>
</body>
</html>