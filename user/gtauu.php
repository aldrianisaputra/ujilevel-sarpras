<?php
include 'koneksi.php';

if(isset($_POST['simpan'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    
    $sql = "UPDATE inventory SET id_barang='$id_barang', nama_barang='$nama_barang', jumlah='$jumlah', WHERE id_barang='$id_barang'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: inventory.php');
    }else{
    header('Location: edit.php?status=gagal');
    }
}
?>