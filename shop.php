<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="cssShop/stiliShop2.css">
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
    <div class="img-slider">
      <div class="slide active">
        <img src="images/raphael.jpg" alt="">
        <div class="info">
        
        </div>
      </div>
      <div class="slide">
        <img src="images/discount3.jpg" alt="">
        <div class="info">
        <div id="zbritjaDiv">
                   <h3 id="epara">NEW ARRIVALS</h3>
                   <h3 id="dyta">COLLECTION</h3>
                   <button id="treta" name='button1'>SHOP NOW</button>
                </div>
                </div>
      </div>
      <div class="slide">
        <img src="images/discount5.jpeg" alt="">
        <div class="info3">
          <p>Classic Suit</p>
          <button id="butoni5" type="button">SHOP NOW</button>
                </div>
      </div>
      <div class="slide">
        <img src="images/discount3.jpg" alt="">
        <div class="info">
        <div id="zbritjaDiv">
                   <h3 id="epara">NEW ARRIVALS</h3>
                   <h3 id="dyta">COLLECTION</h3>
                   <button id="treta" name='button1'>SHOP NOW</button>
                </div>
                </div>
      </div>
      <div class="slide">
        <img src="images/discount3.jpg" alt="">
        <div class="info">
        <div id="zbritjaDiv">
                   <h3 id="epara">NEW ARRIVALS</h3>
                   <h3 id="dyta">COLLECTION</h3>
                   <button id="treta" name='button1'>SHOP NOW</button>
                </div>
                </div>
      </div>
      <div class="navigation">
        <div class="btn active"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
        <div class="btn"></div>
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

    <script type="text/javascript">
    var slides = document.querySelectorAll('.slide');
    var btns = document.querySelectorAll('.btn');
    let currentSlide = 1;
    

    // Javascript for image slider manual navigation
    var manualNav = function(manual){
      slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
          btn.classList.remove('active');
        });
      });

      slides[manual].classList.add('active');
      btns[manual].classList.add('active');
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
      });
    });

    // Javascript for image slider autoplay navigation
    var repeat = function(activeClass){
      let active = document.getElementsByClassName('active');
      let i = 1;

      var repeater = () => {
        setTimeout(function(){
          [...active].forEach((activeSlide) => {
            activeSlide.classList.remove('active');
          });

        slides[i].classList.add('active');
        btns[i].classList.add('active');
        i++;

        if(slides.length == i){
          i = 0;
        }
        if(i >= slides.length){
          return;
        }
        repeater();
      }, 10000);
      }
      repeater();
    }
    repeat();
    </script>
</body>
</html>