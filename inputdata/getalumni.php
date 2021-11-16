<?php
include '../inc/koneksi.php';
session_start();
?>


<?php
if(isset($_GET['getAlumni'])){
	$cari = $_GET['getAlumni'];
	$query = "SELECT * FROM alumni_profil LEFT OUTER JOIN user ON user.id_user = alumni_profil.id_user WHERE nim ='$cari'";
	$result = $koneksi->query($query);
						if($result->num_rows == 0) { // Jika gagal menjalankan query
							echo "<br><div class=\"callout callout-danger\">
							<p>NIM yang anda masukkan belum terdaftar pada database alumni, silahkan hubungi admin Portal Alumni PPs UNM untuk info lebih lanjut.</p>
							</div>";
} else { // Jika berhasil
	$no = 1;
	while($data = $result->fetch_array()){
		$_SESSION['data_id'] = $data["id_user"];
		$_SESSION['nim'] = $data['nim'];
		?>
		<table width="100%" class="table table-bordered table-striped" style="border-collapse:collapse">
			<thead class="bg-gray">
				<tr>
					<th style="text-align:center">No.</th>
					<th style="text-align:center">Nim</th>
					<th>Nama Lengkap</th>
					<th style="text-align:center">Jenis Kelamin</th>
					<th>Program Studi</th>
					<th style="text-align:center">Tahun Masuk</th>
					<th></th>
				</tr>
			</thead>
			
			<tr>
				<td style="text-align:center"><?php echo $no++; ?></td>
				<td style="text-align:center"><?php echo $data['nim']; ?></td>
				<td><?php echo $data['nama_lengkap']; ?></td>
				<td style="text-align:center"><?php echo $data['jk']; ?></td>
				<td><?php echo $data['program_studi']; ?></td>
				<td style="text-align:center"><?php echo $data['th_masuk']; ?></td>
				<td>
					<?php
					$aktif = $data["active"];
					if($aktif==='0'){?>
					<button class="btn btn-primary" id="preview" onclick="preview('');return false"><i class="fa fa-eye"></i> Preview</button>
					<?php } else {?>
					<?php echo "<span class='label bg-green'>Berkas ini Sudah Lengkap</span>
					<a href='login' class='btn btn-primary btn-xs' role='button'Login</a>login";?>
					</td>
					<?php }	?>
					<!-- <td><button class="btn btn-primary" id="preview" onclick="preview('837');return false"><i class="fa fa-eye"></i> Preview</button></td> -->
				</tr>
				<?php }	?>
				
			</table>
			
			<?php } ?>
			<?php } ?>
	<script>
					$(function(){
   $("#loading-status").ajaxStart(function(){
      $(this).show();
   }).ajaxStop(function(){
      $(this).hide();
   });
});
	</script>