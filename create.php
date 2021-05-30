<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<title>Create</title>
</head>
<body>
	<div class="container">
		<div class="alert alert-info">Tambah Data</div>

		<?php
		require 'functions.php';
		if (isset($_POST['simpan'])) {
		 	$input_nim = $_POST['txtnim'];
		 	$input_nama = $_POST['txtnama'];
		 	$input_prodi = $_POST['txtprodi'];

		 	$query = "INSERT INTO mahasiswa VALUES('$input_nim', '$input_nama', '$input_prodi')";
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
				<input type="text" class="form-control" name="txtnim">
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="txtnama">
			</div>
			<div class="form-group">
				<label for="">Prodi</label>
				<input type="text" class="form-control" name="txtprodi">
			</div>
			<br>
			<input type="submit" class="btn btn-success" name="simpan" value="Simpan Data">
			<a href="index.php" class="btn btn-warning">Batal</a>
		</form>
	</div>


	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>