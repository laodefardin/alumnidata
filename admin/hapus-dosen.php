<?php
// Load file koneksi.php
include '../inc/koneksi.php';

$id = $_GET['hapus'];

$query = "SELECT * FROM data_dosen WHERE id_dosen ='".$id."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

$hapus = "DELETE FROM data_dosen WHERE id_dosen = '$id'";
$proses = $koneksi->query($hapus);
if ($proses){
	$_SESSION['pesan'] = 'Data Berhasil di hapus';
}
header("location:manage-dosen-jpte");
die();
?>