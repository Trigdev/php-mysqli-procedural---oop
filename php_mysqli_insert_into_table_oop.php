<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "users";

$conn = new mysqli($host, $user, $password, $database);
if($conn -> connect_errno > 0) {
    trigger_error("Count not mount connection : " . $conn -> connect_error);
} else {
    echo "Connected Successfully <br />";
}

$conn -> select_db("users");

$sql = "INSERT INTO myguests(firstname, lastname, email) VALUES('John', 'Doe', 'johndoe@gmail.com')"; 
$result = $conn -> query($sql);
if($result === TRUE) {
    echo "New Record Created Successfully <br />";
} else {
    trigger_error("Error : " . $sql . "<br />" . $conn->error);
}

$conn->close();
?>