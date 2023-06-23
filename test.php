<?php
$servername="localhost";
$username="username";
$password="password";

//creating connection
$conn = new mysqli($servername, $username, $password);

//checking connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected succesfully";
?>