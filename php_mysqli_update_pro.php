<?php
require_once("connection/connection.php");

$sql = "UPDATE myguests SET `lastname` = 'Christopher' WHERE id = 1";
$upd = mysqli_query($conn, $sql);

if($upd === TRUE) {
  echo "recorded updated successfully <br />";
} else {
  echo "error in updating record : " . mysqli_error($conn);
}

mysqli_close($conn);
?>
