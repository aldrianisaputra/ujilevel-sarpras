<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    $sql = "UPDATE pegawai SET id_pegawai ='$id_pegawai', nama_pegawai='$nama_pegawai',jenis_kelamin='$jenis_kelamin', email='$email', telepon='$telepon', alamat='$alamat' WHERE id_pegawai ='$id_pegawai'";
    $query = mysqli_query($connect, $sql);
    if ($query) {
    header('Location: tampil.php');
    }else {
    header('Location: edit.php?status=gagal');
    }
}
?>