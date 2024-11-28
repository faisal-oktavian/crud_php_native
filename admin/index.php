<?php
	session_start();

	// pengecekan apakah sudah login atau belum
	if ($_SESSION['status'] != "login") {
		header('location:index.php?pesan=belum_login');
	}

	include '../config.php';

	$result = mysqli_query($mysqli, 'SELECT * FROM users ORDER BY id DESC');
?>

<html>
	<head>
		<title>Homepage</title>
	</head>
	
	<body>
		<center>
			<h2>Selamat datang <?php echo $_SESSION['username'];?> di halaman admin</h2>

			<a href='add.php'>Tambah user baru</a>
			<br><br>

			<table border="1" width="50%">
				<thead>
					<tr>
						<td style="text-align: center;">#</td>
						<td style="text-align: center;">Nama</td>
						<td style="text-align: center;">Username</td>
						<td style="text-align: center;">Password</td>
						<td style="text-align: center;">Email</td>
						<td style="text-align: center;">HP</td>
						<td style="text-align: center;">Alamat</td>
						<td style="text-align: center;">Jenis Kelamin</td>
						<td style="text-align: center;">Agama</td>
						<td style="text-align: center;">Aksi</td>
					</tr>
				</thead>

				<tbody>
					<?php 
						$no = 0;
						while($data = mysqli_fetch_array($result)) {
							$no++;
					?>
							<tr>
								<td><?php echo $no; ?></td>
								<td><?php echo $data['name']; ?></td>
								<td><?php echo $data['username']; ?></td>
								<td><?php echo $data['password']; ?></td>
								<td><?php echo $data['email']; ?></td>
								<td><?php echo $data['mobile']; ?></td>
								<td><?php echo $data['alamat']; ?></td>
								<td><?php echo $data['jenis_kelamin']; ?></td>
								<td><?php echo $data['agama']; ?></td>
								<td>
									<a href="edit.php?id=<?php echo $data['id'];?>">Edit</a>
									<a href="delete.php?id=<?php echo $data['id'];?>">Hapus</a>
								</td>
							</tr>
					<?php
						}
					?>
				</tbody>
			</table>

			<br>
			<a href="logout.php">LOGOUT</a>
		</center>
	</body>
</html>