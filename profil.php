<?php

session_start();
require 'koneksi.php';


// Cek login

if(!isset($_SESSION['login'])){

    header("Location: login.php");
    exit;

}


// Ambil data user

$id = $_SESSION['id'];

$query = mysqli_query($conn,"
SELECT * FROM users 
WHERE id='$id'
");

$data = mysqli_fetch_assoc($query);

?>


<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Profil User | EduLearn</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="assets/css/style.css">

</head>


<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">


<div class="container">


<a class="navbar-brand fw-bold" href="index.php">

EduLearn

</a>


<div>

<a href="logout.php" 
class="btn btn-danger">

Logout

</a>

</div>


</div>

</nav>



<section class="py-5">


<div class="container">


<div class="row justify-content-center">


<div class="col-md-6">



<div class="card shadow text-center p-4">



<img 
src="assets/img/<?php echo $data['foto']; ?>"
class="rounded-circle mx-auto mb-3"
width="150"
height="150"
style="object-fit:cover;">



<h3>

<?php echo $data['nama']; ?>

</h3>



<p class="text-muted">

<?php echo $data['email']; ?>

</p>



<span class="badge bg-primary">

<?php echo $data['role']; ?>

</span>



<hr>



<a href="edit_profil.php"
class="btn btn-warning">

Edit Profil

</a>



<a href="index.php"
class="btn btn-secondary">

Kembali

</a>



</div>



</div>


</div>


</div>


</section>




<footer class="bg-primary text-white text-center p-3">

© 2026 EduLearn

</footer>


</body>

</html>