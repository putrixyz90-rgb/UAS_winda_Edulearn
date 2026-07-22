<?php
session_start();
require "koneksi.php";

// ambil id materi dari URL
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// query data materi
$query = mysqli_query($conn, "SELECT * FROM materi WHERE id_materi=$id");
$data = mysqli_fetch_assoc($query);

if(!$data){
    echo "<script>alert('Materi tidak ditemukan!'); window.location='materi.php';</script>";
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
      <h3><?php echo $data['judul']; ?></h3>
      <p class="text-muted"><?php echo $data['deskripsi']; ?></p>

      <!-- Gambar materi -->
      <?php if(!empty($data['gambar'])) { ?>
      <img src="assets/img/<?php echo $data['gambar']; ?>" 
           alt="<?php echo $data['judul']; ?>" 
           class="img-fluid mb-3">
      <?php } ?>

      <!-- Isi materi -->
      <p><?php echo nl2br($data['isi']); ?></p>

      <!-- Video pembelajaran -->
      <?php if(!empty($data['video_url'])) { ?>
      <div class="ratio ratio-16x9 mb-3">
        <iframe src="<?php echo $data['video_url']; ?>" 
                title="Video <?php echo $data['judul']; ?>" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
      </div>
      <?php } ?>

      <a href="materi.php" class="btn btn-secondary">Kembali ke Materi</a>
    </div>
  </div>
</div>

</body>
</html>
