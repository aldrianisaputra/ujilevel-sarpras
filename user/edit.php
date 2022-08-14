<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_pengguna = $_POST['id_pengguna'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];

    $sql = "UPDATE pengguna SET id_pengguna ='$id_pengguna', nama_pengguna='$nama_pengguna', email='$email', telepon='$telepon' WHERE id_pengguna ='$id_pengguna'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: tampil.php');
    }else {
    header('Location: edit.php?status=gagal');
    }
}
?>