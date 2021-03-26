<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Siswa Yang Masuk Kelas Unggul</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Kelas Asal</th>
                        <th>Nilai Akhir</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tb_hasil a JOIN tb_siswa b ON a.siswa_id = b.siswa_id JOIN ms_kelas c ON b.kelas_id = c.kelas_id ORDER BY a.hasil_total DESC LIMIT 20");
                    foreach ($ambil as $no => $row) :
                    ?>
                        <tr>
                            <td style="width: 5%;"><?= $no + 1 ?></td>
                            <td><?= $row['siswa_nama'] ?></td>
                            <td><?= $row['kelas_nama'] ?></td>
                            <td><?= $row['hasil_total'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>