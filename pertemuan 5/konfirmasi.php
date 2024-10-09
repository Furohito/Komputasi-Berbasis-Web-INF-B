<!--Pakai pdo-->

<?php
// Fungsi untuk menghitung usia berdasarkan tanggal lahir
function hitung_usia($tanggal_lahir) {
    $lahir = new DateTime($tanggal_lahir);
    $hari_ini = new DateTime();
    $usia = $hari_ini->diff($lahir);
    return $usia->y . " tahun, " . $usia->m . " bulan, " . $usia->d . " hari";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $usia = hitung_usia($tanggal_lahir);

    // Validasi dan mengggabungkan hobi jika dipilih
    if (isset($_POST['hobi']) && is_array($_POST['hobi']) && count($_POST['hobi']) > 0) {
        $hobi = implode(", ", $_POST['hobi']);
    } else {
        $hobi = "Tidak ada hobi yang dipilih";
    }

    try {
        // Koneksi ke database port 3308
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "pertemuan5";
        $port = 3308;  // Port MySQL yang digunakan

        // Buat koneksi ke database dengan port 3308
        $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Query untuk menyimpan data ke tabel "users"
        $sql = "INSERT INTO users (nama, email, hobi, jenis_kelamin, usia, tanggal_lahir)
                VALUES (:nama, :email, :hobi, :jenis_kelamin, :usia, :tanggal_lahir)";

        // Eksekusi query
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':hobi', $hobi);
        $stmt->bindParam(':jenis_kelamin', $jenis_kelamin);
        $stmt->bindParam(':usia', $usia);
        $stmt->bindParam(':tanggal_lahir', $tanggal_lahir);
        $stmt->execute();

        echo "<div class='alert alert-success'>Data berhasil disimpan!</div>";
    } catch (PDOException $e) {
        echo "<div class='alert alert-danger'>Error: " . $e->getMessage() . "</div>";
    }
}
?>
