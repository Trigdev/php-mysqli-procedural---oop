<?php
$host = "localhost:3307";
$user = "root";
$password = "";

$conn = mysqli_connect($host, $user, $password);

if(!$conn) {
    trigger_error("Count not mount connect : " . mysqli_connect_error());
}
echo "Connected Successfully. <br />";

mysqli_select_db($conn, "registrationdb");
echo "Database Selected Successfully. <br />";

mysqli_close($conn);
?>