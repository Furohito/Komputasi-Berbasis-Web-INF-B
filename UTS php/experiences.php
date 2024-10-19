<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Experience</title>
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
                    <a class="nav-link active" href="experiences.php">Experiences</a>
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

<!-- Experiences Section -->
<section class="experiences-section">
    <div class="container">
        <h1>My Experiences</h1>
        <p>Pengalaman dengan mengikuti kursus sebagai berikut:</p>
        <br>

        <div class="row">

            <!-- Sertifikasi 1 -->
            <?php
            $sql1 = "SELECT * FROM experiences WHERE id = 1";
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
                $row1 = $result1->fetch_assoc();
                ?>
                <div class="col-md-4 experiences-item">
                    <img src="images/sertifikat website.jpg" alt="<?php echo $row1['title']; ?>" class="img-fluid" style="padding-top:1.1rem" style="padding-bottom: 1rem" >
                    <section style="padding-top: 1.3rem">
                        <h3><?php echo $row1['title']; ?></h3>
                        <p><?php echo $row1['description']; ?></p>
                        <p><a href="<?php echo $row1['link']; ?>" target="_blank">FreeCodeCamp</a></p>
                    </section>
                </div>
            <?php } ?>

            <!-- Sertifikasi 2 -->
            <?php
            $sql2 = "SELECT * FROM experiences WHERE id = 2";
            $result2 = $conn->query($sql2);
            if ($result2->num_rows > 0) {
                $row2 = $result2->fetch_assoc();
                ?>
                <div class="col-md-4 experiences-item">
                    <img src="images/prompt engineering coursera cert hakim.jpg" alt="<?php echo $row2['title']; ?>" class="img-fluid">
                    <section style="padding-top: 1.2rem">
                        <h3><?php echo $row2['title']; ?></h3>
                        <p><?php echo $row2['description']; ?></p>
                        <p><a href="<?php echo $row2['link']; ?>" target="_blank">Coursera</a></p>
                    </section>
                </div>
            <?php } ?>

            <!-- Sertifikasi 3 -->
            <?php
            $sql3 = "SELECT * FROM experiences WHERE id = 3";
            $result3 = $conn->query($sql3);
            if ($result3->num_rows > 0) {
                $row3 = $result3->fetch_assoc();
                ?>
                <div class="col-md-4 experiences-item">
                    <img src="images/Coursera ai basic.jpg" alt="<?php echo $row3['title']; ?>" class="img-fluid">
                    <section style="padding-top: 1.2rem">
                        <h3><?php echo $row3['title']; ?></h3>
                        <p><?php echo $row3['description']; ?></p>
                        <p><a href="<?php echo $row3['link']; ?>" target="_blank">Coursera</a></p>
                    </section>
                </div>
            <?php } ?>

        </div>
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
