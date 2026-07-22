<?php

// Konfigurasi Database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_winda";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi database gagal : " . mysqli_connect_error());
}

// Mengatur timezone Indonesia
date_default_timezone_set("Asia/Jakarta");

?>