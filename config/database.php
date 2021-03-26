<?php

$koneksi = mysqli_connect("localhost", "root", "", "db_saw");

// Check connection
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

function TanggalIndo($date)
{
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);

    $result = $tgl . " " . $BulanIndo[(int) $bulan - 1] . " " . $tahun;
    return ($result);
}

function formatRupiah($angka)
{

    if (is_numeric($angka)) {
        $format_rupiah = 'Rp ' . number_format($angka, '2', ',', '.');
        return $format_rupiah;
    } else {
        echo "$angka" . " bukan angka yang valid!" . "\n";
    }
}

function bulanIndo($angka_bulan)
{
    $hasil = array(
        "01" => "Januari",
        "02" => "Februari",
        "03" => "Maret",
        "04" => "April",
        "05" => "Mei",
        "06" => "Juni",
        "07" => "Juli",
        "08" => "Agustus",
        "09" => "September",
        "10" => "Oktober",
        "11" => "November",
        "12" => "Desember",
        "1" => "Januari",
        "2" => "Februari",
        "3" => "Maret",
        "4" => "April",
        "5" => "Mei",
        "6" => "Juni",
        "7" => "Juli",
        "8" => "Agustus",
        "9" => "September"
    );
    return $hasil[$angka_bulan];
}

// function tanggal_indo_bulan_tahun($tanggal)
// {
//     $waktu = explode(" ", tanggal_indo_waktu($tanggal));
//     return $waktu[1] . " " . $waktu[2];
// }

function bulanIndonesia($date)
{
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);

    $result = $BulanIndo[(int) $bulan - 1] . " " . $tahun;
    return ($result);
}
