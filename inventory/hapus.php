<?php
include '../koneksi.php';

if (isset($_GET['id'])){
    header('location: tampil.php');
}

$id_barang = $_GET['id_barang'];

$sql = "DELETE FROM inventory WHERE id_barang ='$id_barang'";
$query = mysqli_query($connect,$sql);

if ($query) {
    header('Location: tampil.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>