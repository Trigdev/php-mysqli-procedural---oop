<?php
$host = "localhost:3307";
$user = "root";
$password = "";

$conn = new mysqli($host, $user, $password);

if($conn -> connect_errno > 0) {
    trigger_error("Could not mount connection : " . $conn->connect_error);
}
echo "Connected Successfully <br />";

$sql = "CREATE DATABASE prelix";
$result = $conn->query($sql);

if($conn -> connect_errno > 0) {
    trigger_error($conn->error);
}
echo "Database Created Successfully <br />";

$conn -> close();
?>
