<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_peminjaman = $_POST['nama_peminjaman'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];    
    $tgl_peminjaman = $_POST['tgl_peminjaman'];

    $sql = "UPDATE peminjaman SET id_peminjaman='$id_peminjaman', nama_pegawai='$nama_pegawai' , nama_pengguna='$nama_pengguna', nama_barang='$nama_barang', jumlah='$jumlah', tgl_peminjaman='$tgl_peminjaman' WHERE id_peminjaman ='$id_peminjaman'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: tampil.php');
    }else {
    header('Location: edit.php?status=gagal');
    }
}
?>