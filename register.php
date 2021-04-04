<?php

?>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="stiliriRegister/registerStyle.css">
    <!-- <script src="js/validimiRegister.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <div id="image">
        <header>
            <div id="headerMajtas">
                <ul id="headmUL">

                    <li class="listaHeader"><a href="index.php">HOME</a></li>
                    <li class="listaHeader"><a href="news.php">NEWS</a></li>


                </ul>
            </div>
            <div id="headerDjathtas">
                <ul id="headdUL">
                    <li>
                    </li>
                    <li class="listaHeader"><a href="aboutUs.php">ABOUT</a></li>
                    <li class="listaHeader"><a href="shop.php">SHOP</a></li>
                    <li class="listaHeader"><a href="contact.php">CONTACT</a></li>
                    <li class="listaHeader"><a href="login.php">LOGIN</a></li>
                </ul>
            </div>

        </header>

        <div class="Registerbox">
            <form id="mainForm" method ="POST" action="valRegister.php">
                <div id="errori" style="height:15px; margin-top:-9px ;margin-bottom:7px ;background-color:#1a1a1a;color:red;font-family: montserrat, sans-serif;text-align:center; ">
        <?php
                     $Msg="";
                     if(isset($_GET['error'])){
                     $Msg=" Please Fill All Your Data ";
                     echo $Msg;    
                                }             
        ?>
                </div>

                <img src="imagesLogin/avatar.jpg" class="avatar">
                <h1>Register</h1>
                <p>Username</p>
                <input type="text" id="user" size="15" class="inputi" name="username" placeholder="Enter Username">
                <p>Email</p>
                <input type="email" id="emaili" class="inputi" name="email" placeholder="shop@gmail.com">
                <p>Password</p>
                <input type="password" id="pass" size="15" name="password" class="inputi" placeholder="Enter Password">
                <input type="submit" id="btn-submit" class="inputi submit" name="submit" value="Register">
            </form>
        </div>
    </div>
</body>
</html>