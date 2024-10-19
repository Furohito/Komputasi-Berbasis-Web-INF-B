<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">abdrhakim</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="about.php">About</a>
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

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <h1>About Me</h1>

        <?php
        // Ambil data dari tabel about
        $sql = "SELECT content FROM about LIMIT 1";
        $result = $conn->query($sql);

        // Tampilkan data jika ada hasil
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<p>' . $row["content"] . '</p>';
            }
        } else {
            echo '<p>Konten tidak tersedia.</p>';
        }
        ?>

    </div>
</section>

<!-- Footer -->
<footer class="text-center py-4">
    <div class="container">
        <p>&copy; 2024 Abdurrahman Hakim Makarim. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
