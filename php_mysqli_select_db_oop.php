<?php
$host = "localhost:3307";
$user = "root";
$password = "";

$conn = new mysqli($host, $user, $password);

if($conn->connect_errno > 0) {
    trigger_error("Count not mount connection : " . $conn->connect_error);
}
echo "Connected Successfully. <br />";

$db = $conn->select_db("registrationdb");

if($conn->connect_errno > 0) {
    trigger_error($conn->connect_error);
}
echo "Database Selected Successfully <br />";

$conn->close();
?>
