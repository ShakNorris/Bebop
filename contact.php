<?php
    class ImgUploader{
        public $name;
        public $tmp_name;
        public $error;

        public $con;

        public function __construct($name,$tmp_name,$error)
        {
            $this->name = $name;
            $this->tmp_name = $tmp_name;
            $this->error= $error;
        }

        public function connect(){
            $this->con = mysqli_connect('localhost','root','','bebop');
            if(!$this->con){
                die("Failed to connect to Database"); 
            }
        }

        public function uploadImage()
        {
            if(isset($this->name)){
                $location = 'uploads/';
            }

            move_uploaded_file($this->tmp_name, $location.$this->name);
            
            $sql = "INSERT INTO images(image) VALUES('$this->name')";
    
            mysqli_query($this->con,$sql);
        }
    }

    if(isset($_POST['uploadfilesub'])){
        try{
            $image = new ImgUploader($_FILES["file"]["name"], $_FILES['file']['tmp_name'], $_FILES['file']['error']);
            $image->connect();
            $image->uploadImage();
        }
        catch(Exception $e){
            echo 'Message : '.$e->getMessage();
        }
    }

    //OOPis gareshe:

    // $mysqli = NEW MySQLi('localhost','root','','bebop');
    // $con = mysqli_connect('localhost','root','','bebop');
    // if(!$con){
    //     die("Failed to connect to Database"); 
    // }

    // if(isset($_POST['uploadfilesub'])){
    //     try{
    //         $name = $_FILES["file"]["name"];
    //         $tmp_name = $_FILES['file']['tmp_name'];
    //         $error = $_FILES['file']['error'];
            
    //         if(isset($name)){
    //             $location = 'uploads/';
    //         }
    //         move_uploaded_file($tmp_name, $location.$name);
            
    //         $sql = "INSERT INTO images(image) VALUES('$name')";
    
    //         mysqli_query($con,$sql);
    //     }
    //     catch(Exception $e){
    //         echo 'Message : '.$e->getMessage();
    //     }
    // }
?>

<!DOCTYPE html>
<html>
<head>
<title>Bebop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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

    <section id="ContactUs">
        <div class="container">
            <h2>Contact Us</h2>    
            <p class="Subtext">If you have any questions, contact us!</p>
            <div class="Contacts clearfix">
                <form>
                    <label for="fname">Your Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your Name">
                    <label for="lname">Your Email</label>
                    <input type="email" id="mail" name="email" placeholder="Your Email">
                    <label for="subject">Your Message</label>
                    <textarea id="subject" name="subject" placeholder="Write Something here!" style="height:200px"></textarea>
                    <!-- <input type="submit" value="Submit"> -->
                </form>
                <div class="WhereWeAre">
                    <div class="contact-info">
                        <span>GET IN TOUCH</span>
                        <p>+00 123.456.789</p>
                        <p>+00 123.456.789</p>
                    </div>

                    <div class="contact-info">
                        <span>WHERE WE ARE</span>
                        <p>123 Plaegrownd Stret</p>
                        <p>Los Santos</p>
                        <p>123-4567-890</p>
                        <p>USA</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="UploadFile">
    <div class="container">
            <h2>Upload a File</h2>    
            <p class="Subtext">If you have any cool images, send it to us!</p>
            <div class="Uploads clearfix">
                <form method="POST" enctype="multipart/form-data">
                    <label>Upload File</label>
                    <input type="file" name="file" id="file">
                    <input type="submit" name = "uploadfilesub">
                </form>
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
                document.getElementById("header").style.backgroundColor="#252525";
                document.getElementById("footer").style.backgroundColor="#252525";
                $("p, h2, a, q, span, h4, label").css("color", "white");
            } else {
                $("body").removeClass('dark');
                $("body").addClass('light');
                document.getElementById("header").style.backgroundColor="black";
                document.getElementById("footer").style.backgroundColor="black";
                $("p, h2, a, q, span, h4, label").css("color", "black");
                $("#header p, #header a").css("color", "white");
                $("#footer p, #footer h3, #footer h4, #footer a").css("color", "white");
            }
        })
    </script>
</body>
</html>