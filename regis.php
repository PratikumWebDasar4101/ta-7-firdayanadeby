<!DOCTYPE html>
<html>
<head>
	<title>Registrasi mahasiswa</title>
</head>
<body>
	<table align="center">
		<tr>
			<td><font size="5">Registrasi Mahasiswa</font></td>
		</tr>
		<form action="prosesregis.php" method="post" enctype="multipart/form-data">
		<tr>
			<td>Nama <br>
			<input type="text" name="nama" pattern="[A-Za-z ]{1,25}" title="maksimal 25 karakter dan tidak mengandung angka" required>
			</td>
		</tr>
		<tr>
			<td>Nim <br>
			<input type="text" name="nim" pattern="[0-9]{10}" title="harus angka 10 karakter" required>
			</td>
		</tr>
		<tr>
			<td>Jenis kelamin <br>
				<input type="radio" name="jenis_kelamin" value="laki-laki">laki-laki
				<input type="radio" name="jenis_kelamin" value="perempuan">perempuan
			</td>
		</tr>
		<tr>
			<td>Program studi <br>
				<select name="program_studi">
					<option value="Manajemen informatika">Manajemen informatika</option>
					<option value="Sistem informasi">Sistem informasi</option>
					<option value="teknik informatika">teknik informatika</option>
					<option value="ilmu komunikasi">ilmu komunikasi</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>fakultas <br>
				<select name="fakultas">
					<option value="FIT">FIT</option>
					<option value="FIK">FIK</option>
					<option value="FRI">FRI</option>
					<option value="FEB">FEB</option>
				</select>
			</td>
			<tr><br>
				<td> Asal <br>
					<input type="text" name="asal">
				</td>
			</tr>
			<tr>
				<td> Moto Hidup <br>
				<textarea name="moto_hidup"></textarea>
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
	</table>
</body>
</html>