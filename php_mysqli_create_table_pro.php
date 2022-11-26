<?php
$host = "localhost:3307";
$user = "root";
$password = "";

$conn = mysqli_connect($host, $user, $password);
if(!$conn) {
    trigger_error("Error Connecting to server : " . mysqli_connect_error());
}
echo "Connected Successfully. <br />";

mysqli_select_db($conn, "prelix");

$sql = "CREATE TABLE all_users(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(25) NOT NULL,
    password VARCHAR(25) NOT NULL);";
 
 $result = mysqli_query($conn, $sql);
 if($result === TRUE) {
     echo "Table Created Successfully. <br />";
 } else {
     echo "Error : " . mysqli_error($conn);
 }

mysqli_close($conn);
?>