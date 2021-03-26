<body id="page-top">
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery/jquery.js"></script>
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script type="text/javascript" language="JavaScript">
        function konfirmasi() {
            tanya = confirm("Anda Yakin Akan Menghapus Data ?");
            if (tanya == true) return true;
            else return false;
        }
    </script>

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SMP <sup>25</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="?p=module/user/index">
                    <i class="fas fa-user"></i>
                    <span>Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?p=module/siswa/index">
                    <i class="fas fa-users"></i>
                    <span>Siswa</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?p=module/master/kelas/index">
                    <i class="fas fa-cog"></i>
                    <span>Kelas</span>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a class="nav-link" href="?p=module/nilai/mp/index">
                    <i class="fas fa-user-graduate"></i>
                    <span>Nilai</span>
                </a>
            </li> -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#master" aria-expanded="true" aria-controls="master">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Master</span>
                </a>
                <div id="master" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Master</h6>
                        <a class="collapse-item" href="?p=module/master/kelas/index">Kelas</a>
                    </div>
                </div>
            </li> -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#nilai" aria-expanded="true" aria-controls="nilai">
                    <i class="fas fa-user-graduate"></i>
                    <span>Nilai</span>
                </a>
                <div id="nilai" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Daftar Nilai</h6>
                        <a class="collapse-item" href="?p=module/nilai/index">Nilai Keseluruhan</a>
                        <a class="collapse-item" href="?p=module/nilai/pengujian">Nilai Pengujian</a>
                        <a class="collapse-item" href="?p=module/nilai/kriteria">Nilai Kriteria</a>
                        <a class="collapse-item" href="?p=module/nilai/normalisasi">Normalisasi</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="laporan">
                    <i class="fas fa-poll"></i>
                    <span>Hasil</span>
                </a>
                <div id="laporan" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Hasil Analisa</h6>
                        <a class="collapse-item" href="?p=module/hasil/daftar_siswa/index">Daftar Siswa</a>
                        <a class="collapse-item" href="?p=module/hasil/kelas_unggul/index">Siswa Kelas Unggul</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->