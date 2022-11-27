<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    trigger_error("Error :  " . $conn->connect_error);
} else {
    echo "Connected Successfully <br />";
}

$stmt = $conn->prepare("INSERT INTO myguests(firstname, lastname, email) VALUES(?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname = "Ahor";
$lastname = "Shidoon";
$email = "shidoonmercy@gmail.com";
$stmt->execute();

$firstname = "Aondowase";
$lastname = "Mercy";
$email = "stephenmercy@gmail.com";
$stmt->execute();

$firstname = "Ali";
$lastname = "Confidence";
$email = "queenpearl@gmail.com";
$stmt->execute();

$firstname = "Edeh";
$lastname = "Sarah";
$email = "edehsaraphinal@gmail.com";
$stmt->execute();

echo "New Records Created Successfully <br />";

$stmt->close();
$conn->close();
?>