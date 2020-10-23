<?php
include '../inc/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SiAlumni JPTE Universitas Negeri Makassar</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="../assets/css/AdminLTE.css">
	<link rel="stylesheet" href="../assets/css/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="../assets/css/pace.min.css">
	<link rel="stylesheet" href="../assets/css/jquery.dataTables1.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="../assets/css/_all-skins.css">
<link rel="shortcut icon" href="../assets/favicon.ico">
  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style type="text/css">
/* Ensure that the demo table scrolls */
th, td { white-space: nowrap; }
div.dataTables_wrapper {
	width: 1070px;
	margin: 0 auto;
}

th input {
	width: 100%;
}
</style>
<body class="hold-transition skin-yellow sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="index" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>Si</b>A</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>SiAlumni</b> JPTE UNM</span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Toggle navigation</span>
				</a>
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"> <i class="fa fa-user fa-fw"></i> <?=$_SESSION['nm_lengkap']?> <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="ubah-password">Ubah Password</a></li>
								<li class="divider"></li>
								<li><a href="../logout.php">logout</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>

		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="../foto/admin.jpg" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<?php 
						$user = $_SESSION['username'];
						$nama = $_SESSION['nm_lengkap'];
            if (empty($user)){ // jika belum login maka akan di kembalikan ke page login.php
            	echo "<script>alert('Maaf anda harus login dulu!');window.location= '../login'; </script>";
            }

          //jika akun berlevel "user" mengakses page admin
            $query = $koneksi->query("SELECT * FROM user WHERE username = '$user' ");
            $row   = $query->fetch_array();

            if ($row['level'] == "user"){
            	echo "<script> alert('anda tidak memiliki akses untuk halaman ini!');window.location= '../user/index';</script>";
            }
            ?>  
            <p></i><?=$_SESSION['nm_lengkap']?></p>
            <a href="#"><i class="fa fa-circle text-success"></i><?=$_SESSION['username']?></a>
            
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
         <li class="header">MAIN NAVIGATION</li>

         <li class="treeview">
          <a href="#">
           <i class="fa fa-dashboard"></i>
           <span>Master </span>
           <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <li><a href="manage-tentang-jpte"><i class="fa fa-circle-o"></i> <span>Tentang JPTE</span></a></li>
         <li><a href="manage-dosen-jpte"><i class="fa fa-circle-o"></i> <span>Dosen JPTE</span></a></li>
         <li><a href="galerymanage"><i class="fa fa-circle-o"></i> Manage Galery</a></li>
         <li><a href="slidemanage"><i class="fa fa-circle-o"></i> Manage Slide</a></li>
       </ul>
     </li>

     <li class="active treeview">
      <a href="#">
       <i class="menu-icon fa fa-user"></i>
       <span>Alumni </span>
       <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
     <li><a href="alumni-data"><i class="fa fa-circle-o"></i> Data Alumni</a></li>
     <li><a href="usermanage"><i class="fa fa-circle-o"></i> Manajemen User</a></li>
     <li><a href="lowongan-kerja-manage"><i class="fa fa-circle-o"></i> Lowongan Kerja</a></li>
     <li><a href="pesan-kesan-manage"><i class="fa fa-circle-o"></i> Pesan & Kesan Alumni</a></li>
     <li><a href="laporan-alumni"><i class="fa fa-circle-o"></i> Laporan Alumni</a></li>
     <li><a href="statistik"><i class="fa fa-circle-o"></i> Statistik</a></li>
   </ul>
 </li>

 <li><a href="artikelmanage"><i class="fa fa-pencil-square-o"></i> Artikel</a></li>

 <li class="active treeview">
  <a href="#">
   <i class="menu-icon fa fa-wrench"></i>
   <span>Pengaturan </span>
   <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">

 <li><a href="ubah-password"><i class="fa fa-circle-o"></i> Ubah Password</a></li>
</ul>
</li>


</section>
<!-- /.sidebar -->
</aside>
<div class="content-wrapper" style="min-height: 901px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Tambah Data Alumni
			<small>Tambah Alumni</small>
		</h1>
	</section>

	<section class="content">
		<?php 
    //menampilkan pesan jika ada pesan
		if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
      // echo '<div class="pesan">'.$_SESSION['pesan'].'</div>';

			echo '<div class="pesan">
			<div class="alert alert-success" role="alert">'.$_SESSION['pesan'].'</div></div>';
      // echo '<div class="alert alert-success fade in">
      // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_SESSION['pesan'].'
      // </div>';
		}
    //mengatur session pesan menjadi kosong
		$_SESSION['pesan'] = '';
		?>
		<div class="box box-warning">
			<div class="box-header">
				<div class="box-title"><h4>Tambah Alumni Alumni</h4></div>
			</div>
			<div class="box-body">
				<form action="manage-addalumni.php" method="post" class="form-horizontal" enctype="multipart/form-data">
					<table class="table table-condensed">
						<thead>
							<th width="20%"></th>
							<th width="40%"></th>
							<th width="40%"></th>
						</thead>
						<tr>
							<td><b>Nama Mahasiswa</b></td>
							<td>
								<input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama_lengkap">
							</td>
						</tr>
						<tr>
							<td><b>Nim Mahasiswa</b></td>
							<td>
								<input type="text" maxlength="10" class="form-control" placeholder="Masukkan Nomor Induk Mahasiswa" name="nim" onkeypress="return hanyaAngka(event)">
							</td>
						</tr>
						<script>
							function hanyaAngka(evt) {
								var charCode = (evt.which) ? evt.which : event.keyCode
								if (charCode > 31 && (charCode < 48 || charCode > 57))
									return false;
								return true;
							}
						</script>
						<tr>
							<td><b>Jenis Kelamin</b></td>
							<td>
								<select class="form-control select2" name="jk" style="width: 100%;">
									<option selected="selected" disabled="disabled"> Pilih Jenis Kelamin</option>
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>Program Studi</b></td>
							<td>
								<select class="form-control select2" name="program_studi" style="width: 100%;">
									<option selected="selected" disabled="disabled"> Pilih Program Studi</option>
									<option value="Pendidikan Teknik Elektro (S1)">Pendidikan Teknik Elektro (S1)</option>
									<option value="Teknik Elektro (D3)">Teknik Elektro (D3)</option>
									<option value="Pendidikan Teknik Informatika Dan Komputer (S1)">Pendidikan Teknik Informatika Dan Komputer (S1)</option>
								</select>
							</td>
						</tr>
						<tr>
							<td><b>IPK</b></td>
							<td>
								<input type="text" class="form-control" placeholder="Masukkan IPK Anda - Contoh 3.45" name="ipk">
							</td>
						</tr>
						<tr>
							<td><b>Tahun Masuk</b></td>
							<td>
								<input type="text" class="form-control" placeholder="Tahun Masuk Mahasiswa" name="th_masuk">
							</td>
						</tr>
						<tr>
							<td><b>Tahun Lulus</b></td>
							<td>
								<input type="text" class="form-control" placeholder="Tahun Keluar Mahasiswa" name="th_keluar">
							</td>
						</tr>

						<tr>
							<td><b>Lama Studi</b></td>
							<td>
								<select name="lamaStudi1" class="form-control">
									<option value=""></option>
									<option value="1 Tahun">1 Tahun</option>
									<option value="2 Tahun">2 Tahun</option>
									<option value="3 Tahun">3 Tahun</option>
									<option value="4 Tahun">4 Tahun</option>
									<option value="5 Tahun">5 Tahun</option>
									<option value="6 Tahun">6 Tahun</option>
									<option value="7 Tahun">7 Tahun</option>
									<option value="8 Tahun">8 Tahun</option>
								</select>
							</td>
							<td>
								<select name="lamaStudi2" class="form-control">
									<option value=""></option>
									<option value="1 Bulan">1 Bulan</option>
									<option value="2 Bulan">2 Bulan</option>
									<option value="3 Bulan">3 Bulan</option>
									<option value="4 Bulan">4 Bulan</option>
									<option value="5 Bulan">5 Bulan</option>
									<option value="6 Bulan">6 Bulan</option>
									<option value="7 Bulan">7 Bulan</option>
									<option value="8 Bulan">8 Bulan</option>
									<option value="9 Bulan">9 Bulan</option>
									<option value="10 Bulan">10 Bulan</option>
									<option value="11 Bulan">11 Bulan</option>
									<option value="12 Bulan">12 Bulan</option>
								</select>
							</td>
						</tr>

						<tr>
							<td>&nbsp;</td>
							<td></td>
						</tr>
					</table>


					<div class="row">
						<div class="col-xs-8">

						</div>
						<!-- /.col -->
						<div class="col-xs-4">
							<button type="submit" value="add" name="tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
							<input class="btn btn-danger" type="reset" value="Reset">
							<a class="btn btn-primary" onclick="self.history.back()"> <i class="fa fa-arrow-left"></i>  Kembali</a>
							</td>
						</div>
						<!-- /.col -->
					</div>
				</form>
			</div>
		</div>

	</div> <!-- content-wrapper -->
</section> <!-- content -->
<?php
include 'global_footer.php';
?>