<?php
//memanggil file koneksi 
require 'koneksi.php';

//memanggil database tabel data mahasiswa
$mahasiswa = query("SELECT *,DATE_FORMAT(tanggallahir, '%d %M %Y')as tanggallahir FROM datamahasiswa");

//tombol cari ditekan
if (isset($_POST["cari"]) ) {
	$mahasiswa = cari($_POST["keyword"]);
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Home.css">
</head>
<body>
	<div class="BT"></div>
	<h1>Daftar Mahasiswa</h1>
	<br>
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-5"><a href="tambah.php">Tambah Data</a></div>
	<div class="col-sm-5">
	<div class="col-sm-1"></div>
	

	<form action="" method="post">
		<input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword ..." autocomplete="off">
		<button type="submit" name="cari">Cari !</button>
	</form>
	</div>
	</div>
	</div>
	<br>
	
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-10">
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>NIM</th>
			<th>Nama Lengkap</th>
			<th>Kota Asal</th>
			<th>Tanggal Lahir</th>
			<th>Nama Orang Tua</th>
			<th>Alamat Orang Tua</th>
			<th>Kode Pos</th>
			<th>Nomor Telepon</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
		<?php $i=1; ?>
		<?php foreach ($mahasiswa as $row) : ?>
		<tr>
			<td><?= $i;?></td>
			<td><?= $row["nim"];?></td>
			<td><?= $row["namalengkap"];?></td>
			<td><?= $row["kotaasal"];?></td>
			<td><?= $row["tanggallahir"];?></td>
			<td><?= $row["namaorangtua"];?></td>
			<td><?= $row["alamatorangtua"];?></td>
			<td><?= $row["kodepos"];?></td>
			<td><?= $row["nomortelepon"];?></td>
			<td><?= $row["status"];?></td>
			<td>
				<center><li><a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a></li> 
				<li><a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah Anda Ingin Menghapusnya ?');">Hapus</a></center></li>
			</td>
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	</table>
	<br>
	</div>
	<div class="col-sm-1"></div>
	</div>
	</div>
	<div class="BT" style="margin-bottom: 0px"></div>
</body>
</html>