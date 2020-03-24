<?php
$UUID = $_GET['UUID'];$Major = $_GET['Major'];$Minor = $_GET['Minor'];$RSSI = $_GET['RSSI'];$Proximity = $_GET['Proximity'];$Name = $_GET['Name'];$Description = $_GET['Description'];// Create connection$conn = mysqli_connect("localhost","tonysema","qizA5D4g84","tonysema_location");
// Check connectionif ($conn->connect_error) {    die("Connection failed: " . $conn->connect_error);}
$sql = "INSERT INTO beacon (UUID, Major, Minor, RSSI, Proximity, Name, Description )VALUES ('$UUID', '$Major','$Minor','$RSSI','$Proximity', '$Name', '$Description')";
if ($conn->query($sql) === TRUE) {    echo "New record created successfully";} else {
    echo "Error: " . $sql . "<br>" . $conn->error;  }
$conn->close();?>