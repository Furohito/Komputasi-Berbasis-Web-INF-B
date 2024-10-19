<?php include 'db.php'; ?>

<?php
// Inisialisasi variabel pesan
$success_message = "";
$error_message = "";

// Proses form jika form telah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validasi data
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Query untuk menyimpan data ke database
        $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

        // Eksekusi query
        if ($conn->query($sql) === TRUE) {
            $success_message = "Pesan berhasil dikirim!";
        } else {
            $error_message = "Terjadi kesalahan: " . $conn->error;
        }
    } else {
        $error_message = "Semua kolom wajib diisi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- Navbar -->
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
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="experiences.php">Experiences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="skills.php">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <h1>Contact Me</h1>
        <p>Berikan pertanyaanmu di sini:</p>

        <!-- Tampilkan pesan sukses atau error -->
        <?php if ($success_message): ?>
            <div class="alert alert-success"><?php echo $success_message; ?></div>
        <?php elseif ($error_message): ?>
            <div class="alert alert-danger"><?php echo $error_message; ?></div>
        <?php endif; ?>

        <!-- Form dengan konfirmasi sebelum submit -->
        <form class="contact-form" method="POST" action="contact.php" onsubmit="return confirmSubmission()">
            <div class="mb-3">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>

<!-- Footer -->
<footer class="text-center py-4">
    <div class="container">
        <p>&copy; 2024 Abdurrahman Hakim Makarim. All Rights Reserved.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript untuk pop-up konfirmasi -->
<script>
    function confirmSubmission() {
        return confirm("Yakin untuk mengirim pesan?");
    }
</script>
</body>
</html>
