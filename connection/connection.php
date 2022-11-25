<?php
define("SERVERNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "users");

$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
if($conn->connect_error) {
  trigger_erro("Error : " . $conn->connect_error);
} else {
  echo "Connected Successfully <br />";
}
