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

$sql = "INSERT INTO myguests(firstname, lastname, email) VALUES('Shie', 'Paul', 'paulshie@gmail.com');";
$sql .= "INSERT INTO myguests(firstname, lastname, email) VALUES('Agenaton', 'Kezziah', 'agenatonkez@gmail.com');";
$sql .= "INSERT INTO myguests(firstname, lastname, email) VALUES('Agenaton', 'Tersoo', 'chochomayoki@gmail.com');";
$sql .= "INSERT INTO myguests(firstname, lastname, email) VALUES('Agenaton', 'David', 'profton@gmail.com')";

$retval = mysqli_multi_query($conn, $sql);
if($retval === TRUE) {
    echo "New Records Created Successfully <br />";
} else {
    trigger_error("Error : " . $sql . " : " . mysqli_error($conn));
}

mysqli_close($conn);
?>