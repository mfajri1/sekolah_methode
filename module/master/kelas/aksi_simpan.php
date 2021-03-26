<?php

include "../../../config/database.php";


$nama   = $_POST['nama'];
$kuota  = $_POST['kuota'];
$status = $_POST['status'];

$simpan   = $koneksi->query("INSERT INTO ms_kelas (kelas_nama, kelas_jumlah, kelas_status) VALUES ('$nama','$kuota','$status')");

if ($simpan) {
  echo "<script>
            alert('Sukses, Data Telah Ditambahkan')
            window.location = '../../../index.php?p=module/master/kelas/index'
          </script>";
} else {
  echo "<script>
            alert('Error, Periksa Data Kembali')
            window.location = '../../../index.php?p=module/master/kelas/index'
          </script>";
}
