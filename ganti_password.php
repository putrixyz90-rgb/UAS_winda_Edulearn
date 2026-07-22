<?php

session_start();

require 'koneksi.php';


// Cek login

if(!isset($_SESSION['login'])){

    header("Location: login.php");
    exit;

}


$id = $_SESSION['id'];


// Ambil data user

$query = mysqli_query($conn,"
SELECT * FROM users 
WHERE id='$id'
");

$data = mysqli_fetch_assoc($query);



if(isset($_POST['ubah'])){


$password_lama = $_POST['password_lama'];

$password_baru = $_POST['password_baru'];

$konfirmasi = $_POST['konfirmasi'];



// Cek password lama

if(password_verify($password_lama,$data['password'])){


    // Cek password baru

    if($password_baru == $konfirmasi){


        $password = password_hash(
            $password_baru,
            PASSWORD_DEFAULT
        );


        mysqli_query($conn,"
        UPDATE users SET 
        password='$password'
        WHERE id='$id'
        ");



        echo "<script>

        alert('Password berhasil diganti!');

        document.location='profil.php';

        </script>";



    }else{


        echo "<script>

        alert('Konfirmasi password tidak sesuai!');

        </script>";


    }



}else{


    echo "<script>

    alert('Password lama salah!');

    </script>";


}


}


?>


<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


<title>Ganti Password | EduLearn</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


<body class="bg-light">



<div class="container py-5">


<div class="row justify-content-center">


<div class="col-md-5">



<div class="card shadow p-4">


<h3 class="text-center mb-4">

Ganti Password

</h3>



<form method="POST">



<div class="mb-3">

<label>Password Lama</label>

<input
type="password"
name="password_lama"
class="form-control"
required>

</div>



<div class="mb-3">

<label>Password Baru</label>

<input
type="password"
name="password_baru"
class="form-control"
required>

</div>



<div class="mb-3">

<label>Konfirmasi Password Baru</label>

<input
type="password"
name="konfirmasi"
class="form-control"
required>

</div>



<button
type="submit"
name="ubah"
class="btn btn-primary w-100">

Simpan Password

</button>


<br><br>


<a href="profil.php"
class="btn btn-secondary w-100">

Kembali

</a>



</form>


</div>


</div>


</div>


</div>



</body>

</html>