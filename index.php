<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Belajar Lebih Mudah</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">

        <a class="navbar-brand fw-bold" href="index.php">
            <i class="bi bi-mortarboard-fill"></i> EduLearn
        </a>

        <button class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="tentang.php">Tentang</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="program.php">Program</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="materi.php">Materi</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="artikel.php">Artikel</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Kontak</a>
                </li>

            </ul>

            <div class="ms-3">

                <?php if(isset($_SESSION['login'])){ ?>

                    <a href="profil.php" class="btn btn-light">
                        <i class="bi bi-person-circle"></i> Profil
                    </a>

                <?php }else{ ?>

                    <a href="login.php" class="btn btn-warning">
                        Login
                    </a>

                <?php } ?>

            </div>

        </div>

    </div>
</nav>

<!-- ================= HERO ================= -->

<section class="hero">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<h1 class="fw-bold display-4">

Belajar Lebih Mudah <br>
dan Menyenangkan

</h1>

<p class="lead mt-3">

EduLearn merupakan platform pembelajaran digital
yang menyediakan berbagai materi,
video pembelajaran,
artikel edukasi.

</p>

<div class="mt-4">

<a href="program.php" class="btn btn-primary btn-lg me-2">

Mulai Belajar

</a>

<a href="materi.php" class="btn btn-outline-primary btn-lg">

Lihat Materi

</a>

</div>

</div>

<div class="col-lg-6 text-center">

<img src="img/gambar.png"
class="img-fluid"
width="500">

</div>

</div>

</div>

</section>

<!-- ================= STATISTIK ================= -->

<section class="py-5 bg-light">

<div class="container">

<div class="row text-center">

<div class="col-md-4 mb-3">
    <h2 class="fw-bold text-primary">1.200+</h2>
    <p>Siswa Aktif</p>
</div>

<div class="col-md-4 mb-3">
    <h2 class="fw-bold text-success">80+</h2>
    <p>Guru Profesional</p>
</div>

<div class="col-md-4 mb-3">
    <h2 class="fw-bold text-danger">500+</h2>
    <p>Materi Pembelajaran</p>
</div>

</div>

</div>

</section>

<!-- ================= FITUR ================= -->

<section class="py-5">

<div class="container">

<h2 class="text-center fw-bold mb-5">
Fitur Unggulan EduLearn
</h2>

<div class="row">

<div class="col-md-4 mb-4">

<div class="card border-0 shadow h-100">

<div class="card-body text-center">

<i class="bi bi-laptop display-3 text-primary"></i>

<h4 class="mt-3">
Belajar Online
</h4>

<p>
Belajar dapat dilakukan kapan saja dan dimana saja menggunakan komputer maupun smartphone.
</p>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card border-0 shadow h-100">

<div class="card-body text-center">

<i class="bi bi-book-half display-3 text-success"></i>

<h4 class="mt-3">
Materi Lengkap
</h4>

<p>
Tersedia berbagai materi pembelajaran yang disusun secara sistematis dan mudah dipahami.
</p>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card border-0 shadow h-100">

<div class="card-body text-center">

<i class="bi bi-person-video3 display-3 text-warning"></i>

<h4 class="mt-3">
Guru Berpengalaman
</h4>

<p>
Materi disusun dan dijelaskan oleh guru yang berpengalaman di bidangnya.
</p>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- ================= ARTIKEL ================= -->

<section class="py-5">

<div class="container">

<h2 class="text-center fw-bold mb-5">
Artikel Terbaru
</h2>

<div class="row">

<div class="col-md-4 mb-4">

<div class="card shadow border-0">

<img src="img/tips.png" class="card-img-top">

<div class="card-body">

<h5>Tips Belajar Efektif</h5>

<p>
Pelajari cara belajar yang efektif agar lebih mudah memahami materi pelajaran.
</p>

<a href="artikel.php" class="btn btn-primary">
Baca Selengkapnya
</a>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card shadow border-0">

<img src="img/literasi.png" class="card-img-top">

<div class="card-body">

<h5>Pentingnya Literasi Digital</h5>

<p>
Literasi digital membantu siswa menggunakan teknologi secara bijak.
</p>

<a href="artikel.php" class="btn btn-success">
Baca Selengkapnya
</a>

</div>

</div>

</div>

<div class="col-md-4 mb-4">

<div class="card shadow border-0">

<img src="img/coding.png" class="card-img-top">

<div class="card-body">

<h5>Belajar Coding dari Nol</h5>

<p>
Mulailah belajar HTML, CSS, JavaScript, PHP, dan MySQL secara bertahap.
</p>

<a href="artikel.php" class="btn btn-danger">
Baca Selengkapnya
</a>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- ================= TESTIMONI ================= -->

<section class="py-5 bg-light">

<div class="container">

<h2 class="text-center fw-bold mb-5">
Testimoni Pengguna
</h2>

<div class="row">

<div class="col-md-6">

<div class="card shadow border-0">

<div class="card-body">

<p>
"Saya jadi lebih mudah memahami materi karena tampilannya menarik dan mudah digunakan."
</p>

<h6>- Andi, Mahasiswa</h6>

</div>

</div>

</div>

<div class="col-md-6">

<div class="card shadow border-0">

<div class="card-body">

<p>
"Materinya lengkap dan mudah dipelajari kapan saja."
</p>

<h6>- Siti, Pelajar</h6>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- ================= KONTAK ================= -->

<section class="py-5">

<div class="container">

<h2 class="text-center fw-bold mb-4">
Hubungi Kami
</h2>

<form action="kontak.php" method="POST">

<div class="row">

<div class="col-md-6 mb-3">

<input
type="text"
name="nama"
class="form-control"
placeholder="Nama Lengkap"
required>

</div>

<div class="col-md-6 mb-3">

<input
type="email"
name="email"
class="form-control"
placeholder="Email"
required>

</div>

</div>

<textarea
name="pesan"
class="form-control mb-3"
rows="5"
placeholder="Tulis pesan..."
required></textarea>

<button class="btn btn-primary">
Kirim Pesan
</button>

</form>

</div>

</section>

<!-- ================= FOOTER ================= -->

<footer class="bg-primary text-white text-center py-4">

<div class="container">

<h4>EduLearn</h4>

<p>
Platform pembelajaran digital untuk membantu proses belajar menjadi lebih mudah, interaktif, dan menyenangkan.
</p>

<p>
© 2026 EduLearn | All Rights Reserved
</p>

</div>

</footer>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
