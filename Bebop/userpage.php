<!DOCTYPE html>
<html>
<head>
<title>Bebop</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/png" href="img/LogoMakr_5hDjF7.png">
<link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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
    <section id="userPage">
        <div class ="container">
            <h2>Profile Page</h2>
            <p class="Subtext">Welcome to your profile page!</p>
            <div class="profile">
                <div class="left">
                    <img src="img/LogoMakr_4Pmsgr.png" 
                    alt="user" width="100">
                     <p>Bebop's Own</p>
                     <?php echo $_SESSION['uname'];?>
                </div>
                <div class="right">
                    <div class="info">
                        <h3>Information</h3>
                        <div class="info_data">
                             <div class="data">
                               <h4>Phone</h4>
                            <p>0001-213-998761</p>
                          </div>
                        </div>
                    </div>
                  
                  <div class="projects">
                        <h3>Projects</h3>
                        <div class="projects_data">
                             <div class="data">
                                <h4>Recent</h4>
                                <p>Lorem ipsum dolor sit amet.</p>
                             </div>
                             <div class="data">
                               <h4>Most Viewed</h4>
                                <p>dolor sit amet.</p>
                          </div>
                        </div>
                    </div>
                  
                    <div class="social_media">
                        <ul>
                          <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                    </div>
                    <div class="logout">
                    <a href="logout.php">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Community">
        <div class ="container">
            <h2>Community</h2>
            <p class="Subtext">Meet our users!</p>
            <form style="text-align:center;margin-top:20px;" class="export" method="POST" action="export.php">
                <input type="submit" name="export" value="CSV Export">
            </form>
            <form style="text-align:center;margin-top:20px;" class="select" method="POST" action="">
                <input type="submit" name="select" value="Show Users">
            </form>
            <div>
                <?php
                    $db_hostname = 'localhost';
                    $db_username = 'root';
                    $db_password = '';
                    $db_name = 'bebop';
                    $connect = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
                    $query = "SELECT id,firstname,lastname,email FROM accounts ORDER BY id asc";
                    $result = mysqli_query($connect,$query);
                    if(isset($_POST['select'])){
                echo "<table class='content-table'>
                 <thead>
                    <tr>
                    <th>ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                </thead>";
                echo "<tbody>";
                while($row = $result->fetch_assoc()) {
                    $UserID = $row['id'];
                    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["email"]. "</td>
                    <td><a href='edit.php?GetID=$UserID'>Edit</a></td>
                    <td><a href='delete.php?Del=$UserID'>Delete</a></td></tr>";
                  }
                 echo "</tbody>
                    </table>";
                }
                ?>
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