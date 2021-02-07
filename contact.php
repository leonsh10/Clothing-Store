<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
<head>
    <meta charset = "urf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="stiliContact/Style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="js/validimiContact.js"></script> -->
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
  
<div class="contact-section">
        <h1>Contact Us</h1>
        <div class="border"></div>


    <form class="contact-form" action="valContact.php" method="post">
    <div id="errori" style="height:30px;padding-top:15px; background-color:#111;color:red;font-family: montserrat, sans-serif;text-align:center; ">
        <?php
    $Msg="";
    if(isset($_GET['error'])){
            $Msg=" Please Fill All Your Data ";
            echo $Msg;    
        }
    
            if(isset($_GET['success']))
            {
                $Msg = " Your Message Has Been Sent ";
                echo $Msg;
            }
    ?>
    </div>
        <input type="text" id="user" class="contact-form-text" name="username" placeholder="Your Name">
        <input type="email" id="emaili" class="contact-form-text" name="email" placeholder="Your Email">
        <input type="text" id="phone" class="contact-form-text" name="phone" placeholder="Your Phone">
        <textarea id="mesazhi" class="contact-form-text" name="message" placeholder="Your message"></textarea>
        <input type="submit" id="btn-submit" class="contact-form-btn" name="submit" value="Send">
        
    </form>

</div>

</body>
</html>

