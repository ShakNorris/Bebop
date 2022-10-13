<?php
session_start();
    if($_SESSION['usertype'] == 0){
        header("location:userpage.php");
        alert("not admin");
    }
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'bebop';
    
    $con = mysqli_connect('localhost','root','','bebop');
    if(!$con){
        die("Failed to connect to Database"); 
    };
    $UserID = $_GET['GetID'];
    $query = "SELECT * FROM accounts WHERE id = '$UserID'";
    $result = mysqli_query($con,$query);
    
    while($row=mysqli_fetch_assoc($result))
    {
        $UserID = $row['id'];
        $FirstName = $row['firstname'];
        $LastName = $row['lastname'];
        $UserName = $row['username'];
        $Password = $row['password'];
        $Email = $row['email'];
    }
?>

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
<section id="userPage">
    <div class ="container">
    <h1>Update User</h1>
    <form class="updateform" action="update.php?ID=<?php echo $UserID ?>" method="post">
        <input type="text" placeholder="First Name" name="firstname" value="<?php echo $FirstName ?>">
        <input type="text" placeholder="Last Name" name="lastname" value="<?php echo $LastName ?>">
        <input type="text" placeholder="Username" name="username" value="<?php echo $UserName ?>">
        <input type="text" placeholder="Password" name="password" value="<?php echo $Password ?>">
        <input type="email" placeholder="Email" name="email" value="<?php echo $Email ?>">
        <button name="update">Update</button>
    </form>
    </div>
</section>
</body
