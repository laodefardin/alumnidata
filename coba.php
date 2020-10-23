<form name="form1"action=""method="POST">
	<select class="form-control" id="statusAlumni" name="statusAlumni">
		<option selected="selected" disabled="disabled"> - Pilih Status Dulu - </option>
		<option value="Bekerja">Bekerja</option>
		<option value="Lanjut Studi">Lanjut Studi</option>
		<option value="Belum Bekerja">Belum Bekerja</option>
	</select>
	<input type="submit" name="submit">
	<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	if (isset($_POST['submit'])) {
		$statusAlumni = $_POST['statusAlumni'];
		if ($statusAlumni==='Bekerja') {?>
			<div class="row" style="margin-bottom: 15px;">        
				<div class="col-md-12">
					<div class="kotak">
						<form id="form">
							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">Nim</span>
								<div class="col-lg-4">
									<input type="text" readonly="true" class="form-control" id="nim" value="1124040022">
								</div>
								<span class="col-lg-2">Nama Lengkap</span>
								<div class="col-lg-4">
									<input type="text" readonly="true" class="form-control" id="nmMahasiswa" value="Irwan Jumasdin">
								</div>
							</div>

							<hr>
							<div class="row" style="margin-bottom: 15px;">
								<div class="col-lg-12">
									<h1 style="font-weight:bold;font-size:18px">Pekerjaan Sekarang</h1>
								</div>
							</div>


							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">Posisi</span>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="posisi" value="">
								</div>
								<span class="col-lg-2"> Nama Perusahaan</span>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="namaPerusahaan" value="">
								</div>
							</div>

							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">Rata-Rata Penghasilan/Gaji per Tahun Perusahaan Sekarang</span>
								<div class="col-lg-4">
									<select class="form-control" id="rata2Gaji">
										<option value=""> - Pilih Rata-Rata Dulu - </option>
										<option value="> 50 Juta">&gt; 50 Juta</option>
										<option value="25 Juta - 50 Juta">25 Juta - 50 Juta</option>
										<option value="18 Juta - 25 Juta">18 Juta - 25 Juta</option>
										<option value="<18 Juta">&lt;18 Juta</option>
											<option value="Lainnya">Lainnya</option>
										</select>
									</div>
									<span class="col-lg-2">Lama Bekerja di Perusahaan Sekarang</span>
									<div class="col-lg-4">
										<select class="form-control" id="lamaBekerja">
											<option value=""> - Pilih Lama Bekerja Dulu - </option>
											<option value="Kurang Dari 1 Tahun">Kurang Dari 1 Tahun</option>
											<option value="1 Tahun Sampai 3 Tahun">1 Tahun Sampai 3 Bulan</option>
											<option value="Lebih Dari 3 Tahun">Lebih Dari 3 Tahun</option>
										</select>
									</div>
								</div>

								<div class="row" style="margin-bottom: 15px;">
									<span class="col-lg-2">Alamat Perusahaan Sekarang Bekerja</span>
									<div class="col-lg-10">
										<textarea type="text" class="form-control" id="alamat_perusahaan"></textarea>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="row" style="margin-bottom: 15px;">
					<div class="col-lg-12">
						<button id="formulir" class="btn btn-danger" onclick="formulir('793');return false;">&lt;&lt; Sebelumnya</button>
						<button style="float:right" id="next1" class="btn btn-warning" onclick="previewKerja('793');return false;"> &gt;&gt; Selanjutnya</button>
					</div>
				</div>
			<?php }elseif($statusAlumni==='Lanjut Studi'){?>
				<div id="kotak">
					<div class="row" style="margin-bottom: 15px;">
						<span class="col-lg-2">Nim</span>
						<div class="col-lg-4">
							<input type="text" readonly="true" class="form-control" id="nim" value="<?php echo $data['nim']; ?>">
						</div>
						<span class="col-lg-2">Nama Lengkap</span>
						<div class="col-lg-4">
							<input type="text" readonly="true" class="form-control" id="nmMahasiswa" value="<?php echo $data['nama_lengkap']; ?>">
						</div>
					</div>
					<div class="row" style="margin-bottom: 15px;">
						<span class="col-lg-2">Universitas Lanjut</span>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="univLanjut" value="">
						</div>
					</div>
					<div class="row" style="margin-bottom: 15px;">
						<span class="col-lg-2">Program Studi</span>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="prodiLanjut" value="">
						</div>
					</div>
					<div class="row" style="margin-bottom: 15px;">
						<span class="col-lg-2">Semester</span>
						<div class="col-lg-4">
							<select class="form-control" id="semesterLanjut">
								<option value=""> - Pilih Semester Dulu - </option>
								<option value="Semester 1">Semester 1</option>
								<option value="Semester 2">Semester 2</option>
								<option value="Semester 3">Semester 3</option>
								<option value="Semester 4">Semester 4</option>
								<option value="Semester 5">Semester 5</option>
								<option value="Semester 6">Semester 6</option>
								<option value="Semester 7">Semester 7</option>
								<option value="Semester 8">Semester 8</option>
							</select>
						</div>
					</div>
				</div>

				<div id="kotak">
					<div class="row" style="margin-bottom: 15px;">
						<div class="col-lg-12">
							<button id="formulir" class="btn btn-danger" onclick="formulir('793');return false;">&lt;&lt; Sebelumnya</button>
							<button style="float:right" id="next1" class="btn btn-warning" onclick="previewLanjut('793');return false;"> &gt;&gt; Selanjutnya</button>
						</div>
					</div>
				</div>
			<?php }elseif($statusAlumni==='Belum Bekerja'){?>
				<div id="kotak">
					<div class="row">
						<span class="col-lg-2">Nama Lengkap</span>
						<div class="col-lg-4">
							<input type="text" readonly="true" class="form-control" id="nm_lengkap" value="Irwan Jumasdin">
						</div>
					</div>
					<div class="row">
						<span class="col-lg-2">Username</span>
						<div class="col-lg-4">
							<input type="text" readonly="true" class="form-control" id="username" value="1124040022">
						</div>
					</div>
					<div class="row">
						<span class="col-lg-2">Password</span>
						<div class="col-lg-4">
							<input type="password" class="form-control" id="password">
						</div>
					</div>
					<div class="row">
						<span class="col-lg-2">Ulangi Password</span>
						<div class="col-lg-4">
							<input type="password" class="form-control" id="retypePassword">
						</div>
					</div>
				</div>
				<div id="kotak">
					<div class="row">
						<div class="col-lg-12">
							<button style="float:right" id="next1" class="btn btn-warning" onclick="simpanUser();return false;"><i class="fa fa-save"></i> SIMPAN DAN FINISH</button>
						</div>
					</div>
				</div>
			<?php }
		}
		?>