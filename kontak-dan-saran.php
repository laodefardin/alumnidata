<?php
include 'inc/koneksi.php';
include 'global_header.php';
?>

<div class="content-wrapper" style="min-height: 901px;">
	<div class="img-paralax">
		<div class="container">
			<div class="paralax-title">
				Kritik dan Saran
			</div>
		</div>
	</div>

	<div class="container ua-sigle-article no-padding">
		<section class="content">
			
			<div class="box-header">
				<div class="box-title">
					<p><h3><b>Kontak Dan Saran</b></h3></p>
					<h4>Kami sangat menghargai kritik & saran yang membangun untuk kemajuan Aplikasi Data Alumni.
					Silakan isi form di bawah dan manajemen akan segera merespon maksimal 1 x 24 jam</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7">
					<?php 
    //menampilkan pesan jika ada pesan
					if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
      // echo '<div class="pesan">'.$_SESSION['pesan'].'</div>';

						echo '<div class="pesan">
						<div class="callout callout-warning" role="alert">'.$_SESSION['pesan'].'</div></div>';
      // echo '<div class="alert alert-success fade in">
      // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_SESSION['pesan'].'
      // </div>';
					}
    //mengatur session pesan menjadi kosong
					$_SESSION['pesan'] = '';
					?>
					<form method="post" action="kirim.php" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-3 control-label">Nama Anda</label>
							<div class="col-sm-9">
								<input name="nama" type="text" class="form-control" placeholder="Nama" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Nim Anda</label>
							<div class="col-sm-9">
								<input name="nim" type="text" class="form-control" placeholder="Nim Anda" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Email Anda</label>
							<div class="col-sm-9">
								<input name="usermail" class="form-control" placeholder="Email" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-3 control-label">Subjek</label>
							<div class="col-sm-9">
								<input name="subject" type="text" class="form-control" placeholder="Tulis subject" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Pesan</label>
							<div class="col-sm-9">
								<textarea name="pesan" rows="10" class="form-control" placeholder="Kritik / Saran" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-9">
								<button type="submit" class="btn btn-danger btn-lg">Kirim</button>
							</div>
						</div>
					</form>
				</div>

			<div class="col-md-4">
					<div class="contact-block">
						<h4>Call us</h4>
						<h4>
							&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i> Elektro FT UNM:
							<span class="value">Telp. (0411) 889629</span>
						</h4>										
					</div>
					<div class="contact-block">
						<h4>Email Us</h4>
						<h4>
							&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i> Project Support:
							<span class="value">laodemuhzulfardinsyah@gmail.com</span>
						</h4>
					</div>
					<div class="contact-block">
						<h4>Address</h4>
						<h4>
							&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-location-arrow"></i> 
							<span class="value">Daeng Tata Raya Parangtambung Makassar</span>
						</h4>
					</div>
			
				</div>
			</div>

		</section>
		<!-- /.content -->
		<!-- /.content -->
	</div></div>

	<?php
	include 'global_footer.php';
	?>
