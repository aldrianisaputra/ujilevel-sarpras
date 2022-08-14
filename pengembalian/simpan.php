<?php
include '../koneksi.php';
if(isset($_POST['simpan'])){
    $id_pengembalian = $_POST['id_pengembalian'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];
    
    $sql ="INSERT INTO pengembalian (id_pengembalian, nama_pengguna, nama_barang, jumlah, tgl_pengembalian) VALUES ('$id_pengembalian','$nama_pengguna','$nama_barang','$jumlah',  '$tgl_pengembalian')
    "; 
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: tampil.php');
    }else {
        header('Location: simpan.php?status=gagal');
    }
}
?>