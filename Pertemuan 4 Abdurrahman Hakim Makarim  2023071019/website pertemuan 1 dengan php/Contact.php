<?php
$nama = $email = $pesan = $jenis_kelamin = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-sm">
    <div class="container">
        <img src="github-mark.png" width="25" class="ms-auto">
        <a class="navbar-brand" href="https://github.com/furohito" target="_blank">AbdrHakim</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section id="contact" class="container-fluid">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col">
                <h2>Contact Me</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                    <!-- Tampilkan pesan setelah submit -->
                    <div class='container mt-4'>
                        <h3>Terima Kasih, <?php echo $nama; ?></h3>
                        <p>Email: <?php echo $email; ?></p>
                        <p>Pesan:</p>
                        <p><?php echo nl2br($pesan); ?></p>
                        <p>Jenis Kelamin: <?php echo $jenis_kelamin; ?></p>
                    </div>
                <?php else: ?>
                    <form action="contact.php" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Masukkan Nama Anda</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                            <div id="namaHelp" class="form-text">Masukkan nama lengkap anda.</div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Masukkan Email Anda</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <h6>Jenis Kelamin</h6>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" id="jenis_kelamin1" required>
                                <label class="form-check-label" for="jenis_kelamin1">
                                    Laki-laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin2" required>
                                <label class="form-check-label" for="jenis_kelamin2">
                                    Perempuan
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Hapus</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
</body>
</html>
