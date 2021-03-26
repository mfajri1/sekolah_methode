<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nilai Akhir Siswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Nilai Keseluruhan</th>
                        <th>Kelas Sekarang</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tb_hasil a JOIN tb_siswa b ON a.siswa_id = b.siswa_id JOIN ms_kelas c ON b.kelas_id = c.kelas_id ORDER BY a.hasil_total DESC");
                    foreach ($ambil as $no => $row) :
                        if ($no <= 20) {
                            $kelas = 'VIII 1';
                        } else if ($no >= 21 and $no <= 40) {
                            $kelas = 'VIII 2';
                        } else {
                            $kelas = 'VIII 3';
                        }
                    ?>
                        <tr>
                            <td style="width: 5%;"><?= $no + 1 ?></td>
                            <td><?= $row['siswa_nama'] ?></td>
                            <td><?= $row['kelas_nama'] ?></td>
                            <td><?= $row['hasil_total'] ?></td>
                            <td><?= $kelas ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>