<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



	<title>Tabel Mahasiswa</title>
</head>
<body>
	<div class="container">
		<div class="alert alert-info"><h1>Tabel Mahasiswa</h1></div>

		<a href="create.php" class="btn btn-primary">Tambah Data</a>
		<br><br>

		<table cellspacing="0" cellpadding="10" class="table align-middle table-bordered">
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Prodi</th>
				<th>Aksi</th>
			</tr>

			<?php $i = 1; ?>
			<?php foreach($mahasiswa as $row) :?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $row["nim"]; ?></td>
				<td><?= $row["nama_mahasiswa"]; ?></td>
				<td><?= $row["prodi"]; ?></td>
				<td>
					<a href="delete.php?nim=<?=$row["nim"]; ?>" class="btn btn-danger">Hapus</a>
					<a href="ubah.php?nim=<?=$row["nim"]; ?>" class="btn btn-warning">Ubah</a>
				</td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   

</body>
</html>