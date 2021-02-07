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
                    <form class="example">
                        <input type="text" placeholder="Search.." name="search">
                    </form>
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

    <main>
        <div id="kryesore">
            <div id="titulliMain">
                <h2>-OUR MISSION-</h2>
                <h3>TO PROVIDE BEST ONLINE SHOP.</h3></i>
                <h3 id="head333">OUR STORY</h3>
            </div>
            <div id="aboutus">
                <p>KY DYQAN FILLOJ PUNEN ME 1 JANAR TE VITIT 2021.2 SHOKE PATEN NJE VIZION:<br> 
                    TE SHPERNDAJNE LUMTURINE DUKE E KTHYER NJE MOMENT TE SIKLETSHEM
                    GJATE PERZGJEDHJES SE DISA KOSTUMEVE KLASIKE NE NJE MOMENT KENAQESIE 
                    GJATE PERZGJEDHJES SE TYRE TE CILAT KANE NJE STANDART TE LARTE TE 
                    KUALITETIT SI DHE KREATIVITETIT.<BR>
                        KY KONCEPT ARRITI PERFEKSIONIN NGA KOLEKTIVI I KRIJUESVE.<BR>
                    DERI ME SOT KY DYQAN KA POROSI NGA ME SHUME SE 70 SHTETE NGA E GJITHE BOTA.
                    KARAKTERISTIKAT KRYESORE TE KETYRE KOSTUMEVE JANE DIZAJNI I VEQANTE I TYRE,
                    MATERIALI,NGJYRAT DHE MBI TE GJITHA KLASIKJA E CILA GJENDET NE ATO KOSTUME.
                            <BR><BR>
                            <i><B>THENE THJESHT:IN A WORLD FULL OF TRENDS I WANT TO REMAIN A CLASSIC.</i> <br>:)

                
                </p>
                <!-- <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                    Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.
                    Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra.
                    Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.
                    Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus
                    enim ac dui.
                    Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus,
                    tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi,
                    tincidunt quis,
                    accumsan porttitor, facilisis luctus, metus.tortor neque egestas augue, eu vulputate magna eros eu
                    erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis,
                    accumsan porttitor, facilisis luctus, metus.tortor neque egestas augue, eu vulputate magna eros eu
                    erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis,
                    accumsan porttitor, facilisis luctus, metus.tortor neque egestas augue, eu vulputate magna eros eu
                    erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis,
                    accumsan porttitor, facilisis luctus, metus..</p> -->
            </div>
        </div>

        <div id="leader">
            <div id="titulliLeader">
                <h1>Leadership</h1>
            </div>

            <div id="pjesaKomplet">

                <div id="pjesa1">
                    <img src="fotoProjektit/Man.png">
                    <h3 class="emri">Leon Shala</h3>
                    <p class="parag">
                        CO-FOUNDER & CEO
                    </p>

                    <div class="divParag">
                        <p class="para2">
                            Leoni eshte nje nder themeluesit e ketij dyqani.
                            Eshte nje nga dyqanet me te medha qe funksionon online
                            dhe Leoni ishe ideator i kesaj.Para se te krijonte kete ai
                            po punonte per nje kompani mjaft te madhe.
                        </p>
                    </div>
                    <p class="skills">
                        <b>Skills:</b> Creativity,Reliability,Communication
                    </p>
                </div>

                <div id="pjesa2">
                    <img src="fotoProjektit/Man.png">
                    <h3 class="emri">Gramos Xhigoli</h3>
                    <p class="parag">
                        CO-FOUNDER & CEO
                    </p>

                    <div class="divParag">
                        <p class="para2">
                            Gramosi eshte nje nder themeluesit e ketij dyqani.
                            Eshte nje nga dyqanet me te medha qe funksionon online
                            dhe Gramosi ishe ideator i kesaj.Para se te krijonte kete ai
                            po punonte per nje kompani mjaft te madhe.
                        </p>
                    </div>
                    <p class="skills">
                        <b>Skills:</b> Creativity,Reliability,Communication
                    </p>
                </div>
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
                <p>Copyright &copy;2020 Classify - All Rights Reserved</p>
            </div>
        </div>
    </footer>
</body>

</html>