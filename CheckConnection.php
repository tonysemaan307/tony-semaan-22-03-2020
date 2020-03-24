<?php

// Create connection
$conn = mysqli_connect("localhost","tonysema","qizA5D4g84","tonysema_location");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
  echo "successfully";
}
$conn->close();
?>
