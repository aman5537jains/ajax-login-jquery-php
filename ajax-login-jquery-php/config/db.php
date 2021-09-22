<?php 

$servername = "localhost";
$username = "root";
$password = "abno@123";
$database = "test_db";

// Create connection
$mysqli_conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($mysqli_conn->connect_error) {
  die("Connection failed: " . $mysqli_conn->connect_error);
}

 
?>