<?php
// using object oriented style
$host = "localhost:3307";
$user = "root";
$password = "";
$database = "";

$conn = new mysqli($host, $user, $password);
$conn->select_db("registrationdb");

if ($conn->connect_errno > 0) {
    trigger_error($db->connect_error());
}
echo "Connected Successfully \n";
$conn->close();
?>