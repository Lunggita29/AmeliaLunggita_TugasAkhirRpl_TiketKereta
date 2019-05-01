<html>
<head>
</head>
<style>
    body{
        background-image: url("ho.jpg");
    }
    </style>
<style type="text/css">
.tambahdata{
	font-weight: bold;
	font-style: italic;
	border-bottom: 2px solid #ddd;
	margin-bottom: 20px;
	font-size: 29px;
	padding-bottom: 3px;
}
</style>

<body>
 
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<H1 align="center" class="tambahdata">Tambah Data Pesan Tiket</H1>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>			
				<td>Nama Pelanggan</td>
				<td><input type="varchar" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="varchar" name="alamat"></td>
			</tr>
			<tr>			
				<td>Asal</td>
				<td><input type="varchar" name="asal"></td>
			</tr>
			<tr>			
				<td>Tujuan</td>
				<td><input type="varchar" name="tujuan"></td>
			</tr>
			<tr>			
				<td>Tanggal Pesan</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td>Jumlah Tiket</td>
				<td><input type="number" name="jumlah"></td>
			</tr>
			<tr>
				<td>Harga Tiket</td>
				<td><input type="int" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br>
<marquee>
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    <img src="th.png" width="50" height="50" hspace="20">
    </marquee>
</html>