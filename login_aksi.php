<html>
	<head>
		<title>Halaman Admin Sistem Informasi PPDB</title>
	</head>

	<body>
		<?php
			session_start();

			include 'config.php';

			$username = $_POST['username'];
			$password = $_POST['password'];

			// cek username dan password yang diinput
			$data_login = mysqli_query($mysqli, "SELECT * FROM users where username = '$username' AND password = '$password' ");
			$check = mysqli_num_rows($data_login);

			if ($check > 0) {
				$_SESSION['username'] = $username;
				$_SESSION['status'] = 'login';

				header('location:admin/index.php');
			}
			else {
				header('location:index.php?pesan=gagal');
			}
		?>
	</body>
</html>