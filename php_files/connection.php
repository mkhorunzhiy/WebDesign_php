<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; //повинна бути створена в субд

// Встановлення з'єднання 
$connect = mysqli_connect($servername, $username, $password, $database);

// Перевірка з'єднання
if (!$connect) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>