<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

$connection = mysqli_connect($servername, $username, $password, $database);
if(! $connection) {
  die("Count not mount connection : " . mysqli_error($conn));
} else {
  ECHO "connected Successfully <br />";
}

$sql = "SELECT id, firstname, lastname, email FROM myguests";
$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo " ID : {$row["id"]} <br />";
    echo " Firstname : {$row["firstname"]} <br />";
    echo " Lastname : {$row["lastname"]} <br />";
    echo " Email : {$row["email"]} <br />";
    echo "---------------------------------------- <br />";
  }
} else {
  echo "0 results <br />";
}

mysqli_close($connection);
 ?>
