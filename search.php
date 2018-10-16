<?php
	include_once 'koneksi.php';
	echo "<h3>Pencarian</h3>";
	$search = isset($_POST['search'])? $_POST['search'] : "";

	$perintah = "SELECT * FROM mahasiswa WHERE nim LIKE '%$search%'";
	$hasil = mysqli_query($conn,$perintah);
	$jumlah = mysqli_num_rows($hasil);
	if ($jumlah>0) {
		echo ("data telah ditemukan : $jumlah<br><hr>");
	while ($data = mysqli_fetch_row($hasil)) {
		echo ("nama : $data[0]<br>");
		echo ("nim : $data[1]<br>");
	}
	}else {
		echo "maaf, data yang anda cari tidak ditemukan";
	}
?><br>
<a href="lihatdata.php">kembali</a>