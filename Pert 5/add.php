<?php  
	include "config.php";

	$nama = $_POST['nama'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];

	$query = "INSERT INTO data_mahasiswa(nama, kelas, alamat) VALUES('$nama', '$kelas', '$alamat')";
	$add = $koneksi->query($query);

	If ($add) {
		$koneksi->close();
		header("location:index.php");
		exit();
	} else {
		$koneksi->close();
		header("Error Detected: ".$koneksi->error);
		exit();
	}

	// If (isset($_POST['submit'])) {
	// 	$nama = $_POST['nama'];
	// 	$kelas = $_POST['kelas'];
	// 	$alamat = $_POST['alamat'];

	// 	$query = "INSERT INTO data_mahasiswa(nama, kelas, alamat) VALUES('$nama', '$kelas', '$alamat')";
	// 	$add = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

	// 	If ($add) {
	// 		//echo '<script>alert("Berhasil menambahkan data."); document.location="index.php";</script>';
	// 		echo '<h3>Data Sukses Ditambahkan</h3>';
	// 		header("location:index.php");
	// 	} else {
	// 		//echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
	// 		die("ERROR: ".mysqli_error());
	// 		exit();
	// 	}
	// }

?>