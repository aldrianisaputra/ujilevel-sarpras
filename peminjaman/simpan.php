<?php
include '../koneksi.php';
if(isset($_POST['simpan'])){
    $id_peminjaman = $_POST['id_peminjaman'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $nama_pengguna = $_POST['nama_pengguna'];
    $nama_barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah'];
    $tgl_peminjaman = $_POST['tgl_peminjaman'];
    
    $sql ="INSERT INTO peminjaman (id_peminjaman, nama_pegawai, nama_pengguna, nama_barang, jumlah, tgl_peminjaman) VALUES ('$id_peminjaman','$nama_pegawai','$nama_pengguna','$nama_barang','$jumlah', '$tgl_peminjaman')
    "; 
    $query = mysqli_query($connect, $sql);
    if($query){
        header('Location: tampil.php');
    }else {
        header('Location: simpan.php?status=gagal');
    }
}
?>