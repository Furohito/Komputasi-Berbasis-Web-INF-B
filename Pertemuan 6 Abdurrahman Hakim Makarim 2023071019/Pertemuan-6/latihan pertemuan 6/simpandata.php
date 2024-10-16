<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simpan Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
include "koneksi.php"; // Pastikan koneksi ke database sudah benar

// Tangani penghapusan data jika tombol delete ditekan
if (isset($_GET['delete_id'])) {
    $idToDelete = $_GET['delete_id'];
    $sqlDelete = "DELETE FROM biodata WHERE id = $idToDelete";
    if ($koneksi->query($sqlDelete) === TRUE) {
        echo "
        <div class=\"container mt-3\">
            <div class=\"alert alert-success\">
                <strong>Success!</strong> Data berhasil dihapus.
            </div>
        </div>
        ";
    } else {
        echo "Error deleting record: " . $koneksi->error;
    }
}

// Tangani penyimpanan data jika form disubmit
$namaDepan = "";
$namaBelakang = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tombol"])) {
    if (isset($_POST["namadepan"])) {
        $namaDepan = $_POST["namadepan"];
    }
    if (isset($_POST["namabelakang"])) {
        $namaBelakang = $_POST["namabelakang"];
    }
    $sql = "INSERT INTO biodata (namadepan, namabelakang)
            VALUES ('$namaDepan', '$namaBelakang')";

    if ($koneksi->query($sql) === TRUE) {
        echo "
        <div class=\"container mt-3\">
            <div class=\"alert alert-success\">
                <strong>Success!</strong> Data berhasil disimpan.
            </div>
        </div>
        ";
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
?>

<div class="container mt-3">
    <h2>Konfirmasi Input Data Mahasiswa</h2>
    <div class="mb-3 mt-3">
        <label for="namadepan">Nama Depan:</label>
        <?= $namaDepan ?>
    </div>
    <div class="mb-3 mt-3">
        <label for="namabelakang">Nama Belakang:</label>
        <?= $namaBelakang ?>
    </div>
</div>

<div class="container mt-5">
    <h2>Data Mahasiswa</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Depan</th>
            <th>Nama Belakang</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php
        // Query untuk mengambil semua data dari tabel biodata
        $sql = "SELECT * FROM biodata";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            // Output data per baris
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . $row["namadepan"] . "</td>
                    <td>" . $row["namabelakang"] . "</td>
                    <td>
                        <a href='simpandata.php?delete_id=" . $row['id'] . "' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                  </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data yang ditemukan</td></tr>";
        }
        ?>
        </tbody>
    </table>
</div>

</body>
</html>
