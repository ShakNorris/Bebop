<?php
if(isset($_GET['vkey'])){
    //Verification
    $vkey = $_GET['vkey'];

    $mysqli = NEW MySQLI('localhost','root','','bebop');
    $con = mysqli_connect('localhost','root','','bebop');
    if(!$con){
		die("Failed to connect to Database"); 
	}

    $resultSet = $mysqli->query("SELECT verified,vkey FROM accounts Where verified = 0 AND vkey = '$vkey' LIMIT 1");

    if($resultSet->num_rows == 1){
        //validate the email
        $update = $mysqli->query("UPDATE accounts SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
        
        if($update){
            echo "Your account has been verified! you may now login";
        }
        else{
            echo $mysqli->error;
        }
    }
    else{
        echo "This account is invalid or already verified"
    }
}
else{
    die("Something went wrong :(")
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Verification</title>
	<link rel="stylesheet" href="css/Login.css">
	<link rel="stylesheet" href="css/fontawesome-free-5.13.0-web/css/all.css">
</head>
<body>
<div class="Login-box">

</div>
</body>
</html>