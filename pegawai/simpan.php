<?php
include '../koneksi.php';
if(isset($_POST['simpan'])){
    $id_pegawai = $_POST['id_pegawai'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];
    
    $sql ="INSERT INTO pegawai (id_pegawai, nama_pegawai, jenis_kelamin, email, telepon, alamat) VALUES ('$id_pegawai', '$nama_pegawai', '$jenis_kelamin', '$email', '$telepon','$alamat')
    "; 
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: tampil.php');
    }else {
        header('Location: simpan.php?status=gagal');
    }
}
?>