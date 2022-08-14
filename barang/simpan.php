<?php
include '../koneksi.php';
if(isset($_POST['simpan'])){
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    
    
    
    $sql ="INSERT INTO barang (id_barang, nama_barang) VALUES ('$id_barang', '$nama_barang')
    "; 
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: tampil.php');
    }else {
        header('Location: simpan.php?status=gagal');
    }
}
?>