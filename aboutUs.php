<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="aboutUsStyle/about.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
                        <input type="text" placeholder="Search.." name="search">
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

    <?php
require 'databaseConfig.php';

$query="select * from about_us";
$query_run=mysqli_query($connection,$query);

if(mysqli_num_rows($query_run) > 0 )
{

foreach($query_run as $row)
{
    ?>
    <div id="kryesore">
    <div id="titulliMain">
        <h2><?php echo $row['title'];?></h2>
        <h3><?php echo $row['subTitle'];?></h3></i>
        <h3 id="head333"><?php echo $row['minTitle'];?></h3>
    </div>
    <div id="aboutus">
        <p><?php echo $row['shkrimi'];?>
                    <BR><BR>
                    <i><B><?php echo $row['boldTekst'];?></i> <br>:)

        </p>
    </div>
</div>
<?php
}
}
    ?>



       

        <div id="leader">
            <div id="titulliLeader">
                <?php
                    $query1="select * from about_us1";
                    $query_run1=mysqli_query($connection,$query1);
                    
                    if(mysqli_num_rows($query_run1) > 0 )
                    {
                    
                    foreach($query_run1 as $row)
                    {
                        
?>
                        
                        <h1><?php  echo $row['titulli1']; ?></h1>
                        </div>
            
                        <div id="pjesaKomplet">
            
                            <div id="pjesa1">
                                <img src="fotoProjektit/Man.png">
                                <h3 class="emri"><?php  echo $row['emri1']; ?></h3>
                                <p class="parag">
                                <?php  echo $row['titulli2']; ?>
                                </p>
            
                                <div class="divParag">
                                    <p class="para2">
                                    <?php  echo $row['teksti1']; ?>
                                    </p>
                                </div>
                                <p class="skills">
                                    <b>Skills:</b> <?php  echo $row['skills']; ?>
                                </p>
                            </div>
                            <?php
                    }
                }
                ?>


            <?php
                    $query2="select * from about_us2";
                    $query_run2=mysqli_query($connection,$query2);
                    
                    if(mysqli_num_rows($query_run2) > 0 )
                    {
                    
                    foreach($query_run2 as $row)
                    {
                        
?>
                        
                            <div id="pjesa2">
                                <img src="fotoProjektit/Man.png">
                                <h3 class="emri"><?php  echo $row['emri2']; ?></h3>
                                <p class="parag">
                                <?php  echo $row['titulli3']; ?>
                                </p>
            
                                <div class="divParag">
                                    <p class="para2">
                                    <?php  echo $row['teksti5']; ?>
                                    </p>
                                </div>
                                <p class="skills">
                                    <b>Skills:</b> <?php  echo $row['skills2']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                    }
                }
                    ?>
              
               
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