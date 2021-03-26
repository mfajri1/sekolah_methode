<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
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
                        <th>Kelas</th>
                        <th>Jumlah Siswa</th>
                        <th>Status Kelas</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM ms_kelas");
                    foreach ($ambil as $no => $row) :
                    ?>
                        <tr>
                            <td style="width: 5%;"><?= $no + 1 ?></td>
                            <td><?= $row['kelas_nama'] ?></td>
                            <td><?= $row['kelas_jumlah'] ?> Orang</td>
                            <td><?= $row['kelas_status'] ?></td>
                            <td style="width: 10%;">
                                <div class="form-button-action">
                                    <a href="#" class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#edit<?= $row['kelas_id'] ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="?p=module/master/kelas/delete&id=<?= $row['kelas_id'] ?>" onclick="return konfirmasi()">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <!-- Modal Edit -->
                        <div class="modal fade" id="edit<?= $row['kelas_id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editLabel">Update Data Kelas</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <?php
                                    $id = $row['kelas_id'];
                                    $select = $koneksi->query("SELECT * FROM ms_kelas WHERE kelas_id = '$id'");
                                    $pecah = $select->fetch_assoc();
                                    ?>
                                    <div class="modal-body">
                                        <form action="module/master/kelas/aksi_edit.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $pecah['kelas_id'] ?>">
                                            <div class="form-group">
                                                <label>Nama Kelas</label>
                                                <input type="text" name="nama" value="<?= $pecah['kelas_nama'] ?>" class="form-control form-control-solid" placeholder="Nama Kelas Ex: VII.1">
                                            </div>
                                            <div class="form-group">
                                                <label>Kuota Kelas</label>
                                                <input type="number" name="kuota" value="<?= $pecah['kelas_jumlah'] ?>" class="form-control form-control-solid" placeholder="Jumlah Kuota Dalam Satu Kelas">
                                            </div>
                                            <div class="form-group">
                                                <label>Status Kelas</label>
                                                <?php
                                                $options2 = array(
                                                    'Reguler' => 'Reguler',
                                                    'Unggul'  => 'Unggul',
                                                );
                                                echo '<select name="status" class="form-control form-control-solid">';
                                                foreach ($options2 as $i => $value) {
                                                    echo "<option value=\"$i\"";
                                                    if ($pecah['kelas_status'] == $i) {
                                                        echo " selected";
                                                    }
                                                    echo ">$value</option>";
                                                }
                                                echo '</select>';
                                                ?>
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
                        <!-- End Modal Edit -->
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
                <h5 class="modal-title" id="staticBackdropLabel">Tambah Kelas</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="module/master/kelas/aksi_simpan.php" method="POST">
                    <div class="form-group">
                        <label>Nama Kelas</label>
                        <input type="text" name="nama" class="form-control form-control-solid" placeholder="Nama Kelas Ex: VII.1">
                    </div>
                    <div class="form-group">
                        <label>Kuota Kelas</label>
                        <input type="number" name="kuota" class="form-control form-control-solid" placeholder="Jumlah Kuota Dalam Satu Kelas">
                    </div>
                    <div class="form-group">
                        <label>Status Kelas</label>
                        <?php
                        $options2 = array(
                            'Reguler' => 'Reguler',
                            'Unggul'  => 'Unggul',
                        );
                        ?>
                        <select name="status" class="form-control form-control-solid">
                            <?php
                            foreach ($options2 as $opt2) : ?>
                                <option value="<?= $opt2; ?>"><?= $opt2 ?></option>
                            <?php endforeach ?>
                        </select>
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
<!-- End Modal Tambah -->