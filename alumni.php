<?php
include 'inc/koneksi.php';
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
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="assets/css/AdminLTE.css">
	<link rel="shortcut icon" href="assets/favicon.ico">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  	folder instead of downloading all of them to reduce the load. -->
  	<link rel="stylesheet" href="assets/css/_all-skins.css">
<!--   	<link rel="stylesheet" href="assets/css/dataTables.bootstrap.css"> -->
<!--   	<link rel="stylesheet" href="assets/css/daterangepicker.css">
  	<link rel="stylesheet" href="assets/css/datepicker3.css"> -->
  	<link rel="stylesheet" href="assets/css/tambahan.css">
  	<link rel="stylesheet" href="assets/css/ekko-lightbox.css">

  	<!-- SLIDER OWL CAROUSEL -->
<!--   	<link rel="stylesheet" href="assets/css/owl.carousel.css">
  	<link rel="stylesheet" href="assets/css/owl.theme.default.css">
  	<link rel="stylesheet" href="assets/css/owl.theme.green.css"> -->
  	<!-- <link rel="stylesheet" href="assets/css/jquery.dataTables1.min.css"> -->
  	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

  	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<style type="text/css">
#loading-status{
	position:fixed;
	top:40%;
	right:40%;
	background-color:#FFF;
	border:3px solid #000;
	padding:5px 7px;
	border-radius:5px;
	-moz-border-radius: 5px; 
	-webkit-border-radius: 5px;
	z-index:3000;
	display:none;
}

.meta-post {
	margin-bottom: -9px;
	margin-top: -13px;
}
.detail {
	margin-top: 9px;
	font-size: 13px;
}
@media (max-width: 767px){
	.tum {
		display: none;
	}

	.detail-post{
		font-size: 17px;
		line-height: 22px;
		padding-top: 30px;
	}
</style>
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
</head>

<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-yellow layout-top-nav">
	<div class="wrapper">

		<header class="main-header">
			<nav class="navbar navbar-static-top" style="background-color: #444;">
				<div class="container">
					<div class="navbar-header">
						<a href="index" class="navbar-brand">
							<img src="assets/logo1.png" style="
							margin-top: -13px;
							height: 45px;
							width: 320px;
							display: block;
							"></a>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
								<i class="fa fa-bars"></i>
							</button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
							<ul class="nav navbar-nav">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Alumni <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li><a href="alumni">Database Alumni</a></li>
										<li><a href="panduan-pendaftaran">Panduan</a></li>
										<li><a href="registrasi-alumni">Pendaftaran Alumni</a></li>
										<li class="divider"></li>
										<li><a href="pesan-kesan-alumni">Pesan Dan Kesan Alumni</a></li>
									</ul>
								</li>

								<li><a href="login">Login</a></li>
								<li><a href="berita">Berita</a></li>
								<li><a href="lowongan-kerja">Lowongan Kerja</a></li>
								<li><a href="galeri-alumni">Galeri</a></li>
								<li><a href="kontak-dan-saran">Kontak & Saran</a></li>
								<li><a href="tentang-jpte">Tentang JPTE UNM</a></li>


							</ul>
						</div>
					</div>
					<!-- /.container-fluid -->
				</nav>
			</header>
			<!-- Full Width Column -->

			<div class="content-wrapper" style="min-height: 901px;">
				<div class="img-paralax hidden-xs">
					<div class="container">
						<div class="paralax-title">
							Daftar Alumni
						</div>
					</div>
				</div>
				<div class="container">
					<!-- Content Header (Page header) -->
					<section class="content-header">
					</section>

					<section class="content">
						<div class="box box-warning">
							<div class="box-header">
								<div class="box-title"><h4>Daftar Alumni Fakultas Teknik Jurusan Pendidikan Teknik Elektro Yang Sudah Registrasi</h4></div>
							</div>
							<div class="box-body table-responsive">
								<table id="example" class="table table-striped table-bordered" style="width:100%">
									<thead class="bg-yellow">
										<tr>
										<th style="width:  10px;">No</th>
										<th>Nim</th>
										<th>Nama Lengkap</th>
										<th>Program Studi</th>
										<th>Tahun Masuk</th>
										<th>Tahun Keluar</th>
										<th>Menu</th>
									</tr>
								</thead>

								<tbody>
									<?php
									$result = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN user ON user.id_user = alumni_profil.id_user WHERE level = 'user' AND active = '1'");

									$no=0; foreach ($result as $data): $no++         
									?>
									<tr>
										<td><?php echo $no;?></td>
										<td><?php echo $data['nim']; ?></a></td>
										<td><?php echo $data['nama_lengkap']; ?></td>
										<td><?php echo $data['program_studi']; ?></td>
										<td><?php echo $data['th_masuk']; ?></td>
										<td><?php echo $data['th_keluar']; ?></td>
										<td><a href="profil.php?id_profil=<?php echo $data['id_user'];?>" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-th-list"></span> Detail</a></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nim</th>
									<th>Nama Lengkap</th>
									<th>Program Studi</th>
									<th>Tahun Masuk</th>
									<th>Tahun Keluar</th>
									<th>Menu</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
							</div>
							<div class="modal-body">
							</div>
							<div class="modal-footer">
							</div>
						</div>
					</div>
				</div>

			</section>
			<!-- /.content -->
			<!-- /.content -->
		</div></div>

		<footer class="main-footer">
			<div class="container">
				<div class="pull-right hidden-xs">
					<b>Design By</b> Laode Muh. ZulFardinsyah
				</div>
				<strong>Copyright &copy; 2018 <a href=""> SiALUMNI JPTE </a> Universitas Negeri Makassar. </strong>
			</footer>
		</div>
		<!-- ./wrapper -->

		<!-- jQuery 2.2.3 -->
		<script src="assets/js/jquery-2.2.3.min.js"></script>
		<!-- Bootstrap 3.3.6 -->
		<script src="assets/js/bootstrap.min.js"></script>
		<!-- SlimScroll -->
		<script src="assets/js/jquery.slimscroll.min.js"></script>
		<!-- FastClick -->
		<script src="assets/js/fastclick.js"></script>
		<!-- AdminLTE App -->
		<script src="assets/js/app.min.js"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="assets/js/demo.js"></script>
		<script src="assets/js/ekko-lightbox.js"></script>
		<script src="assets/js/bootstrap-datepicker.js"></script>
		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/dataTables.bootstrap.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
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
	$(document).on('click', '[data-toggle="lightbox"]', function(event) {
		event.preventDefault();
		$(this).ekkoLightbox();
	});
</script>
<script src="assets/js/owl.carousel.js"></script>
<script>
	$('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		responsiveClass:true,
		responsive:{
			0:{
				items:1,
				nav:true
			},
			600:{
				items:3,
				nav:false
			},
			1000:{
				items:5,
				nav:true,
				loop:false
			}
		}
	})
</script>
<script language="javascript">
	$('body').on('hidden.bs.modal', '.modal', function () {
		$(this).removeData('bs.modal');
	});
</script>
</body>
</html>