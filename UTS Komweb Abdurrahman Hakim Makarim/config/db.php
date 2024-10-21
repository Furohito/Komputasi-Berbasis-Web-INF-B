<?php
// Koneksi ke database MySQL
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "portfolio_db";
$port = 3306;

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
