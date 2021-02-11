<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <TITLE>SHOP</TITLE>
        <link rel="stylesheet" href="stiliNews/news.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <header>
            <div id="headerMajtas">
                <ul id="headmUL">
                    <li class="listaHeader"><a href="index.php">HOME</a></li>
                    <li class="listaHeader"><a href="shop.php">NEWS</a></li>
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
                <li class="listaHeader"><a href="news.php">SHOP</a></li>
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
            <?php
            require 'databaseConfig.php';

            $query="select * from news";
            $query_run=mysqli_query($connection,$query);
            
            if(mysqli_num_rows($query_run) > 0 )
            {
            
            foreach($query_run as $row)
            {

            ?>
                <div id="zbritjaDiv">
                   <h3 id="epara"><?php echo $row['titulli1'];?></h3>
                   <h3 id="dyta"><?php echo $row['titulli2'];?></h3>
                   <button id="treta" name='button1'><?php echo $row['butoni'];?></button>
                </div>
            

            <?php
            }
        }
            ?>
            </div>

        
            <?php

$query2="select * from news";
$query_run2=mysqli_query($connection,$query2);

if(mysqli_num_rows($query_run2) > 0 )
{

foreach($query_run2 as $row)
{
    ?>

            <div id="pjesaDyte">

            <div id="foto1">
                        <a href="#"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['foto1'] ).'"/>'; ?></a>
                        <h3><?php echo $row['tekstiBold'];?></h3>
                        <p><?php echo $row['teksti2'];?></p>
                        <p class="qmimi1"><?php echo $row['teksti3'];?></p>
                </div>
                <div id="foto2">
                    <a href="#"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['foto2'] ).'"/>'; ?></a>
                    <h3><?php echo $row['tekstiBold'];?></h3>
                        <p><?php echo $row['teksti2'];?></p>
                        <p class="qmimi1"><?php echo $row['teksti3'];?></p>
                </div>
                <div id="foto3">
                    <a href="#"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['foto3'] ).'"/>'; ?></a>
                    <h3><?php echo $row['titulli1'];?></h3>
                        <p><?php echo $row['teksti2'];?></p>
                        <p class="qmimi1"><?php echo $row['teksti3'];?></p>
                </div>
                
            </div>
            <?php

}
}
?>

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