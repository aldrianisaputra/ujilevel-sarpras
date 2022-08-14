<?php
include '../koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Inventory Sarana Dan Prasarana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/logo_sm_dark.png">

    <!-- third party css -->
    <link href="../assets/css/vendor/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
    <style>
        .card {
            margin-top: 40px;
            margin-left: 30px;
            margin-right: 30px;
        }

        .page-title-box {
            margin-right: 30px;
        }
    </style>
</head>

<body>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"light","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            <div class="leftside-menu">

                <!-- LOGO -->
                <a href="../index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="../assets/images/logo.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="../assets/images/logo_sm.png" alt="" height="16">
                    </span>
                </a>

                <!-- LOGO -->
                <a href="../index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="../assets/images/logo-dark.png" alt="" height="16">
                    </span>
                    <span class="logo-sm">
                        <img src="../assets/images/logo_sm_dark.png" alt="" height="16">
                    </span>
                </a>

                <div class="h-100" id="leftside-menu-container" data-simplebar="">

                    <!--- Sidemenu -->
                    <ul class="side-nav">

                        <li class="side-nav-title side-nav-item">Navigation</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link"></a>
                            <a href="../index.html" class='side-nav-link'>
                                <i class="uil-home-alt"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="side-nav-title side-nav-item">Data Master</li>



                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarpengguna" aria-expanded="false" aria-controls="sidebarpengguna" class="side-nav-link">
                                <i class="uil-users-alt"></i>
                                <span> Data User </span>
                                <span class="menu-arrow"></span>
                            </a>
                            </a>
                            <div class="collapse" id="sidebarpengguna">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="../user/pengguna.php">Tambah Data</a>
                                    </li>
                                    <li>
                                        <a href="../user/tampil.php">Tampil Data</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarpegawai" aria-expanded="false" aria-controls="sidebarpegawai" class="side-nav-link">
                                <i class="uil-user"></i>
                                <span> Data Pegawai </span>
                                <span class="menu-arrow"></span>
                            </a>
                            </a>
                            <div class="collapse" id="sidebarpegawai">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="../pegawai/pegawai.php">Tambah Data</a>
                                    </li>
                                    <li>
                                        <a href="../pegawai/tampil.php">Tampil Data</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarbarang" aria-expanded="false" aria-controls="sidebarbarang" class="side-nav-link">
                                <i class="uil-database"></i>
                                <span> Data Barang </span>
                                <span class="menu-arrow"></span>
                            </a>
                            </a>
                            <div class="collapse" id="sidebarbarang">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="../barang/barang.php">Tambah Data</a>
                                    </li>
                                    <li>
                                        <a href="../barang/tampil.php">Tampil Data</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="side-nav-title side-nav-item">Data Manajemen</li>

                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarInventory" aria-expanded="false" aria-controls="sidebarInventory" class="side-nav-link">
                                <i class="uil-coins"></i>
                                <span> Data Inventory </span>
                                <span class="menu-arrow"></span>
                            </a>
                            </a>
                            <div class="collapse" id="sidebarInventory">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="../inventory/inventory.php">Tambah Data</a>
                                    </li>
                                    <li>
                                        <a href="../inventory/tampil.php">Tampil Data</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarpeminjaman" aria-expanded="false" aria-controls="sidebarpeminjaman" class="side-nav-link">
                                <i class="uil-clipboard-notes"></i>
                                <span> Data Peminjaman </span>
                                <span class="menu-arrow"></span>
                            </a>
                            </a>
                            <div class="collapse" id="sidebarpeminjaman">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="peminjaman.php">Tambah Data</a>
                                    </li>
                                    <li>
                                        <a href="tampil.php">Tampil Data</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarpengembalian" aria-expanded="false" aria-controls="sidebarpengembalian" class="side-nav-link">
                                <i class=" uil-clipboard-alt"></i>
                                <span> Data Pengembalian </span>
                                <span class="menu-arrow"></span>
                            </a>
                            </a>
                            <div class="collapse" id="sidebarpengembalian">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="../pengembalian/pengembalian.php">Tambah Data</a>
                                    </li>
                                    <li>
                                        <a href="../pengembalian/tampil.php">Tampil Data</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="side-nav-title side-nav-item">Data Laporan </li>
                        <li class="side-nav-item">
                            <a data-bs-toggle="collapse" href="#sidebarlaporan" aria-expanded="false" aria-controls="sidebarlaporan" class="side-nav-link">
                                <i class=" uil-file-exclamation-alt"></i>
                                <span> Laporan Peminjaman </span>
                                <span class="menu-arrow"></span>
                            </a>
                            </a>
                            <div class="collapse" id="sidebarlaporan">
                                <ul class="side-nav-second-level">
                                    <li>
                                        <a href="../laporan/tampil.php">Tampil Laporan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    </ul>



                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            <li class="dropdown notification-list topbar-dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <img src="../assets/images/flags/indonesia.png" alt="user-image" class="me-0 me-sm-1" height="12">
                                    <span class="align-middle d-none d-sm-inline-block">Indonesia</span> </i>
                                </a>
                            </li>



                            <li class="dropdown notification-list d-none d-sm-inline-block">
                                <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="dripicons-view-apps noti-icon"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                    <div class="p-2">
                                        <div class="row g-0">
                                            <div class="col">
                                                <a class="dropdown-icon-item" <a href="https://www.instagram.com/thizaldriani/" target="_blank">
                                                    <img src="../assets/images/brands/instagram.png" alt="instagram">
                                                    <span>Instagram</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="https://github.com/aldrianisaputra" target="_blank">
                                                    <img src="../assets/images/brands/github.png" alt="Github">
                                                    <span>GitHub</span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="dropdown-icon-item" href="https://www.youtube.com/channel/UCNk2MaoCtO670BNgel6C0Kw" target="_blank">
                                                    <img src="../assets/images/brands/youtube.png" alt="dribbble">
                                                    <span>Youtube</span>
                                                </a>
                                            </div>
                                        </div> <!-- end row-->
                                    </div>

                                </div>
                            </li>
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="../assets/images/users/admin.png" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">Aldriani</span>
                                        <span class="account-position">Admin</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome Back Aldriani!</h6>
                                    </div>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="../index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="tampil.php">Data Peminjaman</a></li>
                                        <li class="breadcrumb-item active">Input Data</li>
                                    </ol>
                                </div>
                                <h4 class="page-title"></h4>
                            </div>
                        </div>
                    </div>
                    <!-- end Topbar -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title"><b>Input Data Peminjaman</b></h4><br>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="striped-rows-preview">
                                            <div class="table-responsive-sm">
                                                <table class="table table-striped table-centered mb-0">
                                                    <form action="simpan.php" method="post">
                                                        <div class="mb-3 row">
                                                            <label for="id_peminjaman" class="col-sm-2 col-form-label">Id Peminjaman</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" name="id_peminjaman">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="nama_pegawai" class="col-sm-2 col-form-label">Nama Pegawai</label>
                                                            <div class="col-sm-10">
                                                                <select name="nama_pegawai" class="form-select " style="width:800px;">
                                                                    <option value="">-- Nama pegawai --</option>
                                                                    <?php
                                                                    include "../koneksi.php";
                                                                    //query menampilkan nama pegawai ke dalam combobox
                                                                    $query    = mysqli_query($connect, "SELECT * FROM pegawai GROUP BY id_pegawai ORDER BY id_pegawai");
                                                                    while ($data = mysqli_fetch_array($query)) {
                                                                    ?>
                                                                        <option value="<?= $data['nama_pegawai']; ?>"><?php echo $data['nama_pegawai']; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="nama_pengguna" class="col-sm-2 col-form-label">Nama pengguna</label>
                                                            <div class="col-sm-10">
                                                                <select name="nama_pengguna" class="form-select " style="width:800px;">
                                                                    <option value="">-- Nama pengguna --</option>
                                                                    <?php
                                                                    include "../koneksi.php";
                                                                    //query menampilkan nama pegawai ke dalam combobox
                                                                    $query    = mysqli_query($connect, "SELECT * FROM pengguna GROUP BY id_pengguna ORDER BY id_pengguna");
                                                                    while ($data = mysqli_fetch_array($query)) {
                                                                    ?>
                                                                        <option value="<?= $data['nama_pengguna']; ?>"><?php echo $data['nama_pengguna']; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div> 
                                                        <div class="mb-3 row">
                                                            <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
                                                            <div class="col-sm-10">
                                                                <select name="nama_barang" class="form-select " style="width:800px;">
                                                                    <option value="">-- Pilih Barang --</option>
                                                                    <?php
                                                                    include "../koneksi.php";
                                                                    //query menampilkan nama pegawai ke dalam combobox
                                                                    $query    = mysqli_query($connect, "SELECT * FROM  inventory GROUP BY id_barang ORDER BY id_barang");
                                                                    while ($data = mysqli_fetch_array($query)) {
                                                                    ?>
                                                                        <option value="<?= $data['nama_barang']; ?>"><?php echo $data['nama_barang']; ?></option>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>                                                   
                                                        <div class="mb-3 row">
                                                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                                                            <div class="col-sm-10">
                                                                <input type="number" class="form-control" name="jumlah">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label for="tgl_peminjaman" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                                                            <div class="col-sm-10">
                                                                <input type="date" class="form-control" name="tgl_peminjaman">
                                                            </div>
                                                        </div>
                                                        <div class="mt-4">
                                                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                                        </div>
                                                    </form>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end table-responsive-->
                    </div> <!-- end preview-->
                    <!-- Footer Start -->
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> © Hyper - Coderthemes.com
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end footer-links d-none d-md-block">
                                        <a href="javascript: void(0);">About</a>
                                        <a href="javascript: void(0);">Support</a>
                                        <a href="javascript: void(0);">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- end Footer -->

                </div>

                <!-- ============================================================== -->
                <!-- End Page content -->
                <!-- ============================================================== -->


            </div>
            <div class="rightbar-overlay"></div>
            <!-- /End-bar -->

            <!-- bundle -->
            <script src="../assets/js/vendor.min.js"></script>
            <script src="../assets/js/app.min.js"></script>

            <!-- third party js -->
            <!-- <script src="../assets/js/vendor/Chart.bundle.min.js"></script> -->
            <script src="../assets/js/vendor/apexcharts.min.js"></script>
            <script src="../assets/js/vendor/jquery-jvectormap-1.2.2.min.js"></script>
            <script src="../assets/js/vendor/jquery-jvectormap-world-mill-en.js"></script>
            <!-- third party js ends -->

            <!-- demo app -->
            <script src="../assets/js/pages/demo.dashboard-analytics.js"></script>
            <!-- end demo js-->
    </body>

</html>