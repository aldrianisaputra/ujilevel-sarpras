<?php
include '../koneksi.php';

if (isset($_GET['id'])){
    header('location: tampil.php');
}

$id_pegawai = $_GET['id_pegawai'];

$sql = "DELETE FROM pegawai WHERE id_pegawai ='$id_pegawai'";
$query = mysqli_query($connect,$sql);

if ($query) {
    header('Location: tampil.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>