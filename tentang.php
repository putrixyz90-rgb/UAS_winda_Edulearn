<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tentang Kami | EduLearn</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">

<div class="container">

<a class="navbar-brand fw-bold" href="index.php">

<i class="bi bi-mortarboard-fill"></i>

EduLearn

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
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link active" href="tentang.php">Tentang</a>
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

<?php
if(isset($_SESSION['login'])){
?>

<a href="profil.php" class="btn btn-light ms-3">

Profil

</a>

<?php
}else{
?>

<a href="login.php" class="btn btn-warning ms-3">

Login

</a>

<?php
}
?>

</div>

</div>

</nav>

<!-- Hero -->

<section class="py-5 bg-primary text-white">

<div class="container text-center">

<h1 class="fw-bold">

Tentang EduLearn

</h1>

<p class="lead">

Platform Pembelajaran Digital untuk Semua

</p>

</div>

</section>

<!-- Tentang -->

<section class="py-5">

<div class="container">

<div class="row">

<div class="col-lg-6">

<img src="img/topi_wisuda.png"
class="img-fluid rounded shadow">

</div>

<div class="col-lg-6">

<h2 class="fw-bold mb-4">

Apa itu EduLearn?

</h2>

<p align="justify">

EduLearn merupakan sebuah platform pembelajaran berbasis web yang dirancang untuk membantu siswa, mahasiswa, maupun masyarakat umum dalam memperoleh materi pembelajaran secara mudah, cepat, dan interaktif. Platform ini menyediakan berbagai program pembelajaran, artikel edukasi, materi dalam bentuk PDF maupun video, sehingga pengguna dapat belajar kapan saja dan di mana saja.

</p>

<p align="justify">

EduLearn bertujuan meningkatkan kualitas pembelajaran digital dengan menghadirkan tampilan yang sederhana, menarik, serta mudah digunakan oleh semua kalangan.

</p>

</div>

</div>

</div>

</section>

<!-- Visi Misi -->

<section class="py-5 bg-light">

<div class="container">

<div class="row">

<div class="col-md-6">

<div class="card shadow border-0">

<div class="card-body">

<h3 class="text-primary">

Visi

</h3>

<p>

Menjadi platform pembelajaran digital yang inovatif, mudah diakses, dan mampu meningkatkan kualitas pendidikan melalui teknologi.

</p>

</div>

</div>

</div>

<div class="col-md-6">

<div class="card shadow border-0">

<div class="card-body">

<h3 class="text-success">

Misi

</h3>

<ul>

<li>Menyediakan materi pembelajaran yang berkualitas.</li>

<li>Mengembangkan sistem belajar yang mudah digunakan.</li>

<li>Mendor