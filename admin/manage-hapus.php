<?php
 // membuat koneksi
include '../inc/koneksi.php';
session_start();
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['hapus'];

$hapus = "DELETE a.*,b.* FROM alumni_profil a JOIN user b ON a.id_user = b.id_user WHERE a.id_user = '$id'";
$proses = $koneksi->query($hapus);
if ($proses){
		$_SESSION['pesan'] = 'Data Berhasil di hapus';
	}
	header("location:alumni-data");
	die();
?>