<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<title>Update</title>
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Ubah Data</div>

		<?php
		require 'functions.php';

		// ambil data
		if (isset($_GET["nim"])) {
			$input_nim = $_GET['nim'];
			$query = "SELECT * FROM mahasiswa WHERE nim='$input_nim'";
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_assoc($result);
		}

		// simpan data
		if (isset($_POST['simpan'])) {
		 	$input_nim = $_POST['txtnim'];
		 	$input_nama = $_POST['txtnama'];
		 	$input_prodi = $_POST['txtprodi'];

		 	$query = "UPDATE mahasiswa SET nama_mahasiswa='$input_nama', prodi='$input_prodi' WHERE nim='$input_nim'";
		 	$result = mysqli_query($conn, $query);
		 	if ($result) {
		 		header('location: index.php');
		 	}else{
		 		echo 'Gagal disimpan : ' .mysqli_error($conn);
		 	}
		 } 
		?>

		<form action="" method="post">
			<div class="form-group">
				<label for="">NIM</label>
				<input type="text" class="form-control" value="<?= $row["nim"]; ?>" name="txtnim" readonly>
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" value="<?= $row["nama_mahasiswa"]; ?>" name="txtnama">
			</div>
			<div class="form-group">
				<label for="">Prodi</label>
				<input type="text" class="form-control" value="<?= $row["prodi"]; ?>" name="txtprodi">
			</div>
			<br>
			<input type="submit" class="btn btn-success" name="simpan" value="Simpan Perubahan">
			<a href="index.php" class="btn btn-warning">Batal</a>
		</form>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>