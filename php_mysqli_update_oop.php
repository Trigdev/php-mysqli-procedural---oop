<?php
require_once("connection/connection.php");

$sql = "UPDATE myguests SET `firstname` = 'Shagbaor' WHERE id = 5";
$upd = $conn->query($sql);

if($upd === TRUE) {
  echo "recorded updated successfully <br />";
} else {
  echo "error in updating record : " . mysqli_error($conn);
}

$conn->close();
?>
