<?php
echo '<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="dashboard.css" rel="stylesheet">
</head>
<body>';

echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>';

echo '<nav class="navbar navbar-expand-lg navbar-light bg-warning shadow-sm">
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
</nav>';

echo '<div class="jumbotron">
  <h1 class="h1_utama text-center">Abdurrahman Hakim Makarim</h1>
  <p class="p_utama text-center">Universitas Pembangunan Jaya | Informatika</p>
  <svg xmlns="http://www.w3.org/2000/svg"
       viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,256L40,218.7C80,181,160,107,240,106.7C320,107,400,181,480,208C560,235,640,213,720,186.7C800,160,880,128,960,138.7C1040,149,1120,203,1200,202.7C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
</div>';

echo '<section id="about" class="container-fluid">
  <div class="container">
    <div class="row text-center">
      <div class="col">
        <h2>Biodata</h2>
      </div>
    </div>
    <br>
    <div class="row justify-content-center fs-6">
      <div class="col">';

echo <<<EOT
<p>Saya Abdurrahman Hakim Makarim, seorang mahasiswa di Universitas Pembangunan Jaya yang saat ini sedang menempuh pendidikan di Program Studi Informatika jenjang Sarjana. Website ini saya buat sebagai bagian dari tugas untuk mata kuliah komputasi berbasis web atau pemrograman web pada umumnya. Dalam proses pembuatannya, saya mengaplikasikan berbagai konsep pemrograman yang telah dipelajari selama perkuliahan, sehingga hasilnya dapat menjadi refleksi dari pemahaman yang saya miliki dalam bidang ini.<br><br>
Selain memenuhi tugas akademik, website ini juga saya anggap sebagai sarana untuk memperluas kemampuan dalam pengembangan web. Saya percaya bahwa keterampilan dalam pemrograman dan teknologi web akan sangat berperan penting di masa depan, khususnya dalam dunia kerja yang semakin mengandalkan teknologi. Melalui proyek ini, saya berharap dapat terus mengasah keterampilan saya dan menghadirkan solusi digital yang bermanfaat.</p>
EOT;

echo '</div>
    </div>
  </div>
</section>';

echo '</body></html>';
?>
