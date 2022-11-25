<?php
// using procedural style
$host = "localhost:3307";
$user = "root";
$password = "";

$conn = mysqli_connect($host, $user, $password);
if (!$conn) {
    trigger_error("Could not connect : " . mysqli_connect_errno());
}
echo "Connected Successfully \n";

mysqli_close($conn);
?>