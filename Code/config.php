<?php
$servername = "localhost";
$username = "id15483817_root";
$password = "20020726Dav!";
$DBNAME="id15483817_testbot";

// Create connection
$conn = new mysqli($servername, $username, $password,$DBNAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>