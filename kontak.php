<?php

session_start();

require 'koneksi.php';


if(isset($_POST['kirim'])){


$nama = htmlspecialchars($_POST['nama']);

$email = htmlspecialchars($_POST['email']);

$subjek = htmlspecialchars($_POST['subjek']);

$pesan = htmlspecialchars($_POST['pesan']);



$query = mysqli_query($conn,"
INSERT INTO kontak
(nama,email,subjek,pesan)
VALUES
('$nama','$email','$subjek','$pesan')
");



if($query){


echo "<script>

alert('Pesan berhasil dikirim!');

document.location='kontak.php';

</script>";


}else{


echo "<script>

alert('Pesan gagal dikirim!');

</script>";

}


}

?>


<!DOCTYPE html>
<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Kontak | EduLearn</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


<link rel="stylesheet" href="assets/css/style.css">


</head>


<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">


<div class="container">


<a class="navbar-brand fw-bold" href="index.php">

EduLearn

</a>


</div>


</nav>




<section class="bg-primary text-white text-center py-5">


<h1>

Hubungi Kami

</h1>


<p>

Kirim pertanyaan atau saran kepada tim EduLearn.

</p>


</section>




<section class="py-5">


<div class="container">


<div class="row justify-content-center">


<div class="col-md-7">


<div class="card shadow p-4">



<form method="POST">



<div class="mb-3">

<label>Nama</label>

<input type="text"
name="nama"
class="form-control"
required>

</div>



<div class="mb-3">

<label>Email</label>

<input type="email"
name="email"
class="form-control"
required>

</div>



<div class="mb-3">

<label>Subjek</label>

<input type="text"
name="subjek"
class="form-control"
required>

</div>



<div class="mb-3">

<label>Pesan</label>

<textarea
name="pesan"
class="form-control"
rows="5"
required></textarea>

</div>




<button
name="kirim"
class="btn btn-primary">

Kirim Pesan

</button>



</form>


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