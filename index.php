<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">
    <title>HomePage</title>
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
                        <input type="text" placeholder="Search.." name="search">
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
    <?php
require 'databaseConfig.php';

$query="select * from homepage";
$query_run=mysqli_query($connection,$query);

if(mysqli_num_rows($query_run) > 0 )
{

foreach($query_run as $row)
{

    ?>
        <div id="mainDiv">
            <!-- <div id="mainImage"> -->
                <!-- <img src="images/mainImg.jfif"> -->
                <div id="qender">
                    <h1 id="head1"><?php echo $row['titulliLart'];?></h1>
                    <button id="butoni1" type="button"><?php echo $row['butoni1'];?></button>
                </div>
            <!-- </div> -->
        </div>

        <div id="secondDiv">
            <div id="teksti">
                <p id="headeri-posht"><?php echo $row['titulliMes'];?></p>
                <div id="lines">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <div id="thirdDiv">

                <div id="img1">
                    <a href="#"><a href="#"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['foto3'] ).'"/>'; ?>
                        <p><i><?php echo $row['pershk1'];?></i></p>
                    </a>
                </div>

                <div id="img2">
                    <a href="#"><a href="#"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['foto2'] ).'"/>'; ?>
                        <p><i><?php echo $row['pershk2'];?></i></p>
                    </a>
                </div>

                <div id="img3">
                    <a href="#"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['foto1'] ).'"/>'; ?>           
                        <p><i><?php echo $row['pershk3'];?></i></p>
                    </a>
                </div>



            </div>
        </div>


    </main>
            <?php 
            }
        }?>



        
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