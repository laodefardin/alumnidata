<?php
session_start();
include "../inc/koneksi.php";
	//error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if (isset($_POST['submit'])) {
	$nmMahasiswa = $_POST['nmMahasiswa'];
	$judul 		 = $_POST['tgsAkhir'];
	$id_agama 	 = $_POST['agama'];
	$tgl_lahir 	 = $_POST['tglLahir'];
	$tmp_lahir   = $_POST['tempatLahir'];
	$alamat      = $_POST['alamat'];
	$id_provinsi = $_POST['provinsi'];
	$kota 		 = $_POST['kota'];
	$yudisium    = $_POST['predikatYudisium'];
	$statusAlumni= $_POST['statusAlumni']; 
	$email       = $_POST['email'];
	$no_telp     = $_POST['noTelepon'];
	$noIjasah    = $_POST['noIjasah'];
	$foto        = '';
	$id 		 = $_SESSION['nim'];
	$folder      = '../foto/alumni/';
	$date        = date("Y-m-d H:i:s");


	if($_FILES['foto']['name']!==''){
		
		move_uploaded_file($_FILES['foto']['tmp_name'],$folder.$_FILES['foto']['name']);
		
		$foto  = $_FILES['foto']['name'];

		$mysql = $koneksi->query("UPDATE `alumni_profil` SET 
			`nama_lengkap` = '$nmMahasiswa',
			`judul_skripsi` = '$judul',
			`id_agama`		= '$id_agama',
			`tmpt_lahir`	= '$tmp_lahir',
			`tanggal_lahir` = '$tgl_lahir',
			`alamat`		= '$alamat',
			`id_provinsi`	= '$id_provinsi',
			`id_kota`		= '$kota',
			`no_telp`		= '$no_telp',
			`email`			= '$email',
			`foto`			= '$foto',
			`no_ijasah`		= '$noIjasah',
			`yudisium`		= '$yudisium',
			`statusalumni`  = '$statusAlumni',
			`update_status` = '$date'
			WHERE `nim` ='$id'");

	}else{


		$mysql = $koneksi->query("UPDATE `alumni_profil` SET 
			`nama_lengkap` = '$nmMahasiswa',
			`judul_skripsi` = '$judul',
			`id_agama`		= '$id_agama',
			`tmpt_lahir`	= '$tmp_lahir',
			`tanggal_lahir` = '$tgl_lahir',
			`alamat`		= '$alamat',
			`id_provinsi`	= '$id_provinsi',
			`id_kota`		= '$kota',
			`no_telp`		= '$no_telp',
			`email`			= '$email',
			`no_ijasah`		= '$noIjasah',
			`yudisium`		= '$yudisium',
			`statusalumni`   = '$statusAlumni',
			`update_status` = '$date'
			WHERE `nim` ='$id'");


	}
	


	if ($statusAlumni==='Bekerja') {?>
<div class="row" style="margin-bottom: 15px;">
	<div class="col-md-12">
		<div class="kotak">
			<form id="form">
				<div class="row" style="margin-bottom: 15px;">
					<span class="col-lg-2">Nim</span>
					<div class="col-lg-4">
						<input type="text" readonly="true" class="form-control" value="<?=$_SESSION['nim']?>">
						<input type="hidden" id='nim' name='nim' class="form-control" value="<?=$_SESSION['nim']?>">
					</div>
					<span class="col-lg-2">Nama Lengkap</span>
					<div class="col-lg-4">
						<input type="text" readonly="true" class="form-control" id="nmMahasiswa"
							value="<?=$_POST['nmMahasiswa']?>">
					</div>
				</div>

				<div class="row" style="margin-bottom: 15px;">
					<span class="col-lg-2">Rentang Selesai Hingga Bekerja</span>
					<div class="col-lg-4">
						<select class="form-control" name="rentangjarak" id="rentangJarak">
							<option value=""> - Pilih Rentang Dulu - </option>
							<option value="Kurang Dari 1 Bulan">Kurang Dari 1 Bulan</option>
							<option value="1 Bulan Sampai 12 Bulan">1 Bulan Sampai 12 Bulan</option>
							<option value="Lebih Dari 12 Bulan">Lebih Dari 12 Bulan</option>
						</select>
					</div>
					<span class="col-lg-2">Kesesuain Bidang Pekerjaan dengan Jurusan Di Kampus</span>
					<div class="col-lg-4">
						<select class="form-control" name="kesesuaian" id="Kesesuaian">
							<option value=""> - Pilih Kesesuai Dulu - </option>
							<option value="Sangat Sesuai">Sangat Sesuai</option>
							<option value="Sesuai">Sesuai</option>
							<option value="Kurang Sesuai">Kurang Sesuai</option>
							<option value="Tidak Sesuai">Tidak Sesuai</option>
						</select>
					</div>
				</div>

				<hr>
				<div class="row" style="margin-bottom: 15px;">
					<div class="col-lg-12">
						<h1 style="font-weight:bold;font-size:18px">Pekerjaan Sekarang</h1>
					</div>
				</div>


				<div class="row" style="margin-bottom: 15px;">
					<span class="col-lg-2"> Nama Perusahaan/Instansi</span>
					<div class="col-lg-4">
						<input type="text" class="form-control" name='namaperusahaan' id="namaPerusahaan">
					</div>
					<span class="col-lg-2">Posisi</span>
					<div class="col-lg-4">
						<input type="text" class="form-control" name='posisi' id="posisi">
					</div>
				</div>

				<div class="row" style="margin-bottom: 15px;">
					<span class="col-lg-2">Rata-Rata Penghasilan/Gaji per Tahun Perusahaan Sekarang</span>
					<div class="col-lg-4">
						<select class="form-control" id="rata2Gaji" name='rata2gaji'>
							<option value=""> - Pilih Rata-Rata Dulu - </option>
							<option value="< Rp. 1.000.000 ">&gt; < Rp. 1.000.000 </option> 
							<option	value="Rp. 1.000.000 - Rp. 5.000.000">Rp. 1.000.000 - Rp. 5.000.000</option>
							<option value="Rp. 5.000.000 - Rp. 10.000.000">Rp. 5.000.000 - Rp. 10.000.000</option>
							<option value="Rp. 10.000.000 - Rp. 15.000.000">&lt; Rp. 10.000.000 - Rp. 15.000.000</option>
							<option value="Rp. 15.000.000 - Rp. 20.000.000">Rp. 15.000.000 - Rp. 20.000.000</option>
							<option value="> Rp. 20.000.000"> > Rp. 20.000.000</option>
						</select>
					</div>
					<span class="col-lg-2">Lama Bekerja di Perusahaan Sekarang</span>
					<div class="col-lg-4">
						<select class="form-control" id="lamaBekerja" name='lamabekerja'>
							<option value=""> - Pilih Lama Bekerja Dulu - </option>
							<option value="Kurang Dari 1 Tahun">Kurang Dari 1 Tahun</option>
							<option value="1 Tahun Sampai 3 Tahun">1 Tahun Sampai 3 Bulan</option>
							<option value="Lebih Dari 3 Tahun">Lebih Dari 3 Tahun</option>
						</select>
					</div>
				</div>

				<div class="row" style="margin-bottom: 15px;">
					<span class="col-lg-2">Alamat Pekerjaan Sekarang Bekerja</span>
					<div class="col-lg-10">
						<textarea type="text" class="form-control" name='alamat' id="alamat_perusahaan"></textarea>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="row" style="margin-bottom: 15px;">
	<div class="col-lg-12">
		<button id="formulir" class="btn btn-danger" onclick="formulir('793');return false;">&lt;&lt;
			Sebelumnya</button>
		<button style="float:right" id="next1" class="btn btn-warning" onclick="previewKerja('793');return false;">
			&gt;&gt; Selanjutnya</button>
	</div>
</div>
<?php }elseif($statusAlumni==='Lanjut Studi'){?>
<div id="kotak">
	<div class="row" style="margin-bottom: 15px;">
		<span class="col-lg-2">Nim</span>
		<div class="col-lg-4">
			<input type="text" class="form-control" value="<?=$_SESSION['nim']?>">
			<input type="hidden" id='nim' name='nim' class="form-control" value="<?=$_SESSION['nim']?>">
		</div>
		<span class="col-lg-2">Nama Lengkap</span>
		<div class="col-lg-4">
			<input type="text" readonly="true" class="form-control" id="nmMahasiswa"
				value="<?php echo $_POST['nmMahasiswa']; ?>">
		</div>
	</div>
	<div class="row" style="margin-bottom: 15px;">
		<span class="col-lg-2">Universitas Lanjut</span>
		<div class="col-lg-10">
			<input type="text" name='univlanjut' class="form-control" id="univLanjut" value="">
		</div>
	</div>
	<div class="row" style="margin-bottom: 15px;">
		<span class="col-lg-2">Program Studi</span>
		<div class="col-lg-10">
			<input type="text" class="form-control" name='prodilanjut' id="prodiLanjut" value="">
		</div>
	</div>
	<div class="row" style="margin-bottom: 15px;">
		<span class="col-lg-2">Semester</span>
		<div class="col-lg-4">
			<select class="form-control" id="semesterLanjut" name='semesterlanjut'>
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
			<button id="formulir" class="btn btn-danger" onclick="formulir('793');return false;">&lt;&lt;
				Sebelumnya</button>
			<button style="float:right" id="next1" class="btn btn-warning" onclick="previewLanjut('793');return false;">
				&gt;&gt; Selanjutnya</button>
		</div>
	</div>
</div>
<?php }elseif($statusAlumni==='Belum Bekerja'){?>
<div id="kotak">
	<div class="row">
		<span class="col-lg-2">Nama Lengkap</span>
		<div class="col-lg-4">
			<input type="text" readonly="true" class="form-control" id="nm_lengkap" value="<?=$_POST['nmMahasiswa']?>">
		</div>
	</div>
	<div class="row">
		<span class="col-lg-2">Username</span>
		<div class="col-lg-4">
			<input type="text" readonly="true" class="form-control" id="username" value="<?=$_SESSION['nim']?>">
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
			<button style="float:right" id="next1" class="btn btn-warning" onclick="simpanUser();return false;"><i
					class="fa fa-save"></i> SIMPAN DAN FINISH</button>
		</div>
	</div>
</div>
<?php }
	}
	?>