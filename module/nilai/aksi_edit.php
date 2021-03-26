<?php

include "../../config/database.php";

$id        = $_POST['id'];
$nama      = $_POST['nama'];
$bindo     = $_POST['bindo'];
$bing      = $_POST['bing'];
$mtk       = $_POST['mtk'];
$ipa       = $_POST['ipa'];
$agama     = $_POST['agama'];
$total     = $bindo + $bing + $mtk + $ipa + $agama;
$average   = $total / 5;
$sikap     = $_POST['sikap'];
$peringkat = $_POST['peringkat'];
$nhTotal   = $average + $sikap + $peringkat;
$nhAverage = $nhTotal / 3;

$update = $koneksi->query("UPDATE tb_nilai SET siswa_id               = '$nama',
                                               nilai_bahasa_indonesia = '$bindo',
                                               nilai_bahasa_inggris   = '$bing',
                                               nilai_matematika       = '$mtk',
                                               nilai_ipa              = '$ipa',
                                               nilai_agama            = '$agama',
                                               nilai_rata_rata        = '$average',
                                               nilai_sikap            = '$sikap',
                                               nilai_peringkat        = '$peringkat'
                                         WHERE siswa_id               = '$id'");

if ($update) {

    $updateHasil = $koneksi->query("UPDATE tb_nilai_hasil SET siswa_id     = '$nama',
                                                              nh_total     = '$nhTotal',
                                                              nh_rata_rata = '$nhAverage'
                                                        WHERE siswa_id     = '$id'");
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
