<?php
$host = "localhost:3307";
$user = "root";
$password = "";

$conn = new mysqli($host, $user, $password);
if ($conn->connect_errno > 0) {
    trigger_error($conn->connect_error);
}
echo "Connected Successfully. <br />";

$db = $conn->select_db("prolix");

if($db === FALSE) {
    trigger_error("Could not select database : " . $db->mysqli_error);
}
echo "Database Selected Successfully. <br />";

$sql = "CREATE TABLE users(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(25) NOT NULL,
password VARCHAR(25) NOT NULL)";

$retval = $conn -> query($sql);
if($retval === FALSE) {
    trigger_error($conn->error);
}
echo "Table Created Successfully. <br />";

$conn->close();
?>
