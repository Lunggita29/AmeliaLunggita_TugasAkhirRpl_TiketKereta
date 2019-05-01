<html>
<style>
    body{
        background-image: url("ho.jpg");
    }
    </style>
	<br>
<a href="beranda.php">KEMBALI</a>
	<center>
<head>

<link type="text/css" rel="stylesheet" href="stylesheet.css"/>

</head>

<style>
h1{
  font-family: sans-serif;
}
 
table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
}
 
table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}
 
table th:first-child{  
  border-left:none;  
}
 
table tr {
  text-align: center;
  padding-left: 20px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}
 
table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
 
table tr:last-child td {
  border-bottom: 0;
}
 
table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
 
table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}

</style>
<body>
 
	<br/>
	<a href="tambah.php">+ TAMBAH TIKET</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>Nama Pelanggan</th>
			<th>Alamat</th>
			<th>Tanggal Pesan</th>
			<th>Tujuan</th>
			<th>Asal</th>
			<th>Jumlah Tiket</th>
			<th>Harga Tiket</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from keretaindo");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_pemesan']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['tanggal_pesan']; ?></td>
				<td><?php echo $d['tujuan']; ?></td>
				<td><?php echo $d['asal']; ?></td>
				<td><?php echo $d['jumlah_tiket']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>


	</center>
</html>

                </td>
                <td>
                <a href="index.php?kode=<?php echo $data['kode']; ?>">Edit</a> |
                <a href="hapus.php?kode=<?php echo $data['kode']; ?>" onclick="return confirm('Anda yakin ingin menghapus data?')">Hapus</a>
                </td>
                
            </tr>
    <?php