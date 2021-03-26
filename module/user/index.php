<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel User</h6>
        <button class="btn btn-primary btn-icon-split" type="button" data-toggle="modal" data-target="#staticBackdrop" style="float: right;">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Add</span>
        </button>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Full Name</th>
                        <th>Nick</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tb_user");
                    foreach ($ambil as $no => $row) :
                    ?>
                        <tr>
                            <td style="width: 5%;"><?= $no + 1 ?></td>
                            <td><?= $row['user_fullname'] ?></td>
                            <td><?= $row['user_nick'] ?></td>
                            <td><?= $row['user_email'] ?></td>
                            <td><?= $row['role'] ?></td>
                            <td style="width: 10%;">
                                <div class="form-button-action">
                                    <a href="#" class="btn btn-success btn-sm" type="button" data-toggle="modal" data-target="#edit<?= $row['user_id'] ?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-danger btn-sm" href="?p=module/user/delete&id=<?= $row['user_id'] ?>">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <!-- modal edit -->
                        <div class="modal fade" id="edit<?= $row['user_id'] ?>" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editLabel">Update User Data</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    </div>
                                    <?php
                                    $id = $row['user_id'];
                                    $select = $koneksi->query("SELECT * FROM tb_user WHERE user_id = '$id'");
                                    $pecah = $select->fetch_assoc();
                                    ?>
                                    <div class="modal-body">
                                        <form action="module/user/aksi_edit.php" method="POST">
                                            <input type="hidden" name="id" value="<?= $pecah['user_id'] ?>">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input class="form-control form-control-solid" name="fullname" value="<?= $pecah['user_fullname'] ?>" type="text" placeholder="Full Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Nick Name</label>
                                                <input class="form-control form-control-solid" name="nick" value="<?= $pecah['user_nick'] ?>" type="text" placeholder="Nick Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input class="form-control form-control-solid" name="email" value="<?= $pecah['user_email'] ?>" type="email" placeholder="Email Address">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control form-control-solid" name="password" value="<?= $pecah['user_password'] ?>" type="password" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label>Role</label>
                                                <?php
                                                $options2 = array(
                                                    'Kepala Sekolah'    => 'Kepala Sekolah',
                                                    'Guru' => 'Guru',
                                                    'Tata Usaha' => 'Tata Usaha',
                                                    'Admin' => 'Admin',
                                                );
                                                echo '<select name="status" class="form-control form-control-solid">';
                                                foreach ($options2 as $i => $value) {
                                                    echo "<option value=\"$i\"";
                                                    if ($pecah['role'] == $i) {
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
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Edit -->


<!-- Modal Tambah -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Users</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="module/user/aksi_simpan.php" method="POST">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input class="form-control form-control-solid" name="fullname" type="text" placeholder="Full Name">
                    </div>
                    <div class="form-group">
                        <label>Nick Name</label>
                        <input class="form-control form-control-solid" name="nick" type="text" placeholder="Nick Name">
                    </div>
                    <div class="form-group">
                        <label>Email Address</label>
                        <input class="form-control form-control-solid" name="email" type="email" placeholder="Email Address">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control form-control-solid" name="password" type="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <?php
                        $options = array(
                            'Kepala Sekolah' => 'Kepala Sekolah',
                            'Guru'           => 'Guru',
                            'Tata Usaha'     => 'Tata Usaha',
                            'Admin'          => 'Admin',
                        );
                        ?>
                        <select name="status" class="form-control form-control-solid">
                            <?php
                            foreach ($options as $opt) : ?>
                                <option value="<?= $opt; ?>"><?= $opt ?></option>
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