<?php
$error = NULL;

if(isset($_POST['submit']))
{
	session_start();
	$mysqli = NEW MySQLi('localhost','root','','bebop');
	$con = mysqli_connect('localhost','root','','bebop');
    if(!$con){
		die("Failed to connect to Database"); 
	}

	$uname = $mysqli->real_escape_string($_POST['uname']);
	$psw = $mysqli->real_escape_string($_POST['psw']);
	$psw = md5($psw);

	$resultSet = $mysqli->query("SELECT * FROM accounts WHERE username = '$uname' AND
	password = '$psw' LIMIT 1");

	if($resultSet->num_rows != 0){
		//Process login
		$row = $resultSet->fetch_assoc();
		$verified = $row['verified'];
		$email = $row['email'];
		$usertype = $row['usertype'];

		if($verified == 1){
			//continue
			$_SESSION['uname'] = $uname;
			$_SESSION['usertype'] = $usertype;
			header('location:home.php');
		}
		else{
			$error = "this account has not been verified, an email was sent to $email";
		}
	}
	else{
		$error = "The username or password is incorrect :(";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="css/Login.css">
	<link rel="stylesheet" href="css/fontawesome-free-5.13.0-web/css/all.css">
</head>
<body>
<div class="Login-box">
	<h1>Login</h1>
	<form method="POST" action="">
		<div class="textbox">
			<i class="fas fa-user"></i>
      		<input type="TEXT" placeholder="Enter Username" name="uname" require>
      	</div>
      	<div class="textbox">
      		<i class="fas fa-lock"></i>
      		<input type="PASSWORD" placeholder="Enter Password" name="psw" required>
      	</div>
      	<br>
      	<input class="button" type="SUBMIT" name="submit" value="Sign in">
      	<br>
      	<a href="Registration.php">Not Registered?</a>
	</form>
</div>
</body>
</html>