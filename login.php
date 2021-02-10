<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stilizimiLogin/Style.css">
    <!-- <script src="js/validimiLogin.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <header>
        <div id="headerMajtas">
            <ul id="headmUL">

                <li class="listaHeader"><a href="index.php">HOME</a></li>
                <li class="listaHeader"><a href="shop.php">NEWS</a></li>

            </ul>
        </div>

        <div id="headerDjathtas">
            <ul id="headdUL">
                <li>
                </li>
                <li class="listaHeader"><a href="aboutUs.php">ABOUT</a></li>
                <li class="listaHeader"><a href="news.php">SHOP</a></li>
                <li class="listaHeader"><a href="contact.php">CONTACT</a></li>
                <li class="listaHeader"><a href="login.php">LOGIN</a></li>
            </ul>
        </div>
    </header>

 
    <div class="loginbox">
    
        <form id="mainForm" action="valLogin.php" method="post">
        <div id="errori" style="height:30px;margin-top:-15px; background-color:#1a1a1a;color:red;font-family: montserrat, sans-serif;text-align:center; ">
        <?php
                $Msg="";
                if(isset($_GET['error'])){
            $Msg=" Ploteso te dhenat!! ";
            echo $Msg;    
                }
            else if(isset($_GET['errori'])){
                $Msg=" Username ose Password GABIM! ";
                echo $Msg;   
        }           
    ?>
    </div>
            <img src="imagesLogin/avatar.jpg" class="avatar">
            <h1>Login</h1>
            <p>Username</p>
            <input type="text" name="username" id="user" size="15"  placeholder="Enter Username"  >
            <p>Password</p>
            <input type="password" name="password"  id="pass" size="15" placeholder="Enter Password" >
            <input type="submit" id="submit-btn" name="submit" value="Login">
            <a href="#">Forgot your password?</a><br>
            <a href="register.php">Don't have an account?</a>
           
        </form>

        
    </div>
</body>
</head>


</html>
