<?php 
	if(isset($_GET['nim'])) {
		require 'functions.php';

		$input_nim = $_GET['nim'];

		$query = "DELETE FROM Mahasiswa WHERE nim='$input_nim'";

		$result = mysqli_query($conn, $query);
		 	if ($result) {
		 		header('location: index.php');
		 	}else{
		 		echo 'Gagal dihapus : ' .mysqli_error($conn);
		 	}
	}
?>