<html>
<head>
</head>
<body>
 
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA TIKET KERETA</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from keretaindo where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="varchar" name="nama" value="<?php echo $d['nama_pemesan']; ?>">
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><input type="varchar" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Pesan</td>
					<td><input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
                </tr>
                <tr>
					<td>Asal</td>
					<td><input type="varchar" name="asal" value="<?php echo $d['asal']; ?>"></td>
                </tr>
                <tr>
					<td>Tujuan</td>
					<td><input type="varchar" name="tujuan" value="<?php echo $d['tujuan']; ?>"></td>
                </tr>
                <tr>
					<td>Jumlah Tiket</td>
					<td><input type="number" name="jumlah" value="<?php echo $d['jumlah_tiket']; ?>"></td>
                </tr>
                <tr>
					<td>Harga Tiket</td>
					<td><input type="int" name="harga" value="<?php echo $d['harga']; ?>"></td>
                </tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>