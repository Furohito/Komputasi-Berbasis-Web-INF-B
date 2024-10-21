<?php include '../config/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Abdrhakim</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container"> <!-- Menggunakan container-fluid untuk navbar lebih responsif -->
        <a class="navbar-brand" href="index.php">abdrhakim</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="experiences.php">Experiences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="skills.php">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center d-flex align-items-center" style="background-color: #f5f5dc; height: 100vh;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 col-sm-6">
                <img src="../assets/images/foto_mahasiswa.png" alt="Profile Photo" class="profile-img mb-4 rounded-circle img-fluid" style="border: 5px solid #ffd700; background-color: #343a40; padding: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            </div>
        </div>
        <h1 class="display-4 mb-3">Hallo, Saya Abdurrahman Hakim Makarim</h1>
        <h2 class="text-muted">Student & Prompt Engineer</h2>

        <!-- Ambil Konten dari Database -->
        <div class="content-section mt-4 container-fluid">
            <?php
            // Query untuk mengambil data dari tabel homepage
            $sql = "SELECT content FROM homepage WHERE id = 1 LIMIT 1";
            $result = $conn->query($sql);

            // Tampilkan konten jika ditemukan
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<p class="lead content-text">' . $row["content"] . '</p>';
                }
            } else {
                echo '<p>Konten tidak tersedia saat ini.</p>';
            }
            ?>
        </div>
    </div>
</section>



<!-- Footer -->
<footer class="text-center py-4 bg-dark text-light">
    <div class="container-fluid">
        <p>&copy; 2024 Abdurrahman Hakim Makarim. All Rights Reserved.</p>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

