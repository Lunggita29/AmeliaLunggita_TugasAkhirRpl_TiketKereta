<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jumlah = $_POST['jumlah'];
$tujuan = $_POST['tujuan'];
$asal = $_POST['asal'];
$tanggal_pesan = $_POST['tanggal'];
$harga = $_POST['harga'];
 
// update data ke database
mysqli_query($koneksi,"update keretaindo set nama='$nama', harga='$harga', jumlah='$jumlah', tujuan='$tujuan', asal='$asal', tanggal='$tanggal_pesan', alamat='$alamat' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>