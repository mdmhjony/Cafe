<?php

$host = "localhost"; // Database host
$username = "root"; // Database username
$password = ""; // Database password
$dbname = "uiucafe"; // Database name

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>