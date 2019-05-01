<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jumlah = $_POST['jumlah'];
$tujuan = $_POST['tujuan'];
$asal = $_POST['asal'];
$tanggal_pesan = $_POST['tanggal'];
$harga = $_POST['harga'];
$kereta = $_POST['kereta'];

// menginput data ke database
mysqli_query($koneksi,"insert into keretaindo values('','$nama','$alamat','$jumlah','$tujuan','$asal','$tanggal_pesan','$harga')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>