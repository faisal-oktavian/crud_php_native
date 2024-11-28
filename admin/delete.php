<?php
	include '../config.php';

	$id = $_GET['id'];

	$query = mysqli_query($mysqli, "DELETE FROM users WHERE id='$id' ");

	header('location:index.php');
?>