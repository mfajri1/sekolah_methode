<?php
include "config/database.php";

$email    = mysqli_real_escape_string($koneksi, $_POST['email']);
$username    = mysqli_real_escape_string($koneksi, $_POST['email']);
$password = mysqli_real_escape_string($koneksi, md5($_POST['password']));

$cek = $koneksi->query("SELECT *FROM tb_user WHERE user_email = '$email' OR user_nick = '$username' AND user_password = '$password'");

$pecah = $cek->fetch_assoc();
$validasi = $cek->num_rows;

if ($validasi >= 1) {
    session_start();
    $_SESSION['login'] = $pecah;

    echo "<script>
            alert('Selamat Anda Berhasil Login');
            window.location='index.php';
         </script>";
} else {
    echo "<script>
            alert('Login Gagal Silahkan Coba Lagi ');
            window.location='login.php';
         </script>";
}
