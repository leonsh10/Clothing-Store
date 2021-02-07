<?php
include_once 'userMapper.php';
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
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


<main>
<div id="mainDiv">

<h1>This is Dashboard page</h1>
    <div>
        <h2>User list:</h2>
        <table>
            <thead>
                <tr>
                    <td>Emri</td>
                    <td>Mbiemri</td>
                    <td>Email</td>
                    <td>Detajet</td>
                    <td>Modifiko</td>
                    <td>Fshij</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['Username']; ?></td>
                        <td><?php echo $user['Email']; ?></td>
                        <td><a href=<?php echo "detailsUser.php?id=" . $user['userId']; //to be continued by students
                                    ?>>Detajet</a></td>
                        <td><a href=<?php echo "edit.php?id=" . $user['userId'];
                                    ?>>Modifiko</td>
                        <td><a href=<?php echo "deleteUser.php?id=" . $user['userId'];
                                    ?>>Fshij</td>
                    </tr>
                <?php
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