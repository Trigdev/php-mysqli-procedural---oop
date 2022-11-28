<?php
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "users");

$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
if($conn->connect_error) {
  trigger_error("Error : " . $conn->connect_error);
} else {
  echo "Connected Successfully <br />";
}

$sql = "SELECT id, firstname, lastname, email FROM myguests";
$result = $conn->query($sql) or die(mysqli_error($conn));

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "ID : {$row["id"]} <br /> ";
    echo "Firstname : {$row["firstname"]} <br />";
    echo "Lastname : {$row["lastname"]} <br />";
    echo "Email : {$row["email"]} <br />";
    echo "--------------------------------------- <br />";
  }
} else {
  echo "0 results <br />";
}

$conn->close();
?>
