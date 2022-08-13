<?php
$servername = "https://us-cdbr-east-06.cleardb.net/";
$username = "b920520e2d5cfd";
$password = "53cac20c ";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
