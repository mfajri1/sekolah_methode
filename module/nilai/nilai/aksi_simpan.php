<?php

include "../../../config/database.php";


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

// echo "bindo :" . $bindo;
// echo "<br>";
// echo "bing :" . $bing;
// echo "<br>";
// echo "mtk :" . $mtk;
// echo "<br>";
// echo "ipa :" . $ipa;
// echo "<br>";
// echo "Agama :" . $agama;
// echo "<br>";
// echo "Total :" . $total;
// echo "<br>";
// echo "Rata - Rata :" . $average;
// exit;

if ($average >= 90.6 && $average <= 100) {
  $bobot = 'SB';
} else if ($average >= 82.6 && $average <= 90.5) {
  $bobot = 'B';
} else if ($average >= 74.6 && $average <= 82.5) {
  $bobot = 'C';
} else {
  $bobot = 'K';
}

if ($peringkat >= 1 && $peringkat <= 5) {
  $bobotP = 'SB';
} else if ($peringkat >= 6 && $peringkat <= 10) {
  $bobotP = 'B';
} else if ($peringkat >= 11 && $peringkat <= 20) {
  $bobotP = 'C';
} else {
  $bobotP = 'K';
}

// $kriteria = $koneksi->query("SELECT * FROM ms_kriteria")->fetch_array();
// $variabel = $kriteria['kriteria_variabel'];
// $nilaiBobot = $kriteria['kriteria_bobot'];

$ambil  = $koneksi->query("SELECT * FROM ms_kriteria WHERE kriteria_variabel = '$bobot'")->fetch_assoc();
$ambil2 = $koneksi->query("SELECT * FROM ms_kriteria WHERE kriteria_variabel = '$sikap'")->fetch_assoc();
$ambil3 = $koneksi->query("SELECT * FROM ms_kriteria WHERE kriteria_variabel = '$bobotP'")->fetch_assoc();

$nilaiMP = $ambil['kriteria_bobot'];
$nilaiBb = $ambil2['kriteria_bobot'];
$nilaiPr = $ambil3['kriteria_bobot'];

$c1  = $nilaiBb / 5;
$c2  = $nilaiMP / 5;
$c3  = $nilaiPr / 5;
$tot = ($c1 + $c2) + $c3;

$hasilNilai = ($c2 * 50) / 100;
$hasilSikap = ($c1 * 25) / 100;
$hasilRank  = ($c3 * 25) / 100;

$hasilAkhir = $hasilNilai + $hasilSikap + $hasilRank;


$simpan = $koneksi->query("INSERT INTO tb_nilai (siswa_id, nilai_bahasa_indonesia, nilai_bahasa_inggris, nilai_matematika, nilai_ipa, nilai_agama, nilai_rata_rata, nilai_bobot) VALUES ('$nama','$bindo','$bing','$mtk','$ipa','$agama','$average','$bobot')");

if ($simpan) {

  $insertsikap     = $koneksi->query("INSERT INTO tb_nilai_sikap (siswa_id, sikap_bobot) VALUES ('$nama','$sikap')");
  $insertperingkat = $koneksi->query("INSERT INTO tb_peringkat (siswa_id, peringkat_no, peringkat_bobot) VALUES ('$nama','$peringkat', '$bobotP')");

  $insertHasil = $koneksi->query("INSERT INTO tb_nilai_hasil (siswa_id, nilai_bobot, sikap_bobot, peringkat_bobot) VALUES ('$nama','$bobot','$sikap','$bobotP')");

  $insertHA = $koneksi->query("INSERT INTO tb_hasil (siswa_id, hasil_nilai, hasil_sikap, hasil_peringkat, hasil_total) VALUES ('$nama','$hasilNilai','$hasilSikap','$hasilRank','$hasilAkhir')");
  $insertPj = $koneksi->query("INSERT INTO tb_nilai_pengujian (siswa_id, np_c1, np_c2, np_c3, np_hasil ) VALUES ('$nama','$c1','$c2','$c3','$tot')");


  echo "<script>
            alert('Sukses, Data Telah Ditambahkan')
            window.location = '../../../index.php?p=module/nilai/nilai/index'
          </script>";
} else {
  echo "<script>
            alert('Error, Periksa Data Kembali')
            window.location = '../../../index.php?p=module/nilai/nilai/index'
          </script>";
}
