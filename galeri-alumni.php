<?php
include 'inc/koneksi.php';
include 'global_header.php';
?>

<div class="content-wrapper" style="min-height: 901px;">
	<div class="img-paralax">
		<div class="container">
			<div class="paralax-title">
				Galeri Alumni Pascasarjana
			</div>
		</div>
	</div>

	<div class="container ua-sigle-article no-padding">
		<section class="content">
			
			<div class="box-header">
				<div class="box-title">
					<p><h3><b>Galeri Alumni</b></h3></p>
				</div>
			</div>
			
			
			
			
			<?php
			$result = $koneksi->query("SELECT * FROM data_galery ORDER BY id DESC");
			while ($data = mysqli_fetch_array($result)) { ?>
				<div class="col-sm-3">
					<a href="galery/<?php echo $data['gambar'];?>" data-gallery="example-gallery" data-toggle="lightbox" data-title="<?php echo $data['judul'] ?>" data-footer="<?php echo $data['deskripsi'] ?>" >
						<img src="galery/<?php echo $data['gambar'];?>" class="img-responsive" style="height: 200px; width: 100%">
					</a>
					<br>
				</div>

			<?php } ?>
			
			

		</section>
		<!-- /.content -->
		<!-- /.content -->
	</div></div>

	<?php
	include 'global_footer.php';
	?>
