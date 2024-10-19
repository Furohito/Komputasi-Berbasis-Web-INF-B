<?php
// Koneksi ke database MySQL
$host = 'localhost';
$user = 'root';
$pass = 1234;
$db = 'portfolio_db';
$port = 3306;

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $db, $port);

// Cek koneksi apakah berhasil atau tidak
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Jika gagal, tampilkan pesan error
}
?>
