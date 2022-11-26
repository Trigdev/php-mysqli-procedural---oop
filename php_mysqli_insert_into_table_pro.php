<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "users";

// mounting connectio using procedural style
$conn = mysqli_connect($host, $user, $password, $database);
if(! $conn) {
    trigger_error("Error : " . mysqli_connect_error());
} else {
    echo "Connected Successfully <br />";
}

mysqli_select_db($conn, "users");

$sql = "INSERT INTO myguests(firstname, lastname, email) VALUES('Asen', 'Phanie', 'stephanieasen@gmail.com')";
$retval = mysqli_query($conn, $sql);
if($retval === TRUE) {
    echo "New Record Created Successfully <br />";
} else {
    trigger_error("Error : " . $sql . " : " . mysqli_error($conn));
}

mysqli_close($conn);
?>