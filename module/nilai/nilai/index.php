<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nilai Mata Pelajaran</h6>
        <button class="btn btn-primary btn-icon-split" type="button" data-toggle="modal" data-target="#staticBackdrop" style="float: right;">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Tambah</span>
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Bahasa Indonesia</th>
                        <th>Bahasa Inggris</th>
                        <th>Matematika</th>
                        <th>IPA</th>
                        <th>Agama</th>
                        <th>Rata - Rata</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tb_nilai a JOIN tb_siswa b ON a.siswa_id = b.siswa_id JOIN ms_kelas c ON b.kelas_id = c.kelas_id ");
                    foreach ($ambil as $no => $row) :
                        if ($row['nilai_bobot'] == 'SB') {
                            $bobot2 = 'Sangat Baik';
                        } else if ($row['nilai_bobot'] == 'B') {
                            $bobot2 = 'Baik';
                        } else if ($row['nilai_bobot'] == 'C') {
                            $bobot2 = 'Cukup';
                        } else {
                            $bobot2 = 'Kurang';
                        }
                    ?>
                        <tr>
                            <td style="width: 5%;"><?= $no + 1 ?></td>
                            <td><?= $row['siswa_nama'] ?></td>
                            <td><?= $row['kelas_nama'] ?></td>
                            <td><?= $row['nilai_bahasa_indonesia'] ?></td>
                            <td><?= $row['nilai_bahasa_inggris'] ?></td>
                            <td><?= $row['nilai_matematika'] ?></td>
                            <td><?= $row['nilai_ipa'] ?></td>
                            <td><?= $row['nilai_agama'] ?></td>
                            <td><?= $row['nilai_rata_rata'] ?></td>
                            <td><?= $bobot2 ?></td>
                        </tr>
                        <!-- modal edit -->
                        <div class="modal fade" id="edit<?= $row['nilai_id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editLabel">Update Nilai</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <?php
                                    $id = $row['nilai_id'];
                                    echo "SELECT * FROM ta_penjualan WHERE nilai_id = '$id'";
                                    $select = $koneksi->query("SELECT * FROM tb_nilai a JOIN tb_siswa b ON a.siswa_id = b.siswa_id WHERE a.nilai_id = '$id'");
                                    $pecah = $select->fetch_assoc();
                                    ?>
                                    <div class="modal-body">
                                        <form action="module/nilai/nilai/aksi_edit.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $pecah['nilai_id'] ?>">
                                            <div class="form-group">
                                                <label>Nama Siswa</label>
                                                <select name="nilai" class="form-control">
                                                    <?php
                                                    $ambil = $koneksi->query("SELECT * FROM tb_siswa");
                                                    foreach ($ambil as $key => $value) :
                                                    ?>
                                                        <option value="<?= $value['siswa_id'] ?>"><?= $value['siswa_nama'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Bahasa Indonesia</label>
                                                <input type="number" class="form-control" name="bindo" value="<?= $pecah['nilai_bahasa_indonesia'] ?>" placeholder="Nilai Bahasa Indonesia">
                                            </div>
                                            <div class="form-group">
                                                <label>Bahasa Inggris</label>
                                                <input type="number" class="form-control" name="bing" value="<?= $pecah['nilai_bahasa_inggris'] ?>" placeholder="Nilai Bahasa Inggris">
                                            </div>
                                            <div class="form-group">
                                                <label>Matematika</label>
                                                <input type="number" class="form-control" name="mtk" value="<?= $pecah['nilai_matematika'] ?>" placeholder="Nilai Matematika">
                                            </div>
                                            <div class="form-group">
                                                <label>Ilmu Pengetahuan Alam</label>
                                                <input type="number" class="form-control" name="ipa" value="<?= $pecah['nilai_ipa'] ?>" placeholder="Nilai Ilmu Pengetahuan Alam">
                                            </div>
                                            <div class="form-group">
                                                <label>Agama</label>
                                                <input type="number" class="form-control" name="agama" value="<?= $pecah['nilai_agama'] ?>" placeholder="Nilai Agama">
                                            </div>
                                            <div class="modal-footer no-bd">
                                                <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
                                                <button class="btn btn-success" type="submit" name="update">Save</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nilai Sikap</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tb_nilai_sikap a JOIN tb_siswa b ON a.siswa_id = b.siswa_id JOIN ms_kelas c ON b.kelas_id = c.kelas_id");
                    foreach ($ambil as $no => $row) :
                        if ($row['sikap_bobot'] == 'SB') {
                            $bobot3 = 'Sangat Baik';
                        } else if ($row['sikap_bobot'] == 'B') {
                            $bobot3 = 'Baik';
                        } else if ($row['sikap_bobot'] == 'C') {
                            $bobot3 = 'Cukup';
                        } else {
                            $bobot3 = 'Kurang';
                        }
                    ?>
                        <tr>
                            <td style="width: 5%;"><?= $no + 1 ?></td>
                            <td><?= $row['siswa_nama'] ?></td>
                            <td><?= $row['kelas_nama'] ?></td>
                            <td><?= $bobot3 ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Nilai Peringkat</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Siswa</th>
                        <th>Kelas</th>
                        <th>Peringkat</th>
                        <th>Bobot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tb_peringkat a JOIN tb_siswa b ON a.siswa_id = b.siswa_id JOIN ms_kelas c ON b.kelas_id = c.kelas_id");
                    foreach ($ambil as $no => $row) :
                        if ($row['peringkat_bobot'] == 'SB') {
                            $bobot = 'Sangat Baik';
                        } else if ($row['peringkat_bobot'] == 'B') {
                            $bobot = 'Baik';
                        } else if ($row['peringkat_bobot'] == 'C') {
                            $bobot = 'Cukup';
                        } else {
                            $bobot = 'Kurang';
                        }
                    ?>
                        <tr>
                            <td style="width: 5%;"><?= $no + 1 ?></td>
                            <td><?= $row['siswa_nama'] ?></td>
                            <td><?= $row['kelas_nama'] ?></td>
                            <td><?= $row['peringkat_no'] ?></td>
                            <td><?= $bobot ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Nilai Siswa</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="module/nilai/nilai/aksi_simpan.php" method="POST">
                    <div class="form-group">
                        <label>Nama Siswa</label>
                        <br>
                        <select name="nama" class="js-example-theme-single form-control" style="width: 100%;">
                            <option value="">Select Name</option>
                            <?php
                            $ambil = $koneksi->query("SELECT siswa_id, siswa_nama FROM tb_siswa");
                            foreach ($ambil as $key => $value) :
                            ?>
                                <option value="<?= $value['siswa_id'] ?>"><?= $value['siswa_nama'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Bahasa Indonesia</label>
                        <input type="text" class="form-control" name="bindo" placeholder="Nilai Bahasa Indonesia">
                    </div>
                    <div class="form-group">
                        <label>Bahasa Inggris</label>
                        <input type="text" class="form-control" name="bing" placeholder="Nilai Bahasa Inggris">
                    </div>
                    <div class="form-group">
                        <label>Matematika</label>
                        <input type="text" class="form-control" name="mtk" placeholder="Nilai Matematika">
                    </div>
                    <div class="form-group">
                        <label>Ilmu Pengetahuan Alam</label>
                        <input type="text" class="form-control" name="ipa" placeholder="Nilai Ilmu Pengetahuan Alam">
                    </div>
                    <div class="form-group">
                        <label>Agama</label>
                        <input type="text" class="form-control" name="agama" placeholder="Nilai Agama">
                    </div>
                    <div class="form-group">
                        <label>Sikap</label>
                        <?php
                        $options = array(
                            'SB' => 'SB',
                            'B'  => 'B',
                            'C'  => 'C',
                            'D'  => 'D',
                        );
                        ?>
                        <select name="sikap" class="form-control form-control-solid">
                            <?php
                            foreach ($options as $opt) : ?>
                                <option value="<?= $opt; ?>"><?= $opt ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Peringkat</label>
                        <input type="number" class="form-control" name="peringkat" placeholder="Nilai Peringkat">
                    </div>
                    <div class="modal-footer no-bd">
                        <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
                        <button class="btn btn-success" type="submit" name="simpan">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>