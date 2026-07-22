<?php
session_start();
require "koneksi.php";

// ambil semua artikel dari database
$query = mysqli_query($conn, "SELECT * FROM artikel ORDER BY tanggal DESC");
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Artikel | EduLearn</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">EduLearn</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="program.php">Program</a></li>
        <li class="nav-item"><a class="nav-link" href="materi.php">Materi</a></li>
        <li class="nav-item"><a class="nav-link active" href="artikel.php">Artikel</a></li>
        <li class="nav-item"><a class="nav-link" href="kontak.php">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<section class="bg-primary text-white text-center py-5">
  <div class="container">
    <h1 class="fw-bold">Artikel EduLearn</h1>
    <p>Baca artikel menarik seputar coding, desain, dan teknologi.</p>
  </div>
</section>

<!-- Daftar Artikel -->
<section class="py-5">
  <div class="container">
    <div class="row">
      <?php while($artikel = mysqli_fetch_assoc($query)) { ?>
      <div class="col-md-4 mb-4">
        <div class="card shadow h-100">
          <img src="img/<?php echo $artikel['gambar']; ?>" class="card-img-top" style="height:200px; object-fit:cover;">
          <div class="card-body">
            <h4><?php echo $artikel['judul']; ?></h4>
            <small class="text-muted"><?php echo $artikel['penulis']; ?> | <?php echo $artikel['tanggal']; ?></small>
            <p class="mt-2"><?php echo $artikel['deskripsi']; ?></p>
            <a href="detail_artikel.php?id=<?php echo $artikel['id_artikel']; ?>" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-primary text-white text-center p-3">
  © 2026 EduLearn | Artikel
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
