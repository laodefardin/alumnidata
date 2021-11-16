<?php
session_start();

include 'inc/koneksi.php';
$data_id = $_SESSION['data_id'];
$currentDate = gmdate('Y-m-d H:i:s', time()+60*60*8);

$ubah = "UPDATE user set last_login = '$currentDate' WHERE id_user = '$data_id'";
$proses = $koneksi->query($ubah) or die(mysql_error());

//hapus session
session_destroy(); //menghapus session
unset($_SESSION["username"]);
unset($_SESSION["data_id"]);

header('location:index'); //redirect ke halaman login
?>