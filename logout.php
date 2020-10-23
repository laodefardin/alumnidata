<?php
 // membuat koneksi
include 'inc/koneksi.php';
session_start();
// melakukan pengecekan koneksi
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}
$data_id = $_SESSION['data_id'];
$currentDate = gmdate('Y-m-d H:i:s', time()+60*60*8);

$ubah = "UPDATE user set last_login = '$currentDate' WHERE id_user = '$data_id'";
$proses = $koneksi->query($ubah) or die(mysql_error());

session_destroy(); //menghapus session
unset($_SESSION['username']);
unset($_SESSION['data_id']);
header('location:index'); //redirect ke halaman login
?>