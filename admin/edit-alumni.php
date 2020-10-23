<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Edit Data Alumni
			<small>Edit Alumni</small>
		</h1>
	</section>

	<section class="content">
		<?php 
    //menampilkan pesan jika ada pesan
		if (isset($_SESSION['pesan']) && $_SESSION['pesan'] <> '') {
      // echo '<div class="pesan">'.$_SESSION['pesan'].'</div>';

			echo '<div class="pesan">
			<div class="alert alert-success" role="alert">'.$_SESSION['pesan'].'</div></div>';
      // echo '<div class="alert alert-success fade in">
      // <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$_SESSION['pesan'].'
      // </div>';
		}
    //mengatur session pesan menjadi kosong
		$_SESSION['pesan'] = '';
		?>
		<div class="box box-warning">
			<div class="box-header">
				<div class="box-title"><h4>Edit Alumni Alumni</h4></div>
			</div>
			<?php
			$query = $koneksi->query("SELECT * FROM alumni_profil WHERE id_user = '$_GET[id]'");
			foreach ($query as $data) { 
				?>
				<div class="box-body">
					<form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
						<table class="table table-condensed">
							<thead>
								<th width="20%"></th>
								<th width="40%"></th>
								<th width="40%"></th>
							</thead>
							<tr>
								<td><b>Nama Mahasiswa</b></td>
								<td>
									<input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama_lengkap" value="<?php echo $data['nama_lengkap'];?>">
								</td>
							</tr>
							<tr>
								<td><b>Nim Mahasiswa</b></td>
								<td>
									<input type="text" maxlength="10" class="form-control" placeholder="Masukkan Nomor Induk Mahasiswa" name="nim" value="<?php echo $data['nim'];?>" onkeypress="return hanyaAngka(event)">
								</td>
							</tr>
							<script>
								function hanyaAngka(evt) {
									var charCode = (evt.which) ? evt.which : event.keyCode
									if (charCode > 31 && (charCode < 48 || charCode > 57))
										return false;
									return true;
								}
							</script>
							<tr>
								<td><b>Jenis Kelamin</b></td>
								<td>
									<select class="form-control select2" name="jk" style="width: 100%;">
										<option selected="selected"  value="<?php echo $data['jk'];?>"><?php echo $data['jk'];?></option>
										<option value="Laki-Laki">Laki-Laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><b>Program Studi</b></td>
								<td>
									<select class="form-control select2" name="program_studi" style="width: 100%;">
										<option selected="selected" value="<?php echo $data['program_studi'];?>" ><?php echo $data['program_studi'];?></option>
										<option value="Pendidikan Teknik Elektro (S1)">Pendidikan Teknik Elektro (S1)</option>
										<option value="Teknik Elektro (D3)">Teknik Elektro (D3)</option>
										<option value="Pendidikan Teknik Informatika Dan Komputer (S1)">Pendidikan Teknik Informatika Dan Komputer (S1)</option>
									</select>
								</td>
							</tr>
							<tr>
								<td><b>IPK</b></td>
								<td>
									<input type="text" class="form-control" value="<?php echo $data['ipk'];?>" placeholder="Masukkan IPK Anda - Contoh 3.45" name="ipk">
								</td>
							</tr>
							<tr>
								<td><b>Tahun Masuk</b></td>
								<td>
									<input type="text" class="form-control" placeholder="Tahun Masuk Mahasiswa" name="th_masuk" value="<?php echo $data['th_masuk'];?>">
								</td>
							</tr>
							<tr>
								<td><b>Tahun Lulus</b></td>
								<td>
									<input type="text" class="form-control" placeholder="Tahun Keluar Mahasiswa" name="th_keluar" value="<?php echo $data['th_keluar'];?>">
								</td>
							</tr>

							<tr>
								<td><b>Lama Studi</b></td>
								<td>
									<select name="lamaStudi1" class="form-control">
										<option selected="selected" value="<?php echo $data['lamaStudi1']; ?>"><?php echo $data['lamaStudi1']; ?></option>
										<option value="1 Tahun">1 Tahun</option>
										<option value="2 Tahun">2 Tahun</option>
										<option value="3 Tahun">3 Tahun</option>
										<option value="4 Tahun">4 Tahun</option>
										<option value="5 Tahun">5 Tahun</option>
										<option value="6 Tahun">6 Tahun</option>
										<option value="7 Tahun">7 Tahun</option>
										<option value="8 Tahun">8 Tahun</option>
									</select>
								</td>
								<td>
									<select name="lamaStudi2" class="form-control">
										<option selected="selected" value="<?php echo $data['lamaStudi2']; ?>"><?php echo $data['lamaStudi2']; ?></option>
										<option value="1 Bulan">1 Bulan</option>
										<option value="2 Bulan">2 Bulan</option>
										<option value="3 Bulan">3 Bulan</option>
										<option value="4 Bulan">4 Bulan</option>
										<option value="5 Bulan">5 Bulan</option>
										<option value="6 Bulan">6 Bulan</option>
										<option value="7 Bulan">7 Bulan</option>
										<option value="8 Bulan">8 Bulan</option>
										<option value="9 Bulan">9 Bulan</option>
										<option value="10 Bulan">10 Bulan</option>
										<option value="11 Bulan">11 Bulan</option>
										<option value="12 Bulan">12 Bulan</option>
									</select>
								</td>
							</tr>

							<tr>
								<td>&nbsp;</td>
								<td></td>
							</tr>
						</table>


						<div class="row">
							<div class="col-xs-8">

							</div>
							<!-- /.col -->
							<div class="col-xs-4">
								<button type="submit" name="submit" class="btn btn-success"><i class="fa fa-save"></i> Update</button>
								<input class="btn btn-danger" type="reset" value="Reset">
								<a class="btn btn-primary" onclick="self.history.back()"> <i class="fa fa-arrow-left"></i>  Kembali</a>
							</td>
						</div>
						<!-- /.col -->
					</div>
				</form>
			<?php } ?>
		</div>
	</div>

</div> <!-- content-wrapper -->
</section> <!-- content -->
<?php
include 'global_footer.php';
?>

<?php
$currentDate = gmdate('Y-m-d H:i:s', time()+60*60*8);

if (isset($_POST['submit'])){
	$nama_lengkap = $_POST['nama_lengkap'];
	$nim = $_POST['nim'];
	$jk = $_POST['jk'];
	$program_studi = $_POST['program_studi'];
	$ipk = $_POST['ipk'];
	$th_masuk = $_POST['th_masuk'];
	$th_keluar = $_POST['th_keluar'];
	$lamaStudi1 = $_POST['lamaStudi1'];
	$lamaStudi2 = $_POST['lamaStudi2'];

	$sql1 = $koneksi->query("UPDATE user SET nm_lengkap='".$nama_lengkap."', username='".$nim."' WHERE id_user='".$_GET[id]."'") or die(mysqli_error());

	$sql2 = $koneksi->query("UPDATE alumni_profil SET nama_lengkap='".$nama_lengkap."', nim='".$nim."', jk='".$jk."', program_studi='".$program_studi."', ipk='".$ipk."', th_masuk='".$th_masuk."', th_keluar='".$th_keluar."', lamaStudi1='".$lamaStudi1."', lamaStudi2='".$lamaStudi2."', update_status='".$currentDate."' WHERE id_user='".$_GET[id]."'") or die(mysqli_error());
	
	// echo $sql = $koneksi->query("UPDATE alumni_profil, user SET
	// 	alumni_profil.nama_lengkap ='$nama_lengkap',
	// 	alumni_profil.nim          ='$nim',
	// 	alumni_profil.jk           ='$jk',
	// 	alumni_profil.program_studi='$program_studi',
	// 	alumni_profil.ipk          ='$ipk',
	// 	alumni_profil.th_masuk     ='$th_masuk',
	// 	alumni_profil.th_keluar    ='$th_keluar',
	// 	alumni_profil.lamaStudi1   ='$lamaStudi1',
	// 	alumni_profil.lamaStudi2   ='$lamaStudi2',
	// 	alumni_profil.update_status='$currentDate',
	// 	user.nm_lengkap            ='$nama_lengkap',
	// 	user.username          		   ='$nim'
	// 	WHERE alumni_profil.id_user AND user.id_user='".$_GET[id]."'") or die(mysqli_error());
	$_SESSION['pesan'] = 'Data Berhasil di tambah';
	echo '<script>window.location="alumni-data"</script>';
}
?>