<?php
include '../inc/koneksi.php';
session_start();
if(isset($_POST['submit'])){
	$posisi 	     = $_POST['posisi'];
	$nama_perusahaan = $_POST['namaperusahaan'];
	$alamat          = $_POST['alamat'];
	$lama 		     = $_POST['lamabekerja'];
	$rata  	         = $_POST['rata2gaji'];
	$rentangjarak  	 = $_POST['rentangjarak'];
	$kesesuaian  	 = $_POST['kesesuaian'];

	$mysql = "UPDATE alumni_profil SET
	posisi           = '$posisi',
	nama_perusahaan  = '$nama_perusahaan',
	gaji             = '$rata', 
	lama_bekerja     = '$lama',
	alamat_bekerja   = '$alamat',
	rentangJarak     = '$rentangjarak',
	kesesuaian       = '$kesesuaian'
	WHERE id_user = '$_SESSION[data_id]'";
	mysqli_query($koneksi, $mysql) or die (mysqli_error());
	$_SESSION['pesan'] = 'Update Data Berhasil';
	echo '<script>window.location="profil-alumni"</script>';
}
?> 