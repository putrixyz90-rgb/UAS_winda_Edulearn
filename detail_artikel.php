<?php
session_start();
require "koneksi.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$query = mysqli_query($conn, "SELECT * FROM artikel WHERE id_artikel=$id");
$data = mysqli_fetch_assoc($query);

if(!$data){
    echo "<script>alert('Artikel tidak ditemukan!'); window.location='artikel.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?php echo $data['judul']; ?> | EduLearn</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
  <div class="card shadow">
    <div class="card-body">
      <!-- Judul & Info -->
      <h2><?php echo $data['judul']; ?></h2>
      <p class="text-muted">
        <?php echo $data['penulis']; ?> | <?php echo $data['tanggal']; ?>
      </p>

      <!-- Gambar -->
      <?php if(!empty($data['gambar'])) { ?>
      <img src="img/<?php echo $data['gambar']; ?>" 
           alt="<?php echo $data['judul']; ?>" 
           class="img-fluid mb-3">
      <?php } ?>

      <!-- Deskripsi -->
      <p><strong><?php echo $data['deskripsi']; ?></strong></p>

      <!-- Isi Artikel -->
      <div class="mb-3">
        <?php echo nl2br($data['isi']); ?>
      </div>

      <!-- Link eksternal -->
      <?php if(!empty($data['link'])) { ?>
      <p>
        <a href="<?php echo $data['link']; ?>" target="_blank" class="btn btn-primary">
          Baca Artikel Lengkap
        </a>
      </p>
      <?php } ?>

      <!-- Tombol kembali -->
      <a href="artikel.php" class="btn btn-secondary">Kembali ke Artikel</a>
    </div>
  </div>
</div>

</body>
</html>
