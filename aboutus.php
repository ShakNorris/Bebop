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
    <section id="AboutUs">
        <div class="container">
            <h2>About Us</h2>
            <p class="Subtext">the story of our website</p>
            <div class="Story clearfix">
                <img class="col-5"src="img/TheMan.png">
                <p class="col-7">Founded in 2010, Bebop is a unique media company that’s powered by community, our in-house creative team, and the artists themselves. 
                    We serve music knowledge to over 100 million people each month on Bebop.com and everywhere music fans connect across the internet.
                    Genius started as a platform for annotating clever rap lyrics—our original name was Rap Genius. Over the years,
                     we’ve expanded our mission to include more than hip-hop, and more than just lyrics. 
                    Every song has a story that needs to be told, and the biggest names in music come to Bebop to give the world insight into their art.
                    The in-house creative team at Genius spotlights the stories behind the music that matter most.
                    They work with artists and the community to transform insider knowledge into videos, events,
                    in-depth features, breaking news coverage, and a variety of music knowledge content for the masses.
                </p>
            </div>
            <div class="TheTeam">
                <h3>Meet Our Team</h3>
                <div class="Cards">
                    <div class="Card col-4">
                        <div class="CardImg">
                            <img src="img/Nogla.jpg">
                        </div>
                        <div class="CardInfo">
                            <h4>Daithi</h4>
                            <p>
                                Daithi is one of Bebop's Day 1 Members! He's an intelligent and a hard-working lad! 
                            </p>
                            <ul class="FollowUs">
                                <li><a href="https://www.facebook.com" target='_blank'><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com" target='_blank'><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com" target='_blank'><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com" target='_blank'><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="Card col-4">
                        <div class="CardImg">
                            <img src="img/Kevin.jpg">
                        </div>
                        <div class="CardInfo">
                            <h4>Kevin</h4>
                            <p>
                                Kevin is a very special person! He's very smart and handsome! Not only that, he can also sing very well! 
                            </p>
                            <ul class="FollowUs">
                                <li><a href="https://www.facebook.com" target='_blank'><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com" target='_blank'><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com" target='_blank'><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com" target='_blank'><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="Card col-4">
                        <div class="CardImg">
                            <img src="img/Brian.jpg">
                        </div>
                        <div class="CardInfo">
                            <h4>Brian</h4>
                            <p>
                                Brian is a talented lad, he's known for his goofy impression of Terminator... yeah thats pretty much it
                            </p>
                            <ul class="FollowUs">
                                <li><a href="https://www.facebook.com" target='_blank'><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com" target='_blank'><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com" target='_blank'><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com" target='_blank'><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
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
                $("p, h2, a, q, span, h4, h3").css("color", "white");
                $(".CardInfo p,.CardInfo h4,.CardInfo .FollowUs a").css("color","black");
                document.getElementById("header").style.backgroundColor="#252525";
                document.getElementById("footer").style.backgroundColor="#252525";
            } else {
                $("body").removeClass('dark');
                $("body").addClass('light');
                $("p, h2, a, q, span, h4, h3").css("color", "black");
                $("#header p, #header a").css("color", "white");
                $("#footer p, #footer h3, #footer h4, #footer a").css("color", "white");
                document.getElementById("header").style.backgroundColor="black";
                document.getElementById("footer").style.backgroundColor="black";
            }
        })
    </script>
</body>
</html>