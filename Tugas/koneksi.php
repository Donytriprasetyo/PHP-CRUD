<?php 
	//koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "mahasiswa");


	function query($query){
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while ( $row = mysqli_fetch_assoc($result)){
			$rows[] = $row;
		}

		return $rows;
	}


	function tambah($data){
		//ambil data dari tiap elemen dalam form
		global $conn;

		$nim = htmlspecialchars($data["nim"]);
		$namalengkap = htmlspecialchars($data["namalengkap"]);
		$kotaasal = htmlspecialchars($data["kotaasal"]);
		$tanggallahir = htmlspecialchars($data["tanggallahir"]); 
		$namaorangtua = htmlspecialchars($data["namaorangtua"]);
		$alamatorangtua = htmlspecialchars($data["alamatorangtua"]);
		$kodepos = htmlspecialchars($data["kodepos"]);
		$nomortelepon = htmlspecialchars($data["nomortelepon"]);
		$status = htmlspecialchars($data["status"]);

		//query insert data
		$query = "INSERT INTO datamahasiswa
						VALUES 
					('', '$nim', '$namalengkap', '$kotaasal', '$tanggallahir', '$namaorangtua', '$alamatorangtua', '$kodepos', '$nomortelepon', '$status')
					";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);

		}


	function hapus($id){
		global $conn;
		mysqli_query($conn, "DELETE FROM datamahasiswa WHERE id = $id");

		return mysqli_affected_rows($conn);
	}


	function ubah($data){
		//ambil data dari tiap elemen dalam form
		global $conn;
		$id = $data["id"];
		$nim = htmlspecialchars($data["nim"]);
		$namalengkap = htmlspecialchars($data["namalengkap"]);
		$kotaasal = htmlspecialchars($data["kotaasal"]);
		$tanggallahir = htmlspecialchars($data["tanggallahir"]);
		$namaorangtua = htmlspecialchars($data["namaorangtua"]);
		$alamatorangtua = htmlspecialchars($data["alamatorangtua"]);
		$kodepos = htmlspecialchars($data["kodepos"]);
		$nomortelepon = htmlspecialchars($data["nomortelepon"]);
		$status = htmlspecialchars($data["status"]);

		//query update data
		$query = "UPDATE datamahasiswa SET
						nim = '$nim',
						namalengkap = '$namalengkap',
						kotaasal = '$kotaasal',
						tanggallahir = '$tanggallahir',
						namaorangtua = '$namaorangtua',
						alamatorangtua = '$alamatorangtua',
						kodepos = '$kodepos',
						nomortelepon = '$nomortelepon',
						status = '$status'
					WHERE id = $id
					";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);
	}


	function cari($keyword){
		$query = "SELECT *,DATE_FORMAT(tanggallahir, '%d %M %Y')
					as tanggallahir 
					FROM datamahasiswa
					WHERE
					nim LIKE '%$keyword%' OR
					namalengkap LIKE '%$keyword%' OR
					kotaasal LIKE '%$keyword%' OR
					namaorangtua LIKE '%$keyword%' OR
					alamatorangtua LIKE '%$keyword%' OR
					kodepos LIKE '%$keyword%' OR
					nomortelepon LIKE '%$keyword%' OR
					status LIKE '%$keyword%'
				";
		return query($query);
	}
 ?>
