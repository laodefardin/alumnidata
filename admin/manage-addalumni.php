<?php
include '../inc/koneksi.php';
session_start();
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}
// melakukan pengecekan koneksi

$currentDate = gmdate('Y-m-d H:i:s', time()+60*60*8);

if (isset($_POST['tambah'])){
	$nama_lengkap = mysqli_real_escape_string($koneksi, trim($_POST['nama_lengkap']));
	$nim = mysqli_real_escape_string($koneksi, trim($_POST['nim']));
	$jk = mysqli_real_escape_string($koneksi, trim($_POST['jk']));
	$program_studi = mysqli_real_escape_string($koneksi, trim($_POST['program_studi']));
	$ipk = mysqli_real_escape_string($koneksi, trim($_POST['ipk']));
	$th_masuk = mysqli_real_escape_string($koneksi, trim($_POST['th_masuk']));
	$th_keluar = mysqli_real_escape_string($koneksi, trim($_POST['th_keluar']));
	$lamaStudi1 = mysqli_real_escape_string($koneksi, trim($_POST['lamaStudi1']));
	$lamaStudi2 = mysqli_real_escape_string($koneksi, trim($_POST['lamaStudi2']));

	if (strlen($nim) > 12 || strlen($nim) < 8 ){
		echo "<script>alert('Nim tidak boleh Kurang atau Lebih dari 10 Karakter');history.go(-1)</script>";
	}else{
		$sql2 = 'INSERT INTO alumni_profil (nama_lengkap, nim, jk, program_studi, ipk, th_masuk, th_keluar, lamaStudi1, lamaStudi2, update_status) values("'.$nama_lengkap.'","'.$nim.'","'.$jk.'","'.$program_studi.'","'.$ipk.'","'.$th_masuk.'","'.$th_keluar.'","'.$lamaStudi1.'","'.$lamaStudi2.'","'.$currentDate.'")';
		$sql1 = 'INSERT INTO user (username, password, nm_lengkap, email, level, active) values("'.$nim.'","","'.$nama_lengkap.'","","user","0")';

		$cek_user = mysqli_num_rows(mysqli_query($koneksi, "SELECT username FROM user WHERE username='$_POST[nim]'"));
		if($cek_user > 0) {
			echo "<script>alert('Nim Sudah ada yang Pakai. Ulangi Lagi');history.go(-1)</script>";
		}else{
			mysqli_query($koneksi,$sql1) or die(mysqli_error());
			$proses = $koneksi->query($sql2);
			if ($proses){
			$_SESSION['pesan'] = 'Data Berhasil di tambah';
			}
			header("location:tambahalumni");
		}		
	}
}
?>