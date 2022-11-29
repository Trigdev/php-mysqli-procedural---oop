<?php
require_once("connection/connection.php");

$query = "DELETE FROM myguests WHERE ID = 3";
$del = $conn->query($query) or die(mysqli_error($conn));

if($del === TRUE) {
  echo "Record Deleted Successfully \n";
} else {
  echo "Error in deleting record : " . mysqli_error($conn);
}

$conn->close();
 ?>
