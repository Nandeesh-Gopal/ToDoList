<?php
$servername = "localhost";
$username = "root";
$password = "your_new_password";      
$database = "ToDoList"; 

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
