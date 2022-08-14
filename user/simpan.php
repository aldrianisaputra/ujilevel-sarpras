<?php
include '../koneksi.php';
if(isset($_POST['simpan'])){
    $id_pengguna = $_POST['id_pengguna'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $email = $_POST['email'];
    $telepon = $_POST['telepon'];
    
    $sql ="INSERT INTO pengguna (id_pengguna, nama_pengguna, email, telepon) VALUES ('$id_pengguna', '$nama_pengguna', '$email', '$telepon')
    "; 
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: tampil.php');
    }else {
        header('Location: simpan.php?status=gagal');
    }
}
?>