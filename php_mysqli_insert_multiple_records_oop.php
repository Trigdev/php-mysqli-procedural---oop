<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "users";

$conn = new mysqli($host, $user, $password, $database);
if($conn->connect_errno > 0) {
    trigger_error("Count not mount connection : " . $conn -> connect_error);
} else {
    echo "Connected Successfully <br />";
}

$conn->select_db("users");

$sql = "INSERT INTO myguests(firstname, lastname, email) VALUES('Iorngbough', 'Charles', 'rapkid@gmail.com')"; 
$sql .= "INSERT INTO myguests(firstname, lastname, email) VALUES('Akaakohol', 'Kingdom', 'heaven@gmail.com')"; 
$sql .= "INSERT INTO myguests(firstname, lastname, email) VALUES('Faga', 'Rex', 'fagarex@gmail.com')"; 

if($conn->multi_query($sql) === TRUE) {
    echo "New Records Created Successfully <br />";
} else {
    trigger_error("Error : " . $sql . "<br />" . $conn->error);
}

$conn->close();
?>