<?php
session_start();
require "koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Program EduLearn</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">EduLearn</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active" href="program.php">Program</a></li>
        <li class="nav-item"><a class="nav-link" href="materi.php">Materi</a></li>
        <li class="nav-item"><a class="nav-link" href="artikel.php">Artikel</a></li>
        <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<section class="bg-primary text-white text-center py-5">
  <div class="container">
    <h1 class="fw-bold">Program Pembelajaran</h1>
    <p>Pilih program sesuai minatmu dan mulai belajar sekarang.</p>
  </div>
</section>

<!-- Daftar Program -->
<section class="py-5">
  <div class="container">
    <div class="row">

      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
          <img src="img/program1.png" class="card-img-top" style="height:220px; object-fit:cover;">
          <div class="card-body">
            <h4>Pemrograman Web</h4>
            <p>Belajar membuat website menggunakan HTML, CSS, PHP, dan MySQL dari dasar hingga mahir.</p>
            <a href="detail_program.php?id=1" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
          <img src="img/program2.png" class="card-img-top" style="height:220px; object-fit:cover;">
          <div class="card-body">
            <h4>Desain Grafis</h4>
            <p>Belajar desain menggunakan aplikasi grafis populer, membuat poster, logo, dan ilustrasi kreatif.</p>
            <a href="detail_program.php?id=2" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
          <img src="img/program3.png" class="card-img-top" style="height:220px; object-fit:cover;">
          <div class="card-body">
            <h4>Data Science</h4>
            <p>Belajar analisis data dengan Python, statistik, dan machine learning untuk memahami pola data.</p>
            <a href="detail_program.php?id=3" class="btn btn-primary">Lihat Detail</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white text-center p-3">
  © 2026 EduLearn | Program Pembelajaran
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
