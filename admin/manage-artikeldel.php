<?php
// Load file koneksi.php
include '../inc/koneksi.php';
session_start();

$id = $_GET['id'];

$query = "SELECT * FROM data_artikel WHERE id_artikel ='".$id."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
// Cek apakah file fotonya ada di folder images
if(is_file("upload/".$data['foto'])) // Jika foto ada
  unlink("upload/".$data['foto']);
$hapus = "DELETE FROM data_artikel WHERE id_artikel = '$id'";
$proses = $koneksi->query($hapus);
if ($proses){
	$_SESSION['pesan'] = 'Data Berhasil di hapus';
}
header("location:artikelmanage");
die();
?>