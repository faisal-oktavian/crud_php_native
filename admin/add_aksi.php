<?php
	session_start();

	include "../config.php";

	if (isset($_POST['Submit_add'])) {
		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$agama = $_POST['agama'];

		$insert_data = mysqli_query($mysqli, "INSERT INTO users (name, username, password, email, mobile, alamat, jenis_kelamin, agama) VALUES('$name', '$username', '$password', '$email', '$mobile', '$alamat', '$jenis_kelamin', '$agama')");

		echo "User berhasil ditambahkan. <a href='index.php'> Data User</a>";
	}	
?>