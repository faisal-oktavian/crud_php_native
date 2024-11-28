<?php
	session_start();

	// pengecekan apakah sudah login atau belum
	if ($_SESSION['status'] != "login") {
		header('location:../index.php?pesan=belum_login');
	}
?>

<html>
	<head>
		<title>Tambah user</title>
	</head>

	<body>
		<center>
			<a href="index.php">Go To Home</a>
			<br><br>

			<form action="add_aksi.php" method="post" name="form_add">
				<table>
					<tr>
						<td>Name</td>
						<td><input type="text" name="name" placeholder="Masukkan Nama"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" placeholder="Masukkan Username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" placeholder="Masukkan Password"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="text" name="email" placeholder="Masukkan Email"></td>
					</tr>
					<tr>
						<td>Handphone</td>
						<td><input type="number" name="mobile" placeholder="Masukkan Handphone"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td><textarea type="text" name="alamat"></textarea></td>
					</tr>
					<tr>
						<td>Jenis Kelamin</td>
						<td>
							<input type="radio" name="jenis_kelamin" value="laki-laki">Laki-Laki
							<input type="radio" name="jenis_kelamin" value="perempuan">Perempuan
						</td>
					</tr>
					<tr>
						<td>Agama</td>
						<td>
							<select name="agama">
								<option value="kristen">Kristen</option>
								<option value="islam">Islam</option>
								<option value="hindu">Hindu</option>
								<option value="budha">Budha</option>
								<option value="atheis">Atreis</option>
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" name="Submit_add" value="add">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>