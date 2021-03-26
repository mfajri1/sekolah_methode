<?php

include "../../config/database.php";

$id       = $_POST['id'];
$nama     = $_POST['nama'];
$kelas    = $_POST['kelas'];
$jk       = $_POST['jk'];

$update = $koneksi->query("UPDATE tb_siswa SET siswa_nama      = '$nama',
                                               kelas_id        = '$kelas',
                                               siswa_jk        = '$jk'
                                         WHERE siswa_id        = '$id'");

if ($update) {
    echo "<script>
        window.alert('Sukses, Data Telah Di Update');
        window.location='../../index.php?p=module/siswa/index';
    </script>";
} else {
    echo "<script>
        windows.alert('Error, Periksa Data Kembali');
        windows.location='../../index.php?p=module/siswa/index';
</script>";
}
