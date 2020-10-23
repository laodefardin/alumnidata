<?php
 // membuat koneksi
include '../inc/koneksi.php';
session_start();
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['aktifkan'];

$ubah = "UPDATE user set active = 1 WHERE id_user = '$id'";
$proses = $koneksi->query($ubah);
if ($proses){
		$_SESSION['pesan'] = 'Data Berhasil di Aktifkan';
	}
	header("location:usermanage");
?>