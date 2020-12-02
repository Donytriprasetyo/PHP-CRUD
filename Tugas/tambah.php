<?php 

//memanggil file koneksi
require 'koneksi.php';

//cek apakah tombol submit sudah di klik
if (isset($_POST["submit"]) ) {

	if(tambah($_POST) > 0){
		echo "
			<script>
				alert('Data Mahasiswa Berhasil Ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data Mahasiswa Gagal Ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="Tampilan.css">
</head>
<body>
	<div class="BT"></div>
	<h1>Tambah Data Mahasiswa</h1>
	<br>
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<form action="" method="post">
	<table cellpadding="10" cellspacing="0">
		<tr>
			<td><label for="nim">NIM : </label></td>
			<td><input type="number" name="nim" id="nim" required></td>
		</tr>
		<tr>
			<td><label for="namalengkap">Nama Lengkap : </label></td>
			<td><input type="text" name="namalengkap" id="namalengkap" required></td>
		</tr>
		<tr>
			<td><label for="kotaasal">Kota Asal : </label></td>
			<td><input type="text" name="kotaasal" id="kotaasal" required></td>
		</tr>
		<tr>
			<td><label for="tanggallahir">Tanggal Lahir : </label></td>
			<td><input type="date" name="tanggallahir" id="tanggallahir" required></td>
		</tr>
		<tr>
			<td><label for="namaorangtua">Nama Orang Tua : </label></td>
			<td><input type="text" name="namaorangtua" id="namaorangtua" required></td>
		</tr>
		<tr>
			<td><label for="alamatorangtua">Alamat Orang Tua : </label></td>
			<td><input type="text" name="alamatorangtua" id="alamatorangtua" required></td>
		</tr>
		<tr>
			<td><label for="kodepos">Kode Pos : </label></td>
			<td><input type="number" max="999999999999" name="kodepos"  id="kodepos" required></td>
		</tr>
		<tr>
			<td><label for="nomortelepon">Nomor Telpon : </label></td>
			<td><input type="number" max="999999999999" name="nomortelepon" id="nomortelepon" required></td>
		</tr>
		<tr>
			<td><label>Status : </label></td>
			<td>
				<select name="status" required>
				<option></option>
				<option value="Tama">Tama</option>
				<option value="Wreda">Wreda</option>
				</select>
			</td>
		</tr>		
		</table>
		<br>
		<a href="index.php">Kembali</a>
		<button type="submit" name="submit">Tambah Data</button>
	</form>
	</div>
	<div class="col-sm-4"></div>
	</div>
	</div>
<div class="BT"></div>
</body>
</html>