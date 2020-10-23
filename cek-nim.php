<?php
 // membuat koneksi
$koneksi = new mysqli("localhost","root","","alumnidata");
session_start();
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

if (isset($_GET['cek'])){
	$id = $_GET['cek'];
	$cekdata = mysqli_query($koneksi,"SELECT tmpt_lahir FROM alumni_profil WHERE nim = '$id'");
	$ada = mysqli_fetch_row($cekdata);
	if ($ada > 0 ){
		die("Data Nim Sudah Lengkap");
	}else {
		echo 'berhasil';
	}
}
?>