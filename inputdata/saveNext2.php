<?php
include '../inc/koneksi.php';
session_start();
if(isset($_POST['status'])){

	if($_POST['status']=='kerja'){

		$nim 		 = $_SESSION['nim'];
		$posisi 	= $_POST['posisi'];
		$nama_perusahaan = $_POST['namaperusahaan'];
		$alamat    = $_POST['alamat'];
		$lama 		= $_POST['lamaBekerja'];
		$rata  	= $_POST['rata2Gaji'];
		$rentangjarak  	= $_POST['rentangjarak'];
		$kesesuaian  	= $_POST['kesesuaian'];

		$mysql = $koneksi->query("UPDATE `alumni_profil` SET
			`posisi`           = '$posisi',
			`nama_perusahaan`  = '$nama_perusahaan', 
			`gaji`             = '$rata', 
			`lama_bekerja`     = '$lama', 
			`alamat_bekerja`   = '$alamat',
			`rentangJarak`   = '$rentangjarak',
			`kesesuaian`   = '$kesesuaian'
			WHERE `nim` ='$nim'");

	}else if($_POST['status']=='lanjut'){
		$nim 		 = $_SESSION['nim'];
		$univ		 = $_POST['univ'];
		$prodi 		 = $_POST['prodi'];
		$semester 	 = $_POST['semester'];

		$mysql = $koneksi->query("UPDATE `alumni_profil` SET
			`nama_univ`      = '$univ',
			`program_studi2` = '$prodi', 
			`semester`       = '$semester'
			WHERE `nim`      = '$nim'");

	}
}
?> 
<?php 
$result = $koneksi->query("SELECT * FROM alumni_profil WHERE nim = '".$_SESSION['nim']."' limit 0,1");
foreach ($result as $data){
	?>
	<div id="kotak">
		<div class="row">
			<span class="col-lg-2">Nama Lengkap</span>
			<div class="col-lg-4">
				<input type="text" readonly="true" class="form-control" id="nm_lengkap" value="<?=isset($data['nama_lengkap'])?$data['nama_lengkap']:''?>">
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
				<button style="float:right" id="next1" class="btn btn-warning" onclick="simpanUser();return false;"><i class="fa fa-save"></i> SIMPAN DAN FINISH</button>
			</div>
		</div>
	</div>
	<?php
}
?>