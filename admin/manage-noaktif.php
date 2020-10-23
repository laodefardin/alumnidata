<?php
 // membuat koneksi
include '../inc/koneksi.php';
session_start();
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['non-aktif'];

$ubah = "UPDATE user set active = 0 WHERE id_user = '$id'";
$ubah1 = "UPDATE user set level = 'user' WHERE id_user = '$id'";

$proses = $koneksi->query($ubah);
$proses = $koneksi->query($ubah1);
if ($proses){
		$_SESSION['pesan'] = 'User Berhasil di Non-Aktifkan';
	}
	header("location:usermanage");
?>