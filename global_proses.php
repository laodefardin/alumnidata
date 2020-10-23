<?php
 // membuat koneksi
include 'inc/koneksi.php';
session_start();
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}

if($_POST['submit']){
	$id = $_POST['id'];
	$password = $_POST['password'];

	$update = $koneksi->query("UPDATE user SET password='$password' WHERE id_user = $id' ");
	$proses = $koneksi->query($update);
	if ($proses){
		$_SESSION['pesan'] = 'Password berhasil diubah';
	}
	header("location:usermanage");
}


// if ($aksi == "hapus_alumni"){
// 	$id = $_POST["id_user"];

// 	$hapus = "DELETE a.*,b.* FROM alumni_profil a JOIN user b ON a.id_user = b.id_user WHERE a.id_user = '$id'";
// 	$proses = $koneksi->query($hapus);

// 	if ($proses){
// 		$_SESSION['pesan'] = 'Data Berhasil di hapus';
// 	}
// 	header("location:admin/usermanage");
// 	die();	
// }

// if ($aksi == "non_aktifkan") {
// 	$id = $_POST["id_user"];
// 	$ubah = "UPDATE user set active = 0 WHERE id_user = '$id'";
// 	$proses = $koneksi->query($ubah);
// 		if ($proses){
// 		$_SESSION['pesan'] = 'User Berhasil di Non-Aktifkan';
// 	}
// 	header("location:admin/usermanage");
// }

// elseif ($aksi == "aktifkan") {
// 	$id = $_POST["id_user"];
// 	$ubah = "UPDATE user set active = 1 WHERE id_user = '$id'";
// 	$proses = $koneksi->query($ubah);
// 		if ($proses){
// 		$_SESSION['pesan'] = 'Data Berhasil di Aktifkan';
// 	}
// 	header("location:admin/usermanage");
// }

// elseif ($aksi == "admin") {
// 	$id = $_POST["id_user"];
// 	echo $ubah = "UPDATE user set level = 'admin' WHERE id_user = '$id'";
// 	$proses = $koneksi->query($ubah);
// 		if ($proses){
// 		$_SESSION['pesan'] = 'Data Berhasil di ubah Menjadi Admin';
// 	}
// 	header("location:admin/usermanage");
// }

// elseif ($aksi == "member") {
// 	$id = $_POST["id_user"];
// 	echo $ubah = "UPDATE user set level = 'user' WHERE id_user = '$id'";
// 	$proses = $koneksi->query($ubah);
// 		if ($proses){
// 		$_SESSION['pesan'] = 'Data Berhasil di ubah menjadi Member';
// 	}
// 	header("location:admin/usermanage");
// }

// if ($_GET['act'] == 'aktif') {
// $id = $_POST["id_user"];
// 	$ubah = "UPDATE user set active = 1 WHERE id_user = '$id'";
// 	$proses = $koneksi->query($ubah);
// 	header("location:admin/usermanage");
// }
// if ($_GET['act'] == 'nonaktif') {
// $id = $_POST["id_user"];
// 	$ubah = "UPDATE user set active = 0 WHERE id_user = '$id'";
// 	$proses = $koneksi->query($ubah);
// 	header("location:admin/usermanage");
// }
	?>