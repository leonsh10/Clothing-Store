<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset = "urf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="stiliContact/Style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/validimiContact.js"></script>
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

<div class="contact-section">

        <h1>Contact Us</h1>
        <div class="border"></div>
    <form class="contact-form" action="indeks.html" method="post">
        <input type="text" id="user" class="contact-form-text" placeholder="Your Name">
        <input type="email" id="emaili" class="contact-form-text" placeholder="Your Email">
        <input type="text" id="phone" class="contact-form-text" placeholder="Your Phone">
        <textarea id="mesazhi" class="contact-form-text" placeholder="Your message"></textarea>
        <input type="submit" id="btn-submit" class="contact-form-btn" value="Send">
        
    </form>

</div>


</body>
</html>

