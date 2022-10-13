<?php 
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'bebop';

    $connect = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(isset($_POST['update']))
    {
        $UserID = $_GET['ID'];
        $FirstName = $_POST['firstname'];
        $LastName = $_POST['lastname'];
        $UserName = $_POST['username'];
        $Password = $_POST['password'];
        $Email = $_POST['email'];

        $Password = md5($Password);
        $query = "UPDATE accounts set firstname = '$FirstName', lastname = '$LastName', username = '$UserName', password='$Password' ,email='".$Email."' where id = '$UserID'";
        $result = mysqli_query($connect,$query);

        if($result)
        {
            header("location:userpage.php");
        }
        else
        {
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:userpage.php");
    }


?>