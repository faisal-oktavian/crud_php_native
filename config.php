<?php
	$dbHost = "localhost";
	$dbUser = "root";
	$dbPass = "";
	$dbName = "crud_db";

	$mysqli = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

	// if (mysqli_connect_errno($mysqli)) {
	// 	echo "Gagal koneksi ke database".mysql_connect_error();
	// }
?>