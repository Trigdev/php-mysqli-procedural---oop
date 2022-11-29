<?php
require_once("connection/connection.php");

$query = "DELETE FROM myguests WHERE ID = 4";
$del = mysqli_query($conn, $query);

if($del === TRUE) {
  echo "Record Deleted Successfully \n";
} else {
  echo "Error in deleting record : " . mysqli_error($conn);
}

mysqli_close($conn);
 ?>
