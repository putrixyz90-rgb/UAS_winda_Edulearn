<?php
session_start();
require 'koneksi.php';

$query = mysqli_query($conn,"
SELECT * FROM galeri 
ORDER BY id_galeri DESC
");

?>

<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Galeri | EduLearn</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>


<body>


<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

<div class="container">

<a class="navbar-brand fw-bold" href="index.php">
EduLearn
</a>


<button class="navbar-toggler"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>


<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">
Home
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="program.php">
Program
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="materi.php">
Materi
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="artikel.php">
Artikel
</a>
</li>


<li class="nav-item">
<a class="nav-link active" href="galeri.php">
Galeri
</a>
</li>


<li class="nav-item">
<a class="nav-link" href="kontak.php">
Kontak
</a>
</li>


</ul>

</div>

</div>

</nav>



<!-- Header -->

<section class="bg-primary text-white text-center py-5">

<div class="container">

<h1 class="fw-bold">
Galeri EduLearn
</h1>

<p>
Dokumentasi kegiatan pembelajaran dan aktivitas EduLearn.
</p>

</div>

</section>



<!-- Galeri -->

<section class="py-5">

<div class="container">

<div class="row">


<?php while($data=mysqli_fetch_assoc($query)){ ?>


<div class="col-md-4 mb-4">


<div class="card shadow border-0">


<img
src="assets/img/<?php echo $data['gambar']; ?>"
class="card-img-top"
style="height:250px;object-fit:cover;">


<div class="card-body text-center">


<h5>

<?php echo $data['judul']; ?>

</h5>


</div>


</div>


</div>


<?php } ?>


</div>

</div>

</section>



<footer class="bg-primary text-white text-center p-3">

© 2026 EduLearn

</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>