<?php

include "../../config/database.php";


$fullname = $_POST['fullname'];
$nick     = $_POST['nick'];
$email    = $_POST['email'];
$password = md5($_POST['password']);
$status   = $_POST['status'];

$simpan   = $koneksi->query("INSERT INTO tb_user (user_fullname, user_nick, user_email, user_password, role)
                                                VALUES
                                              ('$fullname','$nick','$email','$password','$status')");

if ($simpan) {
  echo "<script>
            alert('Sukses, Data Telah Ditambahkan')
            window.location = '../../index.php?p=module/user/index'
          </script>";
} else {
  echo "<script>
            alert('Error, Periksa Data Kembali')
            window.location = '../../index.php?p=module/user/index'
          </script>";
}
