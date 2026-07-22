<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'koneksi.php';

if(isset($_POST['register'])){
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $role = $_POST['role']; // role dari pilihan radio

    // cek apakah email sudah ada
    $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if(mysqli_num_rows($cek) > 0){
        echo "<script>alert('Email sudah terdaftar!'); window.location='register.php';</script>";
        exit();
    }

    // hash password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // simpan ke database
    $query = "INSERT INTO users (nama, email, password, role, tanggal_daftar) 
              VALUES ('$nama', '$email', '$hashedPassword', '$role', CURRENT_TIMESTAMP)";
    if(mysqli_query($conn, $query)){
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal!'); window.location='register.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register EduLearn</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow mt-5">
        <div class="card-header bg-success text-white text-center">
          <h3>Register EduLearn</h3>
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="mb-3">
              <label>Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Daftar Sebagai</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="admin" value="admin" required>
                <label class="form-check-label" for="admin">Admin</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="role" id="user" value="user">
                <label class="form-check-label" for="user">User</label>
              </div>
            </div>
            <button type="submit" name="register" class="btn btn-success w-100">Register</button>
          </form>
          <hr>
          <p class="text-center">
            Sudah punya akun? <a href="login.php">Login</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
