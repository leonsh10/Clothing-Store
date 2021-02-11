<?php
include_once 'userMapper.php';
include_once 'databaseConfig.php';
session_start();
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
    $userList2=$mapper->getAllContacts();
} else {
    // header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="stiliDashboard/dashboard.css">
</head>
<body>
<header>
        <div id="headerMajtas">
            <ul id="headmUL">

                <li class="listaHeader"><a href="index.php">HOME</a></li>
                <li class="listaHeader"><a href="shop.php">SHOP</a></li>
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
                <li class="listaHeader"><a href="news.php">NEWS</a></li>
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
                    <td >Modifiko</td>
                    <td >Fshij</td>
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
                                        <td><a href=<?php echo "editUser.php?id=" . $user['userId'];
                                                    ?> name="submit">Modifiko</td>
                                        <td><a href=<?php echo "deleteUser.php?id=" . $user['userId'];
                                                    ?>>Fshij</td>
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
                                        <td id="mesazhi"><?php echo $user['message']; ?></td>
                                    </tr>
                                <?php
                                }
                            }
                                ?>
            </tbody>
        </table>





    </div>



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
                    <li><a href="login.php">Login</a></li>
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