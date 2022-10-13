<?php
$error= NULL;
if(isset($_POST['submit'])){
	//Get form data
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$psw = $_POST['psw'];
	$psw2 = $_POST['psw2'];
	$email = $_POST['email'];

	if(strlen($uname)< 5){
		$error = "<p>Your username must be at least 5 characters</p>";
	}
	elseif($psw2 != $psw){
		$error .= "<p>Your passwords don't match!</p>";
	}
	else{
		//form is valid

		//connect to the database
		$mysqli = NEW MySQLi('localhost','root','','bebop');
		$con = mysqli_connect('localhost','root','','bebop');
    	if(!$con){
			die("Failed to connect to Database"); 
		}

		//Sanitize form data
		$fname = $mysqli->real_escape_string($fname);
		$lname = $mysqli->real_escape_string($lname);
		$uname = $mysqli->real_escape_string($uname);
		$psw = $mysqli->real_escape_string($psw);
		$psw2 = $mysqli->real_escape_string($psw2);
		$email = $mysqli->real_escape_string($email);

		//Generate Vkey
		$vkey = md5(time().$uname);

		//Insert account into database
		$psw = md5($psw);
		$insert = $mysqli->query("INSERT INTO accounts(firstname,lastname,username,password,email,vkey)
		VALUES('$fname','$lname','$uname','$psw','$email','$vkey')");

		if($insert){
			//Send Mail
			$to = $email;
			$subject = "Email Verification";
			$message = "<a href='http://localhost/Bebop/verify.php?vkey=$vkey'> Register Account!</a>";
			$headers = "From: shako.kushashvili@gmail.com \r\n";
			$headers .= "MIME-Version : 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			mail($to,$subject,$message,$headers);

			header('location:Login.php');
		}
		else{
			echo $mysqli->error;
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration</title>
	<link rel="stylesheet" href="css/Login.css">
	<link rel="stylesheet" href="css/fontawesome-free-5.13.0-web/css/all.css">
</head>
<body>
<div class="Login-box">
	<h1>Registration</h1>
	<form method="POST" action="">
        <div class="textbox">
            <i class="fas fa-signature"></i>
            <input type="TEXT" placeholder="Enter First Name" name="fname" require>
        </div>
        <div class="textbox">
            <i class="fas fa-signature"></i>
            <input type="TEXT" placeholder="Enter Last Name" name="lname" require>
        </div>
		<div class="textbox">
			<i class="fas fa-user"></i>
      		<input type="TEXT" placeholder="Enter Username" name="uname" require>
      	</div>
      	<div class="textbox">
      		<i class="fas fa-lock"></i>
      		<input type="PASSWORD" placeholder="Enter Password" name="psw" required>
		</div>
		<div class="textbox">
      		<i class="fas fa-lock"></i>
      		<input type="PASSWORD" placeholder="Confirm Password" name="psw2" required>
		</div>
		<div class="textbox">
            <i class="fas fa-envelope"></i>
            <input type="EMAIL" placeholder="Enter Email" name="email" require>
        </div>
      	<br>
      	<input class="button" type="SUBMIT" name="submit" value="Register">
      	<br>
	</form>
</div>
</body>
</html>