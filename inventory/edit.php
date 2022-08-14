<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $unit = $_POST['unit'];

    $sql = "UPDATE inventory SET id_barang ='$id_barang', nama_barang='$nama_barang',jumlah='$jumlah', unit='$unit' WHERE id_barang ='$id_barang'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: tampil.php');
    }else {
    header('Location: edit.php?status=gagal');
    }
}
?>