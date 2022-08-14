<?php
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Inventory Sarana Prasarana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/logo_sm_dark.png">

    <!-- third party css -->
    <link href="../assets/css/vendor/dataTables.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/vendor/responsive.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/vendor/buttons.bootstrap5.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/vendor/select.bootstrap5.css" rel="stylesheet" type="text/css">
    <!-- third party css end -->

    <!-- App css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="../assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">
    <style>
        .card {
            margin-top: 20px;
            margin-left: 30px;
            margin-right: 30px;
        }

        .page-title-box {
            margin-right: 30px;
        }
    </style>

</head>

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
                                                <img src=" assets/images/brands/instagram.png" alt="instagram">
                                                <span>Instagram</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="https://github.com/aldrianisaputra" target="_blank">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="https://www.youtube.com/channel/UCNk2MaoCtO670BNgel6C0Kw" target="_blank">
                                                <img src="assets/images/brands/youtube.png" alt="dribbble">
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
                                    <li class="breadcrumb-item active">Data Peminjaman</li>
                                </ol>
                            </div>
                            <h4 class="page-title"></h4>
                        </div>
                    </div>
                </div>
                <!-- end Topbar -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title;">Data Peminjaman</h4>
                                <hr>
                                <br>
                                <div class="tab-content">
                                    <div class="tab-pane show active" id="basic-datatable-preview">
                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Id peminjaman</th>
                                                    <th>Nama Pegawai </th>
                                                    <th>Nama user </th>
                                                    <th>Nama barang</th>
                                                    <th>Jumlah</th>                                                    
                                                    <th>Tanggal peminjaman</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <?php
                                           $sql = "SELECT * FROM peminjaman";
                                           $query =  mysqli_query($connect, $sql);
                                           while ($peminjaman = mysqli_fetch_array($query)) {
                                            ?>
                                                <tr>
                                                    <td><?php echo $peminjaman['id_peminjaman'] ?></td>
                                                    <td><?php echo $peminjaman['nama_pegawai'] ?></td>
                                                    <td><?php echo $peminjaman['nama_pengguna'] ?></td>
                                                    <td><?php echo $peminjaman['nama_barang']  ?></td>
                                                    <td><?php echo $peminjaman['jumlah']  ?></td>
                                                    <td><?php echo $peminjaman['tgl_peminjaman']  ?></td>

                                                    <td>
                                                        <a href="formedit.php?id_peminjaman=<?php echo  $peminjaman['id_peminjaman'] ?>" <i class='mdi mdi-pencil'></i></a>
                                                        <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="hapus.php?id_peminjaman=<?php echo $peminjaman['id_peminjaman'] ?>" <i class='mdi mdi-delete'></i></a>
                                                    </td>

                                                </tr>
                                            <?php } ?>

                                        </table>
                                    </div> <!-- end preview-->
                                </div> <!-- end tab-content-->
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end row-->
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


        </div>
    </div>

    <div class="rightbar-overlay"></div>
    <!-- /End-bar -->


    <!-- bundle -->
    <script src="../assets/js/vendor.min.js"></script>
    <script src="../assets/js/app.min.js"></script>

    <!-- third party js -->
    <script src="../assets/js/vendor/jquery.dataTables.min.js"></script>
    <script src="../assets/js/vendor/dataTables.bootstrap5.js"></script>
    <script src="../assets/js/vendor/dataTables.responsive.min.js"></script>
    <script src="../assets/js/vendor/responsive.bootstrap5.min.js"></script>
    <script src="../assets/js/vendor/dataTables.buttons.min.js"></script>
    <script src="../assets/js/vendor/buttons.bootstrap5.min.js"></script>
    <script src="../assets/js/vendor/buttons.html5.min.js"></script>
    <script src="../assets/js/vendor/buttons.flash.min.js"></script>
    <script src="../assets/js/vendor/buttons.print.min.js"></script>
    <script src="../assets/js/vendor/dataTables.keyTable.min.js"></script>
    <script src="../assets/js/vendor/dataTables.select.min.js"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="../assets/js/pages/demo.datatable-init.js"></script>
    <!-- end demo js-->

</body>

</html>