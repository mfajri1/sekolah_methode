<?php

include "../../config/database.php";


$nama     = $_POST['nama'];
$kelas    = $_POST['kelas'];
$jk       = $_POST['jk'];

$simpan   = $koneksi->query("INSERT INTO tb_siswa (siswa_nama, kelas_id, siswa_jk) VALUES ('$nama','$kelas','$jk')");

if ($simpan) {
  echo "<script>
            alert('Sukses, Data Telah Ditambahkan')
            window.location = '../../index.php?p=module/siswa/index'
          </script>";
} else {
  echo "<script>
            alert('Error, Periksa Data Kembali')
            window.location = '../../index.php?p=module/siswa/index'
          </script>";
}
