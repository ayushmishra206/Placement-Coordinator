<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notify";
$subject = $_POST["subject"];
$message = $_POST["message"];
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT into notice (`subject`, `message`) VALUES('$subject', '$message')";

if (mysqli_query($conn, $sql)) {
  echo "Message Posted";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>