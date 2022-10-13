<?php
if(isset($_POST["export"])){
    $connect = mysqli_connect("localhost", "root", "", "bebop");  
    header('Content-Type: text/csv; charset=utf-8');  
    header('Content-Disposition: attachment; filename=data.csv');  
    $output = fopen("php://output", "w");  
    fputcsv($output, array('id', 'firstname', 'lastname', 'username', 'password', 'email','vkey','verified','createdate'));  
    $query = "SELECT * from accounts ORDER BY id asc";  
    $result = mysqli_query($connect, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
         fputcsv($output, $row);  
    }  
    fclose($output); 
}
?>