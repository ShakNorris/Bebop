<?php 
session_start();
        if(isset($_GET['Del']))
        {
            if($_SESSION['usertype'] == 1){
                $con = mysqli_connect('localhost','root','','bebop');
                if(!$con){
                    die("Failed to connect to Database"); 
                }
                $UserID = $_GET['Del'];
                $query = "DELETE FROM accounts WHERE id = '$UserID'";
                $result = mysqli_query($con,$query);

                if($result)
                {
                    header("location:userpage.php");
                }
                else
                {
                    echo 'Please Check Your Query ';
                }
            }
            else{
                header("location:userpage.php");
                alert("not admin");
            }
            
        }
        else
        {
            header("location:userpage.php");
        }

?>