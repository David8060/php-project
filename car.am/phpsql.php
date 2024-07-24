<?php
$servername = "localhost";
$username = "root";
$password = "zxcft741012";
$dbname = "cars_schema";
$port = "3650"; 

try {
    $dsn = "mysql:host=$servername;dbname=$dbname;port=$port";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>