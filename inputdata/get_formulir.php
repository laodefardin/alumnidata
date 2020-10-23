<?php
include '../inc/koneksi.php';
session_start();
?>
<div class="row">
	<div class="col-lg-12">
		<h4>Lengkapi Berkas Anda dan dapatkan User login untuk mendapatkan informasi terupdate tentang Alumni Universitas Negeri Makassar Fakultas Teknik Jurusan Pendidikan Teknik Elektro</h4>
		<p style="color:red">* Pastikan data yang Anda masukkan benar</p>
	</div>

	<?php
	$id = $_GET['id'];
	$nim = $_SESSION['nim'];
	$result = $koneksi->query("SELECT * FROM alumni_profil WHERE nim = '".$_SESSION['nim']."' limit 0,1");
	foreach ($result as $data){
		?>

		<div class="box-body table-responsive">
			<div class="row">        
				<div class="col-md-12">
					<div class="kotak">
						<form id="form1" >
							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">Nama Lengkap</span>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="nmMahasiswa" name="nmMahasiswa" value='<?=isset($data['nama_lengkap'])?$data['nama_lengkap']:''?>' placeholder="contoh : Laode Muh. ZulFardinsyah">
								</div>
								<span class="col-lg-2">Nomor Induk Mahasiswa</span>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="nim" name="nim" value="<?php echo $data['nim']; ?>" disabled>
								</div>
							</div>

							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">IPK<span style="color:red;"> *</span></span>
								<div class="col-lg-4">
									<input type="text"  class="form-control" id="ipk" name="ipk" value='' placeholder="contoh : 3.65">
									<input type="hidden"  class="form-control" id="ipk2" name="ipk2" value='<?=isset($data['ipk'])?$data['ipk']:''?>' placeholder="contoh : 3.65">
								</div>
								<span class="col-lg-2">Lama Studi<span style="color:red;"> *</span></span>
								<div class="col-lg-2">
									<input type='hidden' name='lamaStudi11' id='lamaStudi11' value='<?=$data['lamaStudi1']?>'>
									<input type='hidden' name='lamaStudi22' id='lamaStudi22' value='<?=$data['lamaStudi2']?>'>
									<input type='hidden' name='lamaStudi11' id='lamaStudi11' value='<?=$data['lamaStudi1']?>'>
									<select name="lamaStudi1" class="form-control" id='lamaStudi1'>
										<option value="">Pilih Tahun</option>
										<?php
										for($i=1;$i<=8;$i++){
											$select = '';
											if($i.' Tahun' == $data['lamaStudi1']){
										// $select='selected=selected';
											}

											echo "<option value='".$i." Tahun' ".$select.">".$i.' Tahun</option>';
										}
										?>
									</select>
								</div>
								<div class="col-lg-2">
									<select name="lamaStudi2" class="form-control" id='lamaStudi2'>
										<option value="">Pilih Bulan</option>
										<?php
										for($i=1;$i<=12;$i++){
											$select = '';
											if($i.' Bulan' == $data['lamaStudi2']){
										// $select='selected=selected';
											}

											echo "<option value='".$i." Bulan' ".$select.">".$i.' Bulan</option>';
										}
										?>
									</select>
								</div>
							</div>
							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">Tempat Lahir</span>
								<div class="col-lg-4">
									<input type="text" class="form-control" value='<?=isset($data['tmpt_lahir'])?$data['tmpt_lahir']:''?>' id="tempatLahir" name="tempatLahir" placeholder="Tempat Lahir">
								</div>

								<span class="col-lg-2">Tanggal Lahir</span>
								<div class="col-lg-4">
									<input type="text" class="form-control" id="tglLahir" name="tglLahir" value='<?=isset($data['tanggal_lahir'])?$data['tanggal_lahir']:''?>'>
								</div>
							</div>

							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">No HandPhone</span>
								<div class="col-lg-4">
									<input class="form-control date-picker" id="noTelepon" name="noTelepon" type="text"  value='<?=isset($data['no_telp'])?$data['no_telp']:''?>'>
								</div>
								<span class="col-lg-2">Nomor Ijasah</span>
								<div class="col-lg-4">
									<input type="text" placeholder="" class="form-control" id="noIjasah" name="noIjasah" value='<?=isset($data['no_ijasah'])?$data['no_ijasah']:''?>'>
								</div>
							</div>

							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">Agama</span>
								<div class="col-lg-4">
									<select class="form-control select2" id="agama" name="agama" required style="width: 100%;">
										<option value="" disabled='disabled'>- Pilih Agama -</option>
										<?php
										$daftar_agama = $koneksi->query("SELECT id_agama, nama_agama FROM data_agama");
										$select_agama = "";
										$agama = isset($data['id_agama'])?$data['id_agama']:'';
										foreach ($daftar_agama as $dagama) {
											if ($dagama["id_agama"]==$agama){
												$select_agama .= "<option value='$dagama[id_agama]' selected>$dagama[nama_agama]</option>";
											}else{
												$select_agama .= "<option value='$dagama[id_agama]'>$dagama[nama_agama]</option>";
											}
										}
										echo $select_agama;
										?>
									</select>
								</div>
								<span class="col-lg-2">Email</span>
								<div class="col-lg-4">
									<input type="text" placeholder="" class="form-control" id="email" name="email" value="<?=isset($data['email'])?$data['email']:''?>">
								</div>
							</div>

							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">Provinsi</span>
								<div class="col-lg-4">
									<select id="provinsi" name="provinsi" class="form-control select2">
										<option value="" >Pilih Provinsi</option>
										<?php
										$daftar_provinsi = $koneksi->query("SELECT id_provinsi, nama_provinsi FROM data_provinsi");
										$select_provinsi = "";
										$provinsi = isset($data['id_provinsi'])?$data['id_provinsi']:'';
										foreach ($daftar_provinsi as $dprovinsi) {
											if ($dprovinsi["id_provinsi"]==$provinsi){
												$select_provinsi .= "<option value='$dprovinsi[id_provinsi]' selected>$dprovinsi[nama_provinsi]</option>";
											}else{
												$select_provinsi .= "<option value='$dprovinsi[id_provinsi]'>$dprovinsi[nama_provinsi]</option>";
											}
										}
										echo $select_provinsi;
										?>
									</select>
								</div>	
								<span class="col-lg-2">Kabupaten/Kota</span>
								<div class="col-lg-4">
									<select class="form-control select2" id="kota" name="kota" required>
										<option value="" id="kota" selected="selected" disabled="disabled">Pilih Kabupaten/Kota</option>
										<?php
										$daftar_kota = $koneksi->query("SELECT id_kota, nama_kota FROM data_kota");
										$select_kota = "";
										$kota = isset($data['id_kota'])?$data['id_kota']:'';
										foreach ($daftar_kota as $dkota) {
											if ($dkota["id_kota"]==$kota) {
												$select_kota .= "<option value='$dkota[id_kota]' selected>$dkota[nama_kota]</option>";
											}
											else {
												$select_kota .= "<option value='$dkota[id_kota]'>$dkota[nama_kota]</option>";
											}
										}
										echo $select_kota;
										?>
									</select>
								</div>

							</div>

							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">Judul Tugas Akhir</span>
								<div class="col-lg-10">
									<textarea type="text" class="form-control" id="tgsAkhir" name="tgsAkhir" ><?=isset($data['judul_skripsi'])?$data['judul_skripsi']:''?></textarea>
								</div>
							</div>





							<div class="row" style="margin-bottom: 15px;">
								<span class="col-lg-2">Alamat Lengkap</span>
								<div class="col-lg-6">
									<textarea type="text" class="form-control" id="alamat" name="alamat"><?=isset($data['alamat'])?$data['alamat']:''?></textarea>
								</div>
								<span class="col-lg-2">Upload Gambar</span>
								<input type="file" name="foto" id="foto">
							</div>
						</div>

						<div class="row" style="margin-bottom: 15px;">
							<span class="col-lg-2">Predikat Yudisiom</span>
							<div class="col-lg-4">
								<select class="form-control" id="predikatYudisium" name="predikatYudisium" style="width: 100%;">
									<option  value="">Pilih Predikat Yudisiom</option>
									<option value="Cumlaude">Cumlaude</option>
									<option value="Sangat Memuaskan">Sangat Memuaskan</option>
									<option value="Memuaskan">Memuaskan</option>
								</select>
							</div>
							<span class="col-lg-2">Status Alumni</span>
							<div class="col-lg-4">
								<select class="form-control" id="statusAlumni" name="statusAlumni">
									<option value=""> - Pilih Status Dulu - </option>
									<option value="Bekerja">Bekerja</option>
									<option value="Lanjut Studi">Lanjut Studi</option>
									<option value="Belum Bekerja">Belum Bekerja</option>
								</select>
							</div>
						</div>
					</form>

					<div class="row">
						<div class="col-lg-12">
							<button id="preview" class="btn btn-danger" onclick="preview('834');return false;">&lt;&lt; Sebelumnya</button>
							<button style="float:right" id="next1" class="btn btn-warning" onclick="next1('834');return false;"> &gt;&gt; Selanjutnya</button>
						</div>
					</div>

				</div>
				<!-- /.row -->
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
			<?php
		}
		?>
	</div>
</div> <!-- batas row -->
<script>
  $(function(){ // sama dengan $(document).ready(function(){
  	$('#provinsi').change(function(){
   $('#kota').html("<img src='assets/ajax-loader.gif'>"); //Menampilkan loading selama proses pengambilan data kota
    var id = $(this).val(); //Mengambil id provinsi
    $.get("option.php", {id:id}, function(data){
    	$('#kota').html(data);
    });
});
  });

    //Date picker
    $('#tglLahir').datepicker({
    	autoclose: true
    });

</script>