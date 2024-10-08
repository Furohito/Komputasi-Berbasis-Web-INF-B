<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
    echo "<br>Script di Head</br>";
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Lat PHP"; ?></title>
</head>
<body>
<?php
$namaDepan = "Abdurrahman";
$namaBelakang = "Hakim Makarim";

$namaLengkap = $namaDepan . " " . $namaBelakang;
echo "Nama saya adalah " . $namaLengkap;
echo "<br> Nama saya adalah $namaLengkap";

$tglmasuk = 2023;
$tglMasuk = 2024;
echo "<br> Tahun masuk saya adalah $tglmasuk";
echo "<br> Tahun masuk saya adalah " . $tglMasuk;
?>

</body>
</html>