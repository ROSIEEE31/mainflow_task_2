<?php
$host = "localhost";
$user = "root";
$port = "3307";
$pass = "";
$db = "user_auth";

$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
