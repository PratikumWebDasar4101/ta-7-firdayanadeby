<?php
include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>lihatdata.php</title>
</head>
<body>
	<table border="1" align="center">
		<tr align="right">
			<td>
				<form action="search.php" method="POST">
				<input type="text" name="search">
				<input type="submit" name="submit" value="submit">
				</form>
			</td>
		</tr>
		<tr>
			<th>nama</th>
			<th>nim</th>
			<th>jenis kelamin</th>
			<th>program studi</th>
			<th>fakultas</th>
			<th>asal</th>
			<th>moto hidup</th>
			<th>Aksi</th>
		</tr>
		<?php 
		$query = "
				SELECT
					`id`,
				   `nama`,
				   `nim`,
				   `jenis_kelamin`,
				   `program_studi`,
				   `fakultas`,
				   `asal`,
				   `moto_hidup`
				FROM
				    `mahasiswa`
				";
		$result= mysqli_query($conn,$query);

		while($data=mysqli_fetch_array($result)){
		?>
		<tr>
			<td align="center">
				<?php
				echo $data['nama'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['nim'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['jenis_kelamin'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['program_studi'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['fakultas'];
				?>
			</td>
			<td align="center">
				<?php
				echo $data['asal'];
				?>				
			</td>
			<td align="center">
				<?php
				echo $data['moto_hidup'];
				?>
			</td>
			<td><a href="delete.php?id=<?php echo $data['id'];?>">Delete</a></td>
			<td><a href="detail.php?id=<?php echo $data['id'];?>">Detail</a></td>
			<td><a href="update.php?id=<?php echo $data['id'];?>">Update</a></td>
			<td><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a></td>
		</tr>
		<?php 
		}
		?>
	</table>
		<p align="center"><a href="regis.php">tambah data</a></p>
</body>
</html>