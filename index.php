<html>
	<head>
		<title>Sistem Informasi PPDB</title>
	</head>

	<body>
		<form action="login_aksi.php" method="post" name="form_login">
			<center>
				<!-- pesan -->
				<?php
					if (isset($_GET['pesan'])) {
						$error = '';
						if ($_GET['pesan'] == 'gagal') {
							$error = "<span style='color:red'><b>Gagal Login, username atau password salah.</b></span>";
						}
						else if ($_GET['pesan'] == 'logout') {
							$error = "<span style='color:red'><b>Anda sudah logout.</b></span>";
						}
						else if ($_GET['pesan'] == 'belum_login') {
							$error = "<span style='color:red'><b>Anda harus login dahulu untuk mengakses halaman admin.</b></span>";
						}

						echo $error;
					}
				?>
				<br><br><br>

				<table width="auto">
						<tr>
							<td>Username</td>
							<td><input type="text" name="username" placeholder="Masukkan Username"></td>
						</tr>
						<tr>
							<td>Password</td>
							<td><input type="password" name="password" placeholder="Masukkan Password"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" name="submit_login" value="LOGIN"></td>
						</tr>
				</table>
			</center>
		</form>
	</body>
</html>