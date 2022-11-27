<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    trigger_error("Error : " . $conn -> connect_error);
} else {
    echo "Connected Successfully <br />";
}

$sql = "INSERT INTO myguests(firstname, lastname, email) VALUES ('Pever', 'Collins', 'collinsecady@gmail.com')";

$retval = $conn->query($sql);
if($retval === TRUE) {
    $last_id = $conn->insert_id;
    echo "New Recorded created successfully, ID : " . $last_id . "<br />";
} else {
    trigger_error("Error : " . $sql . " <br />" . $conn->error);
}

$conn->close();
?>