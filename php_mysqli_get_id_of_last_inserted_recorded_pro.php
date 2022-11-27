<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn) {
    trigger_error("Error : " . mysqli_connect_error($conn));
} else {
    echo "Connected Successfully <br />";
}

$sql = "INSERT INTO myguests(firstname, lastname, email) VALUES ('Abur', 'Daniel', 'aburdan@gmail.com')";
$retval = mysqli_query($conn, $sql);

if($retval === TRUE) {
    $last_id = mysqli_insert_id($conn);
    echo "New Record Created Successfully : ID : " . $last_id;
} else {
    trigger_error("Error : " . mysqli_error($conn));
}

mysqli_close($conn);
?>