<?php

include "../../config/database.php";

$id       = $_POST['id'];
$fullname = $_POST['fullname'];
$nick     = $_POST['nick'];
$email    = $_POST['email'];
$password = md5($_POST['password']);
$status   = $_POST['status'];

// echo "UPDATE user SET user_fullname = '$fullname' , user_nick = '$nick', user_email = '$email', user_password = '$password', user_status = '$status' WHERE user_id = '$id'";
// exit;

$update = $koneksi->query("UPDATE tb_user SET user_fullname = '$fullname',
                                              user_nick     = '$nick',
                                              user_email    = '$email',
                                              user_password = '$password',
                                              role   = '$status'
                                              WHERE user_id = '$id'");

if ($update) {
    echo "<script>
        window.alert('Sukses, Data Telah Di Update');
        window.location='../../index.php?p=module/user/index';
    </script>";
} else {
    echo "<script>
        windows.alert('Error, Periksa Data Kembali');
        windows.location='../../index.php?p=module/user/index';
</script>";
}
