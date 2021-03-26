<?php

include "../../../config/database.php";

$id     = $_POST['id'];
$nama   = $_POST['nama'];
$kuota  = $_POST['kuota'];
$status = $_POST['status'];

$update   = $koneksi->query("UPDATE ms_kelas SET kelas_nama = '$nama', kelas_jumlah = '$kuota', kelas_status = '$status' WHERE kelas_id = '$id'");

if ($update) {
    echo "<script>
        window.alert('Sukses, Data Telah Di Update');
        window.location='../../../index.php?p=module/master/kelas/index';
    </script>";
} else {
    echo "<script>
        windows.alert('Error, Periksa Data Kembali');
        windows.location='../../../index.php?p=module/master/kelas/index';
</script>";
}
