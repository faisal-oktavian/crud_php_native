<?php
	session_start();

	include '../config.php';

	$id = $_POST['id'];
	$name = $_POST['name'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$alamat = $_POST['alamat'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];

	$query = mysqli_query($mysqli, "UPDATE users SET name='$name', username='$username', password='$password', email='$email', mobile='$mobile', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama' WHERE id='$id' ");

	header('location:index.php');
?>