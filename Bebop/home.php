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
        if($_SESSION['uname']){         
            echo $_SESSION['uname'];
            if($_SESSION['usertype'] == 1){
                echo "<i class='fas fa-certificate'></i>";
            }
            echo '<style>#SignIn {display:none;}</style>';
        }
        else{
            echo '<style>#accountpage {display:none;}</style>';
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

<section id="News">
    <div class="container row">
        <h2>LATEST</h2>
        <p class="Subtext">most recent news</p>
        <div class="Main col-12">
            <div class="MainText">
                <h4>News</h4>
                <a href="#">Logic’s next project will be a sequel to his 2014 debut album ‘Under Pressure’</a>
                <q>I’ve been working on an album right now which is a sequel to my first album, Under Pressure,
                    and it talks about a lot of really dope things on it.
                </q>
            </div>
            <aside class="MainImg">
                <a href="#"><img src="img/LogicConcert.jpg"></a>
            </aside>
        </div>

        <div class="LatestSection">
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture Weeknd">
                        <p>The Weeknd, Metro Boomin, & More Call On Record Labels To Support The Black Lives Matter Movement</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture KillerMike">
                        <p>Killer Mike References The Last Words Of Eric Garner On Run The Jewels’ “Walking In The Snow”</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture LadyGaga">
                        <p>Lady Gaga Shuts Down Web Store During Her Album Release Week In Solidarity With Protesters</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture Drakeo">
                        <p>Drakeo the Ruler Releases New Mixtape Thank You for Using GTL</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture JCole">
                        <p>J. Cole Joins Protesters In Fayetteville, NC After Death Of George Floyd</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture Kendrick">
                        <p>Kendrick Lamar to Return Soon, Says TDE CEO</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture Kanye">
                        <p>Kanye West Donates $2M, Launches Education Plan for George Floyd's Daughter</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture MGK">
                        <p>Machine Gun Kelly & Travis Barker Reflect on LA Protest Experience for Rage Against the Machine's 'Killing In The Name' Cover</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture Marshmello">
                        <p>Marshmello Donates $50,000 to the NAACP: 'Underneath This Costume I Am Human & This Is My Tipping Point'</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture RTJ">
                        <p>Killer Mike & El-P Release ‘Run The Jewels 4’ Early In Response To Police Brutality Protests</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture Bono">
                        <p>U2’s Bono debuts star-studded ‘Beautiful Day’ cover and shares powerful speech</p>
                    </div>
                </a>
            </div>
            <div class="wrapper col-4">
                <h4>News</h4>
                <a href="#" target="_blank">
                    <div class="newsPicture JID">
                        <p>J.I.D's Plans For New Music Have Been Derailed</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="LoadMore">
            <a id="Load" href="#">LOAD MORE</a>
        </div>
</section>
<section id="Videos">
    <div class="container">
        <h2>VIDEOS</h2>
        <p class="Subtext">official music videos & break downs</p>
        <div class="Vids row">
            <div class="MusicVid col-6">
                    <a href="https://www.youtube.com/watch?v=kGNhEtOVxek">
                        <img src="img/SpillVill.jpg">
                        <p>
                            Spillage Village—Supergroup With J.I.D, EarthGang, 6LACK, Mereba—Share New Song "End of Daze": Listen
                        </p>
                    </a>
            </div>
            <aside class="OtherVids col-6">
                <h4>Watch Now</h4>
                <div class="VidBox">
                    <div class="OtherVid">
                        <a href="https://www.youtube.com/watch?v=GGyEDIz9jek">
                            <img src="img/BBNOY2K.jpg">
                            <p>Y2K & bbno$ "Lalala" Official Lyrics & Meaning | Verified</p>
                        </a>
                    </div>
                    <div class="OtherVid">
                        <a href="https://www.youtube.com/watch?v=aSUMCmu08bI&t=46s">
                            <img src="img/HueyLewis.jpg">
                            <p>Huey Lewis Breaks Down His Albums, From Huey Lewis and the News to Weather</p>
                        </a>
                    </div>
                    <div class="OtherVid">
                        <a href="https://www.youtube.com/watch?v=huRFB-urWAc">
                            <img src="img/Jaden.jpg">
                            <p>Jaden Smith released a new music video "Ninety": Listen</p>
                        </a>
                    </div>
                </div>
                <a href="#">More Videos <i class="fas fa-arrow-right"></i></a>
            </aside>
        </div>
    </div>
</section>
<section id="BestNewMusic">
    <div class="container">
        <i class="fas fa-crown"></i>
        <h2>Best New Music</h2>
        <p class="Subtext">Bebop's way of highlighting the finest music of the current moment</p>
        <div class="BestMusicWrapper">
            <div class="bestwrap">
                <a href="#" target="_blank">
                    <div>
                        <p>Best New Album</p>
                        <img src="img/albums/AfterHours.jpg">
                        <p>The Weeknd</p>
                        <p>After Hours</p>
                        <span>R&B/Soul</span>
                    </div>
                </a>
            </div>
            <div class="bestwrap">
                <a href="#" target="_blank">
                    <div>
                        <p>Best New Track</p>
                        <img src="img/albums/SnowBluff.jpg">
                        <p>J. Cole</p>
                        <p>Snow On Tha Bluff</p>
                        <span>Hip-Hop/Rap</span>
                    </div>
                </a>
            </div>
            <div class="bestwrap">
                <a href="#" target="_blank">
                    <div>
                        <p>Best New Reissue</p>
                        <img src="img/albums/ROTD3.jpg">
                        <p>DreamVille</p>
                        <p>Revenge Of The Dreamers 3</p>
                        <span>Hip-Hop/Rap</span>
                    </div>
                </a>
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
            $("p, h2, a, q, span, h4").css("color", "white");
            document.getElementById("Load").style.cssText="color:#8548FF; background-color:black; border-color:#8548FF";
            document.getElementById("header").style.backgroundColor="#252525";
            document.getElementById("footer").style.backgroundColor="#252525";
        } else {
            $("body").removeClass('dark');
            $("body").addClass('light');
            $("p, h2, a, q, h4").css("color", "black");
            $("span").css("color","grey");
            $("#Videos p, #Videos h2, #Videos span, #Videos h4, #Videos a").css("color", "white");
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