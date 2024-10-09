<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard.css" rel="stylesheet">
</head>
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
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<section id="contact" class="container-fluid">
    <div class="row text-center">
        <div class="col">
            <h2>Kontak Saya</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="konfirmasi.php" method="POST">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <div class="mb-3">
                    <h6>Hobi</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Bermain Sepeda" id="hobi1">
                        <label class="form-check-label" for="hobi1">Bermain Sepeda</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Baca Buku" id="hobi2">
                        <label class="form-check-label" for="hobi2">Baca Buku</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="hobi[]" value="Nonton YouTube" id="hobi3">
                        <label class="form-check-label" for="hobi3">Nonton YouTube</label>
                    </div>
                </div>

                <div class="mb-3">
                    <h6>Jenis Kelamin</h6>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin1" required>
                        <label class="form-check-label" for="jenis_kelamin1">Laki-laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin2" required>
                        <label class="form-check-label" for="jenis_kelamin2">Perempuan</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </form>
        </div>
    </div>
</section>
</body>
</html>
