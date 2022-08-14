<?php
include '../koneksi.php';
if(isset($_POST['simpan'])){
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $unit = $_POST['unit'];
    
    
    $sql ="INSERT INTO inventory (id_barang, nama_barang, jumlah, unit) VALUES ('$id_barang', '$nama_barang', '$jumlah', '$unit')
    "; 
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: tampil.php');
    }else {
        header('Location: simpan.php?status=gagal');
    }
}
?>