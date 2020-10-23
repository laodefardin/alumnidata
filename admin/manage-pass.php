<?php
 // membuat koneksi
include '../inc/koneksi.php';
session_start();
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

	$id = $_POST['id'];
	$password = $_POST['password'];

	$password  = md5($password);
	$ubah = " UPDATE user SET password = '$password' WHERE id_user = '$id' ";
	$proses = $koneksi->query($ubah);
	if ($proses){
		$_SESSION['pesan'] = 'Password Berhasil diubah';
	}
	header("location:usermanage");
?>