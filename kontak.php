<?php
include 'inc/koneksi.php';
include 'global_header.php';
?>

<div class="content-wrapper" style="min-height: 901px;">
<div class="container ua-sigle-article no-padding">
	<div class="img-paralax">
		<div class="container">
			<div class="paralax-title">
				Kontak dan Saran
			</div>
		</div>
	</div>

	
		<section class="content">
			
			<div class="row">
				<div class="col-md-12">
					<h3><b>Kontak Langsung</b></h3>
					<h4>Untuk info lebih lanjut silahkan hubungi kami.</h4>
				</div>
<center><h4>
Program Pascasarjana UNM <br>
Jl. Bonto Langkasa, Makassar - 90222 <br>
Telepon / SMS / WA : -  <br>
Email : alumnipascasarjanaunm@gmail.com <p></p>
<em> Buka dan melayani pada saat jam kerja</em> <br>
</h4>
</center>
			</div>
			<div class="row">
				<div class="col-md-12">
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
<h4>
<strong>Formulir Kontak</strong><p></p>
Atau anda juga bisa langsung mengirimkan pesan kepada kami melalui form dibawah ini:<br>
<br>
<strong>Data Anda</strong><p></p>
Silahkan isi form dibawah agar kami bisa segera menghubungi anda.<br>
</h4>

					<form method="post" action="send.php" enctype="multipart/form-data" class="form-horizontal">
						<div class="form-group">
							<label class="col-sm-2">Nama Anda</label>
							<div class="col-sm-4">
								<input name="nama" type="text" class="form-control" placeholder="Nama" required>
							</div>
							<label class="col-sm-2 control-label">No Telepon</label>
							<div class="col-sm-4">
								<input name="telp" type="text" class="form-control" placeholder="No telepon anda" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2">NIM Anda</label>
							<div class="col-sm-4">
								<input name="nim" type="text" class="form-control" placeholder="Nim Anda" required>
							</div>
							<label class="col-sm-2 control-label">Email Address</label>
							<div class="col-sm-4">
								<input name="usermail" type="text" class="form-control" placeholder="Email" required>
							</div>
						</div>

<h4>
<strong>Apa yang bisa kami bantu?</strong><p></p>
Jika anda ingin bertanya ataupun melakukan pendaftaran silahkan isi kolom dibawah.<br>
<br>
</h4>
						<!-- <div class="form-group">
							<label class="col-sm-2">Subjek yang ditanyakan</label>
							<div class="col-sm-5">
								<input name="subject" type="text" class="form-control" placeholder="Tulis subject" required>
							</div>
						</div> -->
						<div class="form-group">
							<label class="col-sm-2">Pertanyaan / Pendaftaran</label>
							<div class="col-sm-10">
								<textarea name="pesan" rows="10" class="form-control" placeholder="Pertanyaan anda" required></textarea>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2"></label>
							<div class="col-sm-2 col-sm-9">
								<button type="submit" class="btn btn-danger btn-lg">Kirim</button>
							</div>
						</div>
					</form>
				</div>

		</section>
		<!-- /.content -->
		<!-- /.content -->
	</div></div>

	<?php
	include 'global_footer.php';
	?>
