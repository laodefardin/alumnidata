<?php
include 'inc/koneksi.php';
include 'global_header.php';
?>

<div class="content-wrapper" style="min-height: 901px;">
<div class="container ua-sigle-article no-padding">
	<div class="img-paralax">
		<div class="container">
			<div class="paralax-title">
				Tentang Pascasarjana Universitas Negeri Makassar
			</div>
		</div>
	</div>

	
		<section class="content">
			
			<div class="row">
				
				<div class="col-md-6">
					<p><h4><b>Tentang Program Pascasarjana UNM</b></h4></p>
					<ul class="list-group">
						<H4 style="text-align: justify;">
							Program Pascasarjana Universitas Negeri Makassar (PPs UNM) pada mulanya bernama Program Pascasarjana IKIP Ujung Pandang. Perubahan nama ini terjadi pada tahun 1999 sebagai konsekuensi perubahan IKIP menjadi Universitas sebagaimana Keputusan Presiden Republik Indonesia Nomor 93 Tahun 1999 tertanggal 4 Agustus 1999; dan perubahan nama kota Ujung Pandang menjadi Kota Makassar.
							<p>
								<br>
							Pada tanggal 30 Mei 1997, Program Pascasarjana IKIP Ujung Pandang berdiri secara resmi dengan dua program studi yang mendapatkan izin dari Dirjen Pendidikan Tinggi, yakni: (1) Program studi Pendidikan Ilmu Pengetahuan Sosial (Surat Keputusan No. 132/Dikti/Kep/1997; dan (2) Program studi Pendidikan Bahasa (Surat Keputusan No. 134/Dikti/Kep/1997).
							<p>
								<br>
							Seiring dengan perubahan IKIP Ujung Pandang menjadi Universitas Negeri Makassar seperti yang telah disebutkan di atas, maka pada tahun akademik 1999/2000, Program Pascasarjana IKIP Ujung Pandang, secara resmi bernama Program Pascasarjana Universitas Negeri Makassar, yang lazim disebut PPs UNM. Setelah itu, PPs UNM secara bertahap membuka beberapa program studi baik Program Magister maupun Program Doktor. Sampai tahun akademik 2019/2020), PPs UNM menyelenggarakan 31 program studi (10 Program Doktor dan 21 Program Magister), seperti divisualisasikan pada tabel berikut, menurut tanggal Surat Keputusan Pendiriannya.
							<p>
								<br>
							Kunjungi website resmi PPs Univesitas Negeri Makassar : <a href="http://pps.unm.ac.id/" target="_blank" rel="noopener noreferrer">http://pps.unm.ac.id/</a>
							</H3></ul>					
						</div>

						<div class="col-md-6">
							<img class="img-responsive" src="assets/kampuspasca1.jpg" alt="Photo">
						</div>
					</div>

					<div class="row">
						<!-- <div class="col-md-12">
							<center><ul class="list-group"><h4>
								<li class="list-group-item"> 
									<i class="fa fa-bolt"></i> PTE (S1) Pendidikan Teknik Elektro
									&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-wrench"></i> PTE (D3) Teknik Elektro
									&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-laptop"></i></i> PTIK (S1) Pendidikan Teknik Informatika dan Komputer</h4></li>
								</ul></center>
							</div>
						</div> -->

						
						<!-- <section id="demos">
							<div class="row">
								<div class="col-md-1">
								</div>
								<div class="col-md-10">
									<div class="owl-carousel owl-theme">
										<div class="item">
											<?php
											$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '1'");
											foreach ($profil as $data) { 
												?>
												<?php 
												$foto = $data["foto"];
												if($foto===''){?>
													<img src="foto/jurusan/anonim.jpg" class="img-responsive" alt="kejur" >
												<?php } else {?>
													<img src="foto/jurusan/<?php echo $data['foto'];?>" class="img-responsive" alt="kejur" >
												<?php }; ?>
												<div class="post-info">
													<center><h4><b><?php echo $data['nama']; ?></b></h2>
														<h5>Ketua Jurusan</h5></center>			
													</div>
												</div>
											<?php }?>

											<div class="item">
												<?php
												$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '2'");
												foreach ($profil as $data) { 
													?>
													<?php 
													$foto = $data["foto"];
													if($foto===''){?>
														<img src="foto/jurusan/anonim.jpg" class="img-responsive" alt="sekjur" >
													<?php } else {?>
														<img src="foto/jurusan/<?php echo $data['foto'];?>" class="img-responsive" alt="sekjur" >
													<?php }; ?>
													<div class="post-info">
														<center><h4><b><?php echo $data['nama']; ?></b></h2>
															<h5>Sekjur PTE</h5></center>	
														</div>
													</div>
												<?php }?>

												<div class="item">
													<?php
													$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '3'");
													foreach ($profil as $data) { 
														?>
														<?php 
														$foto = $data["foto"];
														if($foto===''){?>
															<img src="foto/jurusan/anonim.jpg" class="img-responsive" alt="prodi ptik" >
														<?php } else {?>
															<img src="foto/jurusan/<?php echo $data['foto'];?>" class="img-responsive" alt="prodi ptik" >
														<?php }; ?>
														<div class="post-info">
															<center><h4><b><?php echo $data['nama']; ?></b></h2>
																<h5>Ketua Prodi S1 PTIK</h5></center>	
															</div>
														</div>
													<?php }?>

													<div class="item">
														<?php
													$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '4'");
													foreach ($profil as $data) { 
														?>
														<?php 
														$foto = $data["foto"];
														if($foto===''){?>
															<img src="foto/jurusan/anonim.jpg" class="img-responsive" alt="prodi elektro s1" >
														<?php } else {?>
															<img src="foto/jurusan/<?php echo $data['foto'];?>" class="img-responsive" alt="prodi elektro s1" >
														<?php }; ?>
														<div class="post-info">
															<center><h4><b><?php echo $data['nama']; ?></b></h2>
																<h5>Ketua Prodi S1 PTE</h5></center>	
															</div>
														</div>
														<?php }; ?>

														<div class="item">
															<?php
													$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '5'");
													foreach ($profil as $data) { 
														?>
														<?php 
														$foto = $data["foto"];
														if($foto===''){?>
															<img src="foto/jurusan/anonim.jpg" class="img-responsive" alt="prodi elektro d3" >
														<?php } else {?>
															<img src="foto/jurusan/<?php echo $data['foto'];?>" class="img-responsive" alt="prodi elektro d3" >
														<?php }; ?>
															<div class="post-info">
																<center><h4><b><?php echo $data['nama']; ?></b></h2>
																	<h5>Ketua Prodi D3 Teknik ELEKTRO</h5></center>	
																</div>
															</div>
															<?php }; ?>
														</div>
													</div>

												</div>
											</section>




										</section> -->
										<!-- /.content -->
										<!-- /.content -->
									</div></div>

									<?php
									include 'global_footer.php';
									?>
