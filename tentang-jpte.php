<?php
include 'inc/koneksi.php';
include 'global_header.php';
?>

<div class="content-wrapper" style="min-height: 901px;">
	<div class="img-paralax">
		<div class="container">
			<div class="paralax-title">
				Tentang JPTE UNM
			</div>
		</div>
	</div>

	<div class="container ua-sigle-article no-padding">
		<section class="content">
			
			<div class="box-header">
				<div class="box-title">
					<p><h3><b>TENTANG PENDIDIKAN TEKNIK ELEKTRO</b></h3></p>
					<h4><p>Adapun misi Jurusan Pendidikan Teknik Elektro yaitu:</p></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<ul class="list-group">
						<H4>
							<li class="list-group-item">Menyelenggarakan pendidikan dan pengajaran di bidang teknik elektrodan vakasional yang berkualitas sesuai standar pendidikan nasional dan standar pendidikan nasional dan standar pelayanan minimal yang relevan dengan kebutuhan pasar kerja global. </li>
							<li class="list-group-item">Melaksanakan dan mengembangkan penelitian bidang teknik elektro dan vokasional</li>
							<li class="list-group-item">Menyelenggarakan pengabdian kepada masyarakat dalam bidang pendidikan teknik elektro yang memiliki sikap kepedulian terhadap kehidupan sosial dan kemasyarakatan.</li>
							<li class="list-group-item">Membekali lulusan dengan kompetensi dan keterampilan yang profesional yang memiliki jiwa kewirausahaan</li>
							<li class="list-group-item">Mengembangkan kemitraan yang sinergis dengan perguruan tinggi yang relevan dalam dan luar negeri, pemerintah, swasta (DUDI), organisasi masyarakat, asosiasi profesi serta industri.
							</H3></li></ul>					
						</div>

						<div class="col-md-6">
							<img class="img-responsive" src="assets/ftunm.jpg" alt="Photo">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<center><ul class="list-group"><h4>
								<li class="list-group-item"> 
									<i class="fa fa-bolt"></i> PTE (S1) Pendidikan Teknik Elektro
									&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-wrench"></i> PTE (D3) Teknik Elektro
									&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-laptop"></i></i> PTIK (S1) Pendidikan Teknik Informatika dan Komputer</h4></li>
								</ul></center>
							</div>
						</div>

						
						<section id="demos">
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




										</section>
										<!-- /.content -->
										<!-- /.content -->
									</div></div>

									<?php
									include 'global_footer.php';
									?>
