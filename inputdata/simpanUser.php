<?php
include '../inc/koneksi.php';
session_start();
$nim = $_SESSION['nim'];
$pwd = md5($_POST['pwd']);
$nama= $_POST['nama'];
echo "UPDATE `user` SET password = '$pwd', nm_lengkap = '$nama', active = '1' WHERE `nim` = '$nim'";
if($nim !==''){
    $koneksi->query("UPDATE `user` SET password = '$pwd', nm_lengkap = '$nama', active = '1'
    WHERE `username` = '$nim'");
}

//header('location:login');
?>