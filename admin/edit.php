<?php
	session_start();

	// pengecekan apakah sudah login atau belum
	if ($_SESSION['status'] != "login") {
		header('location:../index.php?pesan=belum_login');
	}
?>

<html>
	<head>
		<title>Edit User</title>
	</head>

	<body>
		<center>
			<a href="index.php">Go To Home</a>
			<br><br>

			<?php
				include '../config.php';

				$id = $_GET['id'];

				$query = mysqli_query($mysqli, "SELECT * FROM users WHERE id='$id' ");

				while($data = mysqli_fetch_array($query)) {
			?>
					<form action="edit_aksi.php" method="post" name="form_edit">
						<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
						<table>
							<tr>
								<td>Name</td>
								<td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
							</tr>
							<tr>
								<td>Username</td>
								<td><input type="text" name="username" value="<?php echo $data['username']; ?>"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td><input type="password" name="password" value="<?php echo $data['password']; ?>"></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><input type="text" name="email" value="<?php echo $data['email']; ?>"></td>
							</tr>
							<tr>
								<td>Handphone</td>
								<td><input type="number" name="mobile" value="<?php echo $data['mobile']; ?>"></td>
							</tr>
							<tr>
								<td>Alamat</td>
								<td><textarea name="alamat"><?php echo $data['alamat']; ?></textarea></td>
							</tr>
							<tr>
								<td>Jenis Kelamin</td>
								<td>
									<?php $jk = $data['jenis_kelamin']; ?>
									<input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == "laki-laki") ? "checked" : ""; ?>>Laki-Laki
									<input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == "perempuan") ? "checked" : ""; ?>>Perempuan
								</td>
							</tr>
							<tr>
								<td>Agama</td>
								<td>
									<?php $agama = $data['agama']; ?>
									<select name="agama">
										<option value="kristen" <?php echo ($agama == "kristen") ? "selected" : "" ;?>>Kristen</option>
										<option value="islam" <?php echo ($agama == "islam") ? "selected" : "" ;?>>Islam</option>
										<option value="hindu" <?php echo ($agama == "hindu") ? "selected" : "" ;?>>Hindu</option>
										<option value="budha" <?php echo ($agama == "budha") ? "selected" : "" ;?>>Budha</option>
										<option value="atheis" <?php echo ($agama == "atheis") ? "selected" : "" ;?>>Atreis</option>
									</select>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<input type="submit" name="Submit_edit" value="edit">
								</td>
							</tr>
						</table>
					</form>
			<?php
				}
			?>
		</center>
	</body>
</html>