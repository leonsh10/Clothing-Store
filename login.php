<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="stilizimiLogin/Style.css">
    <script src="js/validimiLogin.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    <header>
        <div id="headerMajtas">
            <ul id="headmUL">

                <li class="listaHeader"><a href="index.php">HOME</a></li>
                <li class="listaHeader"><a href="shop.php">SHOP</a></li>


            </ul>
        </div>

        <div id="headerDjathtas">
            <ul id="headdUL">
                <li>
                </li>
                <li class="listaHeader"><a href="aboutUs.php">ABOUT</a></li>
                <li class="listaHeader"><a href="news.php">NEWS</a></li>
                <li class="listaHeader"><a href="contact.php">CONTACT</a></li>
                <li class="listaHeader"><a href="login.php">LOGIN</a></li>
            </ul>
        </div>
    </header>


    <div class="loginbox">
        <form id="mainForm">


            <img src="imagesLogin/avatar.jpg" class="avatar">
            <h1>Login</h1>
            <p>Username</p>
            <input type="text" id="user" size="15" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" id="pass" size="15" placeholder="Enter Password">
            <input type="submit" id="submit-btn" value="Login">
            <a href="#">Forgot your password?</a><br>
            <a href="register.php">Don't have an account?</a>
        </form>
    </div>






</body>
</head>

</html>