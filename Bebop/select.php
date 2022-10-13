<?php
$connect = mysqli_connect("localhost","root","","bebop");
if(isset($_POST['select'])){
// Create connection

$query = "SELECT id,firstname,lastname,email FROM accounts ORDER BY id asc";
$result = mysqli_query($connect,$query);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. " " . $row["email"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
}
?>