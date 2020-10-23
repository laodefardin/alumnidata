<?php
include '../inc/koneksi.php';
session_start();
?>
<div class="row">
	<div class="col-lg-12" >
		<h4>Lengkapi Berkas Anda dan dapatkan User login untuk mendapatkan informasi terupdate tentang Alumni Universitas Negeri Makassar Fakultas Teknik Jurusan Pendidikan Teknik Elektro</h4>
		<p style="color:red">* Pastikan data yang Anda masukkan benar</p>
	</div>
	<?php
	if(isset($_GET['preview'])){
		$id = $_SESSION['nim'];
		$result = $koneksi->query("SELECT * FROM alumni_profil INNER JOIN user ON user.id_user = alumni_profil.id_user WHERE nim = '$id'");
		foreach ($result as $data){
			$_SESSION['nim'] = $data["nim"];
			?>

			<div class="col-sm-3">
				<button id="formulir" class="btn btn-success" onclick="formulir('');return false;"><i class="fa fa-list"></i> Lengkapi Berkas</button>
			</div>
			&nbsp;
		</div>

		<div class="row" style="padding-top:  9px;">
		<div class="col-sm-8">
			<div class="box-body no-padding">
				<table>
					<thead>
						<th width="20%"></th>
						<th width="40%"></th>
					</thead>
					<tr>
						<td><b>Nama Lengkap</b></td>
						<td>
							: <?php echo $data['nama_lengkap']; ?>
						</td>
					</tr>
					<tr>
						<td><b>Nim Mahasiswa</b></td>
						<td>
							: <?php echo $data['nim']; ?>
						</td>
					</tr>
					<tr>
						<td><b>Jenis Kelamin</b></td>
						<td>
							: <?php echo $data['jk']; ?>
						</td>
					</tr>
					<tr>
						<td><b>Judul Tugas Akhir</b></td>
						<td>
							: <?php echo $data['judul_skripsi']; ?>
						</td>
					</tr>
					<tr>
						<td><b>Tempat Lahir</b></td>
						<td>
							: <?php echo $data['tmpt_lahir']; ?>
						</td>
					</tr>
					<tr>
						<td><b>Tanggal Lahir</b></td>
						<td>
							: <?php echo $data['tanggal_lahir']; ?>
						</td>
					</tr>
					<tr>
						<td><b>No Telpon</b></td>
						<td>
							: <?php echo $data['no_telp']; ?>
						</td>
					</tr>
					<tr>
						<td><b>Jurusan</b></td>
						<td>
							: Pendidikan Teknik Elektro
						</td>
					</tr>
					<tr>
						<td><b>Program Studi</b></td>
						<td>
							: <?php echo $data['program_studi']; ?>
						</td>
					</tr>

					<tr>
						<td>&nbsp;</td>
						<td></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="col-sm-2 col-md-2 col-lg-2 " align="center" style="margin-bottom: 25px"> 
			<?php
			$foto = $data["foto"];
			if($foto===''){?>
			<img style="height: 200px"  src="foto/anonim.png">
			<?php } else {?>
			<img style="height: 200px;width:100%"  src="foto/alumni/<?php echo $data['foto']; ?>"> 
			<?php }; ?>
		</div>
		</div>

		<?php }; ?>
		<?php } ?>