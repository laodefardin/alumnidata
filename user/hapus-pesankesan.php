<?php
// Load file koneksi.php
include '../inc/koneksi.php';
session_start();

$id = $_GET['id'];

$query = "SELECT * FROM data_pesankesan WHERE id_pesankesan ='".$id."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

$hapus = "DELETE FROM data_pesankesan WHERE id_pesankesan = '$id'";
$proses = $koneksi->query($hapus);
if ($proses){
	$_SESSION['pesan'] = 'Data Berhasil di hapus';
}
header("location:pesan-kesan-alumni");
die();
?>