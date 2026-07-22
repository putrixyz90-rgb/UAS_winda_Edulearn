<?php
session_start();
require 'koneksi.php';

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $query = mysqli_query($conn,"SELECT * FROM users WHERE email='$email' LIMIT 1");

    if(mysqli_num_rows($query) == 1){
        $user = mysqli_fetch_assoc($query);

        if(password_verify($password,$user['password'])){
            session_regenerate_id(true);
            $_SESSION['login'] = true;
            $_SESSION['id'] = $user['id'];
            $_SESSION['nama'] = $user['nama'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            // arahkan sesuai role
            if ($user['role'] == "admin") {
                header("Location: admin/dashboard.php");
            } else {
                header("Location: index.php");
            }
            exit();
        } else {
            echo "<script>alert('Password salah!'); window.location='login.php';</script>";
        }
    } else {
        echo "<script>alert('Email tidak ditemukan!'); window.location='login.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login EduLearn</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow mt-5">
        <div class="card-header bg-primary text-white text-center">
          <h3>Login EduLearn</h3>
        </div>
        <div class="card-body">
          <form method="POST">
            <div class="mb-3">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required>
            </div>
            <button type="submit" name="login" class="btn btn-primary w-100">Login</button>
          </form>
          <hr>
          <p class="text-center">Belum punya akun? <a href="register.php">Daftar</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
