<?php
$UUID = $_GET['UUID'];
// Check connection
$sql = "INSERT INTO beacon (UUID, Major, Minor, RSSI, Proximity, Name, Description )
if ($conn->query($sql) === TRUE) {
    echo "Error: " . $sql . "<br>" . $conn->error;
$conn->close();