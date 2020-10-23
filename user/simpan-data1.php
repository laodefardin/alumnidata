<?php
include '../inc/koneksi.php';
session_start();
if(isset($_POST['submit'])){
		$univ		 = $_POST['univlanjut'];
		$prodi 		 = $_POST['prodilanjut'];
		$semester 	 = $_POST['semesterlanjut'];

		$mysql = "UPDATE alumni_profil SET
		nama_univ      = '$univ',
		program_studi2 = '$prodi', 
		semester       = '$semester'
		WHERE id_user = '$_SESSION[data_id]'";
		mysqli_query($koneksi, $mysql) or die (mysqli_error());
		$_SESSION['pesan'] = 'Update Data Berhasil';
		echo '<script>window.location="profil-alumni"</script>';
}
?> 