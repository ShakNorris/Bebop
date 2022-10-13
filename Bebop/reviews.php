<!DOCTYPE html>
<html>
<head>
<title>Bebop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/png" href="img/LogoMakr_5hDjF7.png">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/fontawesome-free-5.13.0-web/css/all.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
</head>

<body>
    <div class="header-top">
        <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search..." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <h1 class="SiteName">Bebop</h1>
        <div class="Login">
        <a id="accountpage" href="userpage.php">
        <?php
        session_start();
        if($_SESSION['uname'] == NULL){
            echo '<style>#accountpage {display:none;}</style>';
        }
        else{
            echo $_SESSION['uname'];
            if($_SESSION['usertype'] == 1){
                echo "<i class='fas fa-certificate'></i>";
            }
            echo '<style>#SignIn {display:none;}</style>';
        }        
        ?>
        </a>
        <a id="SignIn" href="Login.php">Sign In</a>
    </div>
    </div>
    <header id="header">
        <div class="DarkMode">
            <input type="checkbox" name="" id="switch">
            <label for="switch" class="switch-label">
                <div class="toggle"></div>
            </label>
        </div>
        <ul class="Social">
            <li><a href="https://www.facebook.com" target='_blank'><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com" target='_blank'><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.instagram.com" target='_blank'><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://www.youtube.com" target='_blank'><i class="fab fa-youtube"></i></a></li>
        </ul>
        <nav>
            <a href="#" class="burger-menu"><i class="fas fa-bars"></i></a>
            <ul class="Pages">
               <li><a href="home.php">Home</a></li>
               <li><a href="charts.php">Charts</a></li>
               <li><a href="reviews.php">Reviews</a></li>
               <li><a href="aboutus.php">About Us</a></li>
               <li><a href="contact.php">Contacts</a></li>
            </ul>
        </nav>
    </header>

    <section id="Reviews">
        <div class="container">
            <h2>Latest Reviews</h2>
            <p class="Subtext">albums reviewed by our team</p>
            <div class="ReviewWrapper">
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/RTJ4.jpg">
                            <p>Run The Jewels</p>
                            <p>RTJ4</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/AfterHours.jpg">
                            <p>The Weeknd</p>
                            <p>After Hours</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/DLDT.jpg">
                            <p>Drake</p>
                            <p>Dark Lane Demo Tapes</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/MTBMB.jpg">
                            <p>Eminem</p>
                            <p>Music To Be Murdered By</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/Circles.jpg">
                            <p>Mac Miller</p>
                            <p>Circles</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/LostBoy.jpg">
                            <p>YBN Cordae</p>
                            <p>The Lost Boy</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/SweetAction.jpg">
                            <p>Jack Harlow</p>
                            <p>Sweet Action</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/COADM.jpg">
                            <p>Logic</p>
                            <p>Confessions Of A Dangerous Mind</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/HollywoodsBleeding.jpg">
                            <p>Post Malone</p>
                            <p>Hollywood's Bleeding</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/Ventura.jpg">
                            <p>Anderson .Paak</p>
                            <p>Ventura</p>
                            <span>R&B/Soul</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/TheSailor.jpg">
                            <p>Rich Brian</p>
                            <p>The Sailor</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/BlameBaby.jpg">
                            <p>DaBaby</p>
                            <p>Blame It On Baby</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/TheIncredibleTrueStory.jpg">
                            <p>Logic</p>
                            <p>The Incredible True Story</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/Dicaprio2.jpg">
                            <p>J.I.D</p>
                            <p>DiCaprio2</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/Unlocked.jpg">
                            <p>Denzel Curry</p>
                            <p>UNLOCKED</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/DAMN.jpg">
                            <p>Kendrick Lamar</p>
                            <p>DAMN.</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/KOD.jpg">
                            <p>J. Cole</p>
                            <p>KOD</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/Mirrorland.jpg">
                            <p>EarthGang</p>
                            <p>Mirrorland</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/UP.jpg">
                            <p>Logic</p>
                            <p>Under Pressure</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
                <div class="wrapReview">
                    <a href="#" target="_blank">
                        <div>
                            <img src="img/albums/Syre.jpg">
                            <p>Jaden Smith</p>
                            <p>SYRE</p>
                            <span>Hip-Hop/Rap</span>
                        </div>
                    </a>
                </div>
        </div>
        <div class="LoadMore">
            <a id="Load" href="#">LOAD MORE</a>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <img src="img/LogoMakr_2uuIwS.png">
            <h3>Commited to music</h3>
            <div class="footerSocial">
                <h4>Follow Us</h4>
                <ul class="FollowUs">
                    <li><a href="https://www.facebook.com" target='_blank'><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com" target='_blank'><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://www.instagram.com" target='_blank'><i class="fab fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com" target='_blank'><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>@2020 - <a href="home.html">Bebop</a>
                    All rights reserved
                </p>
            </div>
        </div>
    </footer>
    
    <script>
        $('#switch').on('click', () => {
            if ($('#switch').prop('checked')) {
                $("body").removeClass('light');
                $("body").addClass('dark');
                $("p, h2, a, q, span, h4").css("color", "white");
                document.getElementById("Load").style.cssText="color:#8548FF; background-color:black; border-color:#8548FF";
                document.getElementById("header").style.backgroundColor="#252525";
                document.getElementById("footer").style.backgroundColor="#252525";
            } else {
                $("body").removeClass('dark');
                $("body").addClass('light');
                $("p, h2, a, q, h4").css("color", "black");
                $("span").css("color","grey");
                $("#header p, #header a").css("color", "white");
                $("#footer p, #footer h3, #footer h4, #footer a").css("color", "white");
                document.getElementById("Load").style.cssText="color:black; background-color:white; border-color:black";
                document.getElementById("header").style.backgroundColor="black";
                document.getElementById("footer").style.backgroundColor="black";
            }
        })
    </script>
</body>
</html>