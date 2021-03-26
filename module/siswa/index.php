<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
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
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tb_siswa a JOIN ms_kelas b ON a.kelas_id = b.kelas_id");
                    foreach ($ambil as $no => $row) :
                    ?>
                        <tr>
                            <td style="width: 5%;"><?= $no + 1 ?></td>
                            <td><?= $row['siswa_nama'] ?></td>
                            <td><?= $row['kelas_nama'] ?></td>
                            <td><?= $row['siswa_jk'] ?></td>
                            <td style="width: 10%;">
                                <div class="form-button-action">
                                    <a href="#" class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#edit<?= $row['siswa_id'] ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="?p=module/siswa/delete&id=<?= $row['siswa_id'] ?>" onclick="return konfirmasi()">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <!-- modal edit -->
                        <div class="modal fade" id="edit<?= $row['siswa_id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editLabel">Update Customer Data</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <?php
                                    $id = $row['siswa_id'];
                                    $select = $koneksi->query("SELECT * FROM tb_siswa a JOIN ms_kelas b ON a.kelas_id = b.kelas_id WHERE a.siswa_id = '$id'");
                                    $pecah = $select->fetch_assoc();
                                    ?>
                                    <div class="modal-body">
                                        <form action="module/siswa/aksi_edit.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $pecah['siswa_id'] ?>">
                                            <div class="form-group">
                                                <label>Nama</label>
                                                <input class="form-control form-control-solid" value="<?= $pecah['siswa_nama'] ?>" name="nama" type="text" placeholder="Nama Siswa">
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Kelas</label>
                                                        <?php $ambil = $koneksi->query("SELECT * FROM ms_kelas"); ?>
                                                        <select name="kelas" class="form-control">
                                                            <?php foreach ($ambil as $i => $ulang) : ?>
                                                                <option value="<?= $ulang['kelas_id'] ?>
                                                                    " <?php
                                                                        if ($ulang['kelas_id'] == $pecah['kelas_id']) {
                                                                            echo 'selected="selected"';
                                                                        }
                                                                        ?>>
                                                                    <?= $ulang['kelas_nama']; ?>
                                                                </option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Jenis Kelamin</label>
                                                        <?php
                                                        $options = array(
                                                            'Laki - Laki' => 'Laki - Laki',
                                                            'Perempuan'   => 'Perempuan',
                                                        );
                                                        echo '<select name="jk" class="form-control form-control-solid">';
                                                        foreach ($options as $i => $value) {
                                                            echo "<option value=\"$i\"";
                                                            if ($pecah['siswa_jk'] == $i) {
                                                                echo " selected";
                                                            }
                                                            echo ">$value</option>";
                                                        }
                                                        echo '</select>';
                                                        ?>
                                                    </div>
                                                </div>
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

<!-- Modal Tambah -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Siswa</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="module/siswa/aksi_simpan.php" method="POST">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control form-control-solid" name="nama" type="text" placeholder="Nama Siswa">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <?php
                                $options = array(
                                    'Laki - Laki' => 'Laki - Laki',
                                    'Perempuan'   => 'Perempuan',
                                );
                                ?>
                                <select name="jk" class="form-control form-control-solid">
                                    <?php
                                    foreach ($options as $opt) : ?>
                                        <option value="<?= $opt; ?>"><?= $opt ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control">
                                    <option value="">--Pilih Kelas--</option>
                                    <?php
                                    $ambil = $koneksi->query("SELECT * FROM ms_kelas");
                                    foreach ($ambil as $key => $value) :
                                    ?>
                                        <option value="<?= $value['kelas_id'] ?>"><?= $value['kelas_nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
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