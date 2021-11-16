<?php
include 'inc/koneksi.php';
include 'global_header.php';
?>

<div class="content-wrapper" style="min-height: 901px;">
<div class="container ua-sigle-article no-padding">
	<div class="img-paralax hidden-xs">
		<div class="container">
			<div class="paralax-title">
				Panduan Singkat Penggunaan Sistem Informasi Alumni PPs UNM
			</div>
		</div>
	</div>

	
		<section class="content">
				
				<div class="box-header">
					<div class="box-title"><h4><b>Selamat datang di Portal Alumni PPs UNM, berikut penjelasan singkat mengenai menu-menu yang ada pada sistem informasi ini.</b></h4></div>
				</div>
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-10">

<!-- Kode Slide awal -->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php
        include 'inc/koneksi.php';

        $count = $koneksi->query("SELECT COUNT(*) FROM data_slidebantuan") or die(mysqli_error());
        $count = mysqli_num_rows($count);
      
        $no = 0;
        for($no;$no<6;$no++){
          ?>
          <li data-target="#ccarousel-example-generic" data-slide-to="<?php echo $no ?>" class="<?php if($no == 0){echo 'active';}else{echo 'notactive';}?>"></li>
          <?php 
        }
        ?>
      </ol>
      <div class="carousel-inner">
        <?php
        $sql = $koneksi->query("SELECT * FROM data_slidebantuan ORDER BY active DESC");
        while ($row = mysqli_fetch_assoc($sql)) {
          echo '
          <div class="item '; if($row['active'] == 1){ echo 'active'; } echo '">
          <img src="slidebantuan/'.$row['gambar'].'" />
          <div class="carousel-caption">
          </div>
          </div>';
        }
        ?>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
        <span class="fa fa-angle-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        <span class="fa fa-angle-right"></span>
      </a>
    </div>
    <!-- Kode Slide Akhir -->
						<!-- <center><img src="foto/1.jpg" style="width: 350px;"></center>
						<center><img src="foto/2.jpg" style="width: 350px;"></center>
						<center><img src="foto/3.jpg" style="width: 350px;"></center> -->
						
					</div>
				</div>
		</section>

		<!-- /.content -->
		<!-- /.content -->
	</div>
</div>
	<?php
	include 'global_footer.php';
	?>