<?php
include_once 'koneksi.php';

if (isset($_POST['submit'])) {
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$program_studi = $_POST['program_studi'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto_hidup = $_POST['moto_hidup'];

	$query = "INSERT INTO `mahasiswa`(

			    `nama`,
			    `nim`,
			    `jenis_kelamin`,
			    `program_studi`,
			    `fakultas`,
			    `asal`,
			    `moto_hidup`
			)

			VALUES('$nama', '$nim', '$jenis_kelamin','$program_studi',
			'$fakultas','$asal','$moto_hidup')";

	$query_success = mysqli_query($conn,$query);
	if ($query_success) {
		header('location: lihatdata.php');
	}else {
		echo "gagal registrasi".mysqli_error($conn);
	}
}
?>