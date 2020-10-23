<?php
// Load file koneksi.php
 // membuat koneksi
include '../inc/koneksi.php';
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

$id = $_GET['id'];

$query = "SELECT * FROM data_slide WHERE id_slide ='".$id."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
// Cek apakah file fotonya ada di folder images
if(is_file("../slide/".$data['gambar'])) // Jika foto ada
  unlink("../slide/".$data['gambar']);
$hapus = "DELETE FROM data_slide WHERE id_slide = '$id'";
$proses = $koneksi->query($hapus);
if ($proses){
	$_SESSION['pesan'] = 'Data Berhasil di hapus';
}
header("location:slidemanage");
die();
?>