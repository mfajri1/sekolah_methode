<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nilai Kriteria</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>C1</th>
                        <th>C2</th>
                        <th>C3</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil3 = $koneksi->query("SELECT * FROM tb_nilai_hasil a JOIN tb_siswa b ON a.siswa_id = b.siswa_id JOIN ms_kelas c ON b.kelas_id = c.kelas_id");
                    foreach ($ambil3 as $no => $row) :
                        if ($row['nilai_bobot'] == 'SB') {
                            $bobot1 = 'Sangat Baik';
                        } else if ($row['nilai_bobot'] == 'B') {
                            $bobot1 = 'Baik';
                        } else if ($row['nilai_bobot'] == 'C') {
                            $bobot1 = 'Cukup';
                        } else {
                            $bobot1 = 'Kurang';
                        }

                        if ($row['sikap_bobot'] == 'SB') {
                            $bobot2 = 'Sangat Baik';
                        } else if ($row['sikap_bobot'] == 'B') {
                            $bobot2 = 'Baik';
                        } else if ($row['sikap_bobot'] == 'C') {
                            $bobot2 = 'Cukup';
                        } else {
                            $bobot2 = 'Kurang';
                        }

                        if ($row['peringkat_bobot'] == 'SB') {
                            $bobot3 = 'Sangat Baik';
                        } else if ($row['peringkat_bobot'] == 'B') {
                            $bobot3 = 'Baik';
                        } else if ($row['peringkat_bobot'] == 'C') {
                            $bobot3 = 'Cukup';
                        } else {
                            $bobot3 = 'Kurang';
                        }
                    ?>
                        <tr>
                            <td style="width: 5%;"><?= $no + 1 ?></td>
                            <td><?= $row['siswa_nama'] ?></td>
                            <td><?= $row['kelas_nama'] ?></td>
                            <td><?= $bobot2 ?></td>
                            <td><?= $bobot1 ?></td>
                            <td><?= $bobot3 ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>