<?php
$servername = "localhost";
$username = "root";
$password = ""; // default XAMPP password is empty
$dbname = "login_db"; // make sure this matches your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
