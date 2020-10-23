<?php
include '../inc/koneksi.php';
session_start();
if ($koneksi->connect_error) {
	die("Connection failed: " . $koneksi->connect_error);
}
// melakukan pengecekan koneksi

if (isset($_POST['nip1'])){
	$nip_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nip_dosen']));
	$update = "UPDATE data_jurusan SET nip_dosen='".$nip_dosen."' WHERE id_jurusan = '1'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nip2'])){
	$nip_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nip_dosen']));
	$update = "UPDATE data_jurusan SET nip_dosen='".$nip_dosen."' WHERE id_jurusan = '2'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nip3'])){
	$nip_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nip_dosen']));
	$update = "UPDATE data_jurusan SET nip_dosen='".$nip_dosen."' WHERE id_jurusan = '3'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nip4'])){
	$nip_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nip_dosen']));
	$update = "UPDATE data_jurusan SET nip_dosen='".$nip_dosen."' WHERE id_jurusan = '4'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nip5'])){
	$nip_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nip_dosen']));
	$update = "UPDATE data_jurusan SET nip_dosen='".$nip_dosen."' WHERE id_jurusan = '5'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nip6'])){
	$nip_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nip_dosen']));
	$update = "UPDATE data_jurusan SET nip_dosen='".$nip_dosen."' WHERE id_jurusan = '6'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nama1'])){
	$nama_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nama_dosen']));
	$update = "UPDATE data_jurusan SET nama='".$nama_dosen."' WHERE id_jurusan = '1'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nama2'])){
	$nama_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nama_dosen']));
	$update = "UPDATE data_jurusan SET nama='".$nama_dosen."' WHERE id_jurusan = '2'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nama3'])){
	$nama_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nama_dosen']));
	$update = "UPDATE data_jurusan SET nama='".$nama_dosen."' WHERE id_jurusan = '3'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nama4'])){
	$nama_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nama_dosen']));
	$update = "UPDATE data_jurusan SET nama='".$nama_dosen."' WHERE id_jurusan = '4'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nama5'])){
	$nama_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nama_dosen']));
	$update = "UPDATE data_jurusan SET nama='".$nama_dosen."' WHERE id_jurusan = '5'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['nama6'])){
	$nama_dosen  = mysqli_real_escape_string($koneksi, trim($_POST['nama_dosen']));
	$update = "UPDATE data_jurusan SET nama='".$nama_dosen."' WHERE id_jurusan = '6'";
	$proses = $koneksi->query($update);
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	header("location:manage-tentang-jpte");
}

if (isset($_POST['foto1'])){
	$img = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$nama_baru = date('dmYHis').$img;
	$path = "../foto/jurusan/".$nama_baru;
	if(move_uploaded_file($tmp, $path)){
		$fotolama = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '1'");
		$data = mysqli_fetch_array($fotolama);
		if (is_file("../foto/jurusan/".$data['foto']))
			unlink("../foto/jurusan/".$data['foto']);
		$update = "UPDATE data_jurusan SET foto='".$nama_baru."' WHERE id_jurusan = '1'";
		mysqli_query($koneksi,$update) or die(mysql_error());
		$_SESSION['pesan'] = 'Foto Berhasil Di Update';
		header("location:manage-tentang-jpte");
	}
}

if (isset($_POST['foto2'])){
	$img = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$nama_baru = date('dmYHis').$img;
	$path = "../foto/jurusan/".$nama_baru;
	if(move_uploaded_file($tmp, $path)){
		$fotolama = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '2'");
		$data = mysqli_fetch_array($fotolama);
		if (is_file("../foto/jurusan/".$data['foto']))
			unlink("../foto/jurusan/".$data['foto']);
		$update = "UPDATE data_jurusan SET foto='".$nama_baru."' WHERE id_jurusan = '2'";
		mysqli_query($koneksi,$update) or die(mysql_error());
		$_SESSION['pesan'] = 'Foto Berhasil Di Update';
		header("location:manage-tentang-jpte");
	}
}

if (isset($_POST['foto3'])){
	$img = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$nama_baru = date('dmYHis').$img;
	$path = "../foto/jurusan/".$nama_baru;
	if(move_uploaded_file($tmp, $path)){
		$fotolama = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '3'");
		$data = mysqli_fetch_array($fotolama);
		if (is_file("../foto/jurusan/".$data['foto']))
			unlink("../foto/jurusan/".$data['foto']);
		$update = "UPDATE data_jurusan SET foto='".$nama_baru."' WHERE id_jurusan = '3'";
		mysqli_query($koneksi,$update) or die(mysql_error());
		$_SESSION['pesan'] = 'Foto Berhasil Di Update';
		header("location:manage-tentang-jpte");
	}
}

if (isset($_POST['foto4'])){
	$img = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$nama_baru = date('dmYHis').$img;
	$path = "../foto/jurusan/".$nama_baru;
	if(move_uploaded_file($tmp, $path)){
		$fotolama = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '4'");
		$data = mysqli_fetch_array($fotolama);
		if (is_file("../foto/jurusan/".$data['foto']))
			unlink("../foto/jurusan/".$data['foto']);
		$update = "UPDATE data_jurusan SET foto='".$nama_baru."' WHERE id_jurusan = '4'";
		mysqli_query($koneksi,$update) or die(mysql_error());
		$_SESSION['pesan'] = 'Foto Berhasil Di Update';
		header("location:manage-tentang-jpte");
	}
}

if (isset($_POST['foto5'])){
	$img = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$nama_baru = date('dmYHis').$img;
	$path = "../foto/jurusan/".$nama_baru;
	if(move_uploaded_file($tmp, $path)){
		$fotolama = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '5'");
		$data = mysqli_fetch_array($fotolama);
		if (is_file("../foto/jurusan/".$data['foto']))
			unlink("../foto/jurusan/".$data['foto']);
		$update = "UPDATE data_jurusan SET foto='".$nama_baru."' WHERE id_jurusan = '5'";
		mysqli_query($koneksi,$update) or die(mysql_error());
		$_SESSION['pesan'] = 'Foto Berhasil Di Update';
		header("location:manage-tentang-jpte");
	}
}

if (isset($_POST['foto6'])){
	$img = $_FILES['foto']['name'];
	$tmp = $_FILES['foto']['tmp_name'];

	$nama_baru = date('dmYHis').$img;
	$path = "../foto/jurusan/".$nama_baru;
	if(move_uploaded_file($tmp, $path)){
		$fotolama = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '6'");
		$data = mysqli_fetch_array($fotolama);
		if (is_file("../foto/jurusan/".$data['foto']))
			unlink("../foto/jurusan/".$data['foto']);
		$update = "UPDATE data_jurusan SET foto='".$nama_baru."' WHERE id_jurusan = '6'";
		mysqli_query($koneksi,$update) or die(mysql_error());
		$_SESSION['pesan'] = 'Foto Berhasil Di Update';
		header("location:manage-tentang-jpte");
	}
}
?>

