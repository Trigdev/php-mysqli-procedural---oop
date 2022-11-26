<?php
$host = "localhost:3307";
$user = "root";
$password ="";

$conn = mysqli_connect($host, $user, $password);

if(!$conn) {
    trigger_error("Could not mount conection : " . mysqli_connect_error());
}
echo "Connected Successfully <br />";

$sql = "CREATE DATABASE prolix";
$retval = mysqli_query($conn, $sql);

if(! $retval) {
    trigger_error("Could not create database : " . mysqli_error($conn));
}
echo "Database Created Successfully. <br />";

mysqli_close($conn);
?>