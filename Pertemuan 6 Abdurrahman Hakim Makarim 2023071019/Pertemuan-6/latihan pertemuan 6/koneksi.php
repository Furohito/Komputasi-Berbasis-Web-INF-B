<?php
$host = "localhost";
$user = "root";
$pass = "";
$namaDB = "komwebpert6";
$port = 3308;
/*
$koneksi = mysqli_connect($host, $user,$pass, $namaDB, $port);
 if (!$koneksi) {
    die("Koneksi Gagal");
} */
//mengaktifkan mode exception utk mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    //membuat koneksi ke database
    $koneksi = mysqli_connect($host, $user,$pass, $namaDB, $port);
    //kalau berhasil
    //echo "Koneksi berhasil";
} catch (mysqli_sql_exception $e) {
    //kalau terjadi kesalahan koneksi
    echo "Koneksi gagal " .$e->getMessage();
}

?>