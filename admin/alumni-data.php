<?php
include '../inc/koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Portal Alumni PPs Universitas Negeri Makassar</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.css">
  <link rel="stylesheet" href="../assets/css/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="../assets/css/pace.min.css">
  <link rel="shortcut icon" href="../assets/favicon.ico">
  <!-- 	<link rel="stylesheet" href="../assets/css/jquery.dataTables1.min.css"> -->
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="../assets/css/_all-skins.css">

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
	/* width: 1070px; */
	margin: 0 auto;
}

th input {
	width: 100%;
}
</style>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="index" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels -->
				<span class="logo-mini"><b>Si</b>A</span>
				<!-- logo for regular state and mobile devices -->
				<span class="logo-lg"><b>Portal Alumni</b> PPs UNM</span>
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

         <li class="active treeview">
          <a href="#">
           <i class="fa fa-dashboard"></i>
           <span>Master </span>
           <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
         <!-- <li><a href="manage-tentang-pps"><i class="fa fa-circle-o"></i> <span>Tentang PPs</span></a></li>
         <li><a href="manage-dosen-pps"><i class="fa fa-circle-o"></i> <span>Dosen PPs</span></a></li>
         <li><a href="galerymanage"><i class="fa fa-circle-o"></i> Manage Galery</a></li> -->
         <li><a href="slidemanage"><i class="fa fa-circle-o"></i> Manage Slide</a></li>
         <li><a href="artikelmanage"><i class="fa fa-pencil-square-o"></i> Artikel</a></li>
         <li><a href="ubah-password"><i class="fa fa-circle-o"></i> Ubah Password</a></li>
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


</li>


</section>
<!-- /.sidebar -->
</aside>

<div class="content-wrapper" style="min-height: 501px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Daftar Alumni 
      <small>Pascasarjana Universitas Negeri Makassar </small>
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
      <div class="box-title"><h4>Alumni Pascasarjana Universitas Negeri Makassar</h4></div>
      <a style="text-align: right;" class="btn bg-green btn-sm pull-right" href="tambahalumni"> <i class="fa fa-plus"></i>  Tambah Alumni</a>
    </div>
    <div class="box-body table-responsive">
      <table id="example" class="table table-striped table-bordered" style="width:100%">
       <thead class="bg-green">
        <tr>
         <th>Aksi</th>
         <th>Status</th>
         <th>No</th>
         <th>Nama Lengkap</th>
         <th>Nim</th>
         <th>Jenis Kelamin</th>
         <th>Program Studi</th>
         <th>Thn Masuk</th>
         <th>Thn Lulus</th>
         <th>Lama Studi</th>
         <th>IPK</th>
       </tr>
     </thead>

     <tbody>
      <?php

      //  $result = mysqli_query($koneksi, "SELECT alumni_profil.*, user.active, user.level FROM alumni_profil LEFT OUTER JOIN user ON alumni_profil.id_user = user.id_user WHERE level = 'user'  ORDER BY update_status DESC");

      // $result = mysqli_query($koneksi, "SELECT alumni_profil.nama_lengkap, alumni_profil.nim, alumni_profil.jk, alumni_profil.program_studi, alumni_profil.ipk, alumni_profil.th_masuk, alumni_profil.th_keluar, user.active FROM user INNER JOIN alumni_profil ON alumni_profil.id_user = user.id_user");
      
      $result = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN user ON user.id_user = alumni_profil.id_user WHERE level = 'user'  ORDER BY update_status DESC");
      $no=0; foreach ($result as $data): $no++         
      ?>
      <tr>

        <td>
          <a href="profil.php?id=<?php echo $data['id_user']; ?>" class="btn btn-primary btn-xs">Detail</a>
          <a href="edit-alumni.php?id=<?php echo $data['id_user']; ?>" class="btn btn-warning btn-xs"><i class="fa  fa-pencil-square-o"></i></a>
          <a href="manage-hapus.php?hapus=<?php echo $data['id_user']?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
        </td>
        <td>
         <?php
         $level = $data["active"];
         if($level==='1'){?>
          <span class='label bg-green'>Aktif</span>
        <?php } else {?>
          <span class='label bg-yellow'>Belum Aktif</span>
        <?php };?>
      </td>
      <td><?php echo $no;?></td>
      <td><?php echo $data['nama_lengkap']; ?></td>
      <td><?php echo $data['nim']; ?></a></td>
      <td><?php echo $data['jk']; ?></a></td>
      <td><?php echo $data['program_studi']; ?></td>
      <td><?php echo $data['th_masuk']; ?></td>
      <td><?php echo $data['th_keluar']; ?></td>
      <td><?php echo $data['lamaStudi1']; ?> <?php echo $data['lamaStudi2']; ?></td>
      <td><?php echo $data['ipk']; ?></td>
    </tr>
  <?php endforeach; ?>
</tbody>
<tfoot>
 <tr>
  <th>Aksi</th>
  <th>Status</th>
  <th>No</th>
  <th>Nama Lengkap</th>
  <th>Nim</th>
  <th>Jenis Kelamin</th>
  <th>Program Studi</th>
  <th>Thn Masuk</th>
  <th>Thn Lulus</th>
  <th>Lama Studi</th>
  <th>IPK</th>
</tr>
</tfoot>
</table>
</div>
</div>
</section>

</div>

<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<!-- <b>Design By</b> L.F -->
	</div>
	<strong><center>Copyright &copy; 2021 <a href=""> Portal Alumni Pascasarjana </a> Universitas Negeri Makassar. </center></strong>
</footer>

<!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  	immediately after the control sidebar -->
  	<div class="control-sidebar-bg"></div>
  </div>

  <script src="../assets/js/jquery-2.2.3.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>

   <script src="../assets/js/Chart.min.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
  <script src="../assets/js/fastclick.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/js/demo.js"></script>
  <script src="../assets/js/jquery.dataTables.min.js"></script>
  <script src="../assets/js/dataTables.bootstrap.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
  <script src="../assets/js/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="../assets/js/pace.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>


<!--   <script>
  	$(function () {
  		$("#example1").DataTable();
  		$('#example2').DataTable({

  		});
  	});
  </script> -->
  <script>
    $(document).ready(function() {
    // Setup - add a text input to each footer cell
    $('#example tfoot th').each( function () {
      var title = $(this).text();
      $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
    
    // DataTable
    var table = $('#example').DataTable();
    
    // Apply the search
    table.columns().every( function () {
      var that = this;
      
      $( 'input', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
          that
          .search( this.value )
          .draw();
        }
      } );
    } );
  } );
</script>
<script>
//            angka 500 dibawah ini artinya pesan akan muncul dalam 0,5 detik setelah document ready
$(document).ready(function(){setTimeout(function(){$(".pesan").fadeIn('slow');}, 500);});
//            angka 3000 dibawah ini artinya pesan akan hilang dalam 3 detik setelah muncul
setTimeout(function(){$(".pesan").fadeOut('slow');}, 3000);
</script>
<script>
	$(function () {
		$(".textarea").wysihtml5();
	});
</script>
<!-- <script type="text/javascript">
  // To make Pace works on Ajax calls
  $(document).ajaxStart(function() { Pace.restart(); });
  $('.ajax').click(function(){
  	$.ajax({url: '#', success: function(result){
  		$('.ajax-content').html('<hr>Ajax Request Completed !');
  	}});
  });
</script> -->
</body>
</html>