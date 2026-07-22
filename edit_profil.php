<?php

session_start();

require 'koneksi.php';



if(!isset($_SESSION['login'])){

header("Location: login.php");

exit;

}



$id = $_SESSION['id'];



$user = mysqli_query($conn,"
SELECT * FROM users 
WHERE id='$id'
");


$data = mysqli_fetch_assoc($user);



if(isset($_POST['update'])){


$nama = htmlspecialchars($_POST['nama']);

$email = htmlspecialchars($_POST['email']);



$foto = $data['foto'];



// Jika upload foto

if($_FILES['foto']['name'] != ""){


$foto = $_FILES['foto']['name'];

$tmp = $_FILES['foto']['tmp_name'];



move_uploaded_file(
$tmp,
"assets/img/".$foto
);


}



$query = mysqli_query($conn,"
UPDATE users SET

nama='$nama',

email='$email',

foto='$foto'

WHERE id='$id'

");



if($query){


$_SESSION['nama']=$nama;


echo "<script>

alert('Profil berhasil diperbarui!');

document.location='profil.php';

</script>";

}


}


?>


<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Edit Profil | EduLearn</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body class="bg-light">


<div class="container py-5">


<div class="row justify-content-center">


<div class="col-md-6">


<div class="card shadow p-4">


<h3 class="text-center mb-4">

Edit Profil

</h3>



<form method="POST" enctype="multipart/form-data">


<div class="mb-3">

<label>Nama Lengkap</label>

<input 
type="text"
name="nama"
class="form-control"
value="<?php echo $data['nama']; ?>"
required>

</div>



<div class="mb-3">

<label>Email</label>

<input 
type="email"
name="email"
class="form-control"
value="<?php echo $data['email']; ?>"
required>

</div>




<div class="mb-3">

<label>Foto Profil</label>

<input 
type="file"
name="foto"
class="form-control">

</div>



<button 
name="update"
class="btn btn-primary w-100">

Simpan Perubahan

</button>



</form>


</div>


</div>


</div>


</div>



</body>

</html>