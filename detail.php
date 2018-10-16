<?php

include_once 'koneksi.php';

if (isset($_GET['id'])) {

	$id = $_GET['id'];

	$query = "SELECT * FROM mahasiswa WHERE id = '$id'";

	$query_success = mysqli_query($conn,$query);

	if ($query_success) {

		header('location: search.php');

	}else {

		die(mysqli_error());

	}

}

?>