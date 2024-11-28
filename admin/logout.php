<?php
	session_start();


	// menghapus session yang tersimpan
	session_destroy();

	header('location: ../index.php?pesan=logout');
?>