<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <TITLE>NEWS</TITLE>
        <link rel="stylesheet" href="stiliNews/News.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <form class="example">
                            <input id="inputii" type="text" placeholder="Search.." name="search">
                        </form>
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
        <div id="kryesore">
            <div id="pjesaPare">
                <div id="zbritjaDiv">
                   <h3 id="epara">NEW ARRIVALS</h3>
                   <h3 id="dyta">COLLECTION</h3>
                   <button id="treta" name='button1'>BUY NOW</button>
                </div>
            </div>
            <div id="pjesaDyte">
            <?php
 require 'databaseConfig.php';
 $query2="select * from produktet where emriProduktit  like 'Just in Suits'";
 $query_run2=mysqli_query($connection,$query2);
 
 while($row = mysqli_fetch_array($query_run2) ){
     ?>
        <div id="foto1">                        
                     <a href="#"><?php echo '<img src="images/'.$row['fotoProduktit'].'"width="200px;" height="200px;"' ?></a></a>
                        <h3 id="titull"><?php echo $row['emriProduktit']; ?></h3>
                        <p id="paragrafi"><?php echo $row['pershkrimiProduktit'];?></p>
                        <p id="qmimi" class="qmimi1"><?php echo $row['qmimiProduktit']; ?>$</p>
                 </div>       
             <?php } ?>
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
                    <p>Copyright &copy;2020 Classify - All Rights Reserved</p>
                </div>
            </div>
        </footer>
    </body>
</html>