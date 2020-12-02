<?php 

//memanggil file koneksi
require 'koneksi.php';

//ambil data di URL
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM datamahasiswa WHERE id = $id")[0];


//cek apakah tombol submit sudah di klik
if (isset($_POST["submit"]) ) {

	if(ubah($_POST) > 0){
		echo "
			<script>
				alert('Data Mahasiswa Berhasil Diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}else{
		echo "
			<script>
				alert('Data Mahasiswa Gagal Diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
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
	<h1>Ubah Data Mahasiswa</h1>
	<br>
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"]?>">
		<table cellpadding="10" cellspacing="0">
		<tr>
			<td><label for="nim">NIM : </label></td>
			<td><input type="number" name="nim" id="nim" required value="<?= $mhs["nim"]?>"></td>
		</tr>
		<tr>
			<td><label for="namalengkap">Nama Lengkap : </label></td>
			<td><input type="text" name="namalengkap" id="namalengkap" required value="<?= $mhs["namalengkap"]?>"></td>
		</tr>
		<tr>
			<td><label for="kotaasal">Kota Asal : </label>
			<td><input type="text" name="kotaasal" id="kotaasal" required value="<?= $mhs["kotaasal"]?>"></td>
		</tr>
		<tr>
			<td><label for="tanggallahir">Tanggal Lahir : </label></td>
			<td><input type="date" name="tanggallahir" id="tanggallahir" required value="<?= $mhs["tanggallahir"]?>"></td>
		</tr>
		<tr>
			<td><label for="namaorangtua">Nama Orang Tua : </label></td>
			<td><input type="text" name="namaorangtua" id="namaorangtua" required value="<?= $mhs["namaorangtua"]?>"></td>
		</tr>
		<tr>
			<td><label for="alamatorangtua">Alamat Orang Tua : </label></td>
			<td><input type="text" name="alamatorangtua" id="alamatorangtua" required value="<?= $mhs["alamatorangtua"]?>"></td>
		</tr>
		<tr>
			<td><label for="kodepos">Kode Pos : </label></td>
			<td><input type="number" max="999999999999" name="kodepos" id="kodepos" required value="<?= $mhs["kodepos"]?>"></td>
		</tr>
		<tr>
			<td><label for="nomortelepon">Nomor Telpon : </label></td>
			<td><input type="number" max="999999999999" name="nomortelepon" id="nomortelepon" required value="<?= $mhs["nomortelepon"]?>"></td>
		</tr>
		<tr>
			<td><label for="status">Status : </label></td>
			<td>
				<select name="status" required>
				<option></option>
				<option value="Tama">Tama</option>
				<option value="Wreda">Wreda</option>
				</select>
			</td>
			<!-- <td><input type="text" name="status" id="status" required value="<?= $mhs["status"]?>"></td> -->
		</tr>
	</table>
	<br>
	<a href="index.php">Kembali</a>
	<button type="submit" name="submit">Ubah Data</button>
	</form>
	</div>
	<div class="col-sm-4"></div>
	</div>
	</div>
	<div class="BT"></div>
</body>
</html>