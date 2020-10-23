<?php
include '../inc/koneksi.php';
include 'global_header.php';
?>
<!DOCTYPE html>
<html>
<body class="hold-transition skin-yellow sidebar-mini">
	<div class="wrapper">
		<div class="content-wrapper" style="min-height: 901px;">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Tambah Data Dosen
					<small>Tambah Dosen</small>
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
					<div class="box-body">
						<form action="manage-adddosen.php" method="post" class="form-horizontal" enctype="multipart/form-data">
							<table class="table table-condensed">
								<thead>
									<th width="20%"></th>
									<th width="40%"></th>
									<th width="40%"></th>
								</thead>
								<tr>
									<td><b>Kode</b></td>
									<td>
										<input type="text" class="form-control" placeholder="Kode Dosen" name="kode">
									</td>
								</tr>
								<tr>
									<td><b>Nama Dosen</b></td>
									<td>
										<input type="text" class="form-control" placeholder="Nama Dosen" name="nama_dosen">
									</td>
								</tr>
								<tr>
									<td><b>NIP</b></td>
									<td>
										<input type="text" class="form-control" placeholder="Masukkan NIP Dosen" name="nip">
									</td>
								</tr>
								<tr>
									<td><b>NIDN</b></td>
									<td>
										<input type="text" class="form-control" placeholder="Masukkan NIDN Dosen" name="nidn">
									</td>
								</tr>
								<tr>
									<td><b>Pangkat Fungsional/Gol.</b></td>
									<td>
										<input type="text" class="form-control" placeholder="Pangkat Fungsional/Gol. Dosen" name="pangkat">
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