<?php
 // membuat koneksi
include '../inc/koneksi.php';
session_start();
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['admin'];

$ubah = "UPDATE user set level = 'admin' WHERE id_user = '$id'";

$proses = $koneksi->query($ubah);
		if ($proses){
		$_SESSION['pesan'] = 'Data Berhasil di ubah Menjadi Admin';
	}
	header("location:usermanage");
?>