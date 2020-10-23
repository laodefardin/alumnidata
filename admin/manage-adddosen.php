<?php
include '../inc/koneksi.php';
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}


if (isset($_POST['tambah'])){
	$kode = mysqli_real_escape_string($koneksi, trim($_POST['kode']));
	$nama_dosen = mysqli_real_escape_string($koneksi, trim($_POST['nama_dosen']));
	$nip = mysqli_real_escape_string($koneksi, trim($_POST['nip']));
	$nidn = mysqli_real_escape_string($koneksi, trim($_POST['nidn']));
	$pangkat = mysqli_real_escape_string($koneksi, trim($_POST['pangkat']));

	$sql2 = 'INSERT INTO data_dosen (kode, nama_dosen, nip, nidn, pangkat) values("'.$kode.'","'.$nama_dosen.'","'.$nip.'","'.$nidn.'","'.$pangkat.'")';

	$cek_user = mysqli_num_rows(mysqli_query($koneksi, "SELECT data_dosen FROM kode WHERE kode='$_POST[kode]'"));
	if($cek_user > 0) {
		echo "<script>alert('Nim Sudah ada yang Pakai. Ulangi Lagi');history.go(-1)</script>";
	}else{
		$proses = $koneksi->query($sql2);
		if ($proses){
			$_SESSION['pesan'] = 'Data Berhasil di tambah';
		}
		header("location:manage-dosen-jpte");
	}		
}
?>