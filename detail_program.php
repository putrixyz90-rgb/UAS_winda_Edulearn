<?php
session_start();
require "koneksi.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$query = mysqli_query($conn, "SELECT * FROM program WHERE id_program=$id");
$data = mysqli_fetch_assoc($query);

if(!$data){
    echo "<script>alert('Program tidak ditemukan!'); window.location='program.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title><?php echo $data['nama_program']; ?> | EduLearn</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
  <div class="card shadow">
    <div class="card-body">
      <h3><?php echo $data['nama_program']; ?></h3>
      <p><?php echo $data['deskripsi']; ?></p>

      <!-- Video embed di dalam card -->
      <div class="ratio ratio-16x9 mb-3">
        <iframe src="<?php echo $data['video_url']; ?>" 
                title="Video <?php echo $data['nama_program']; ?>" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
      </div>

      <a href="program.php" class="btn btn-secondary">Kembali ke Program</a>
    </div>
  </div>
</div>

</body>
</html>
