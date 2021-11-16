<?php
error_reporting(0);
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-tahun-wisuda.xls");
include '../../inc/koneksi.php';
?>

<table width="98%" border="0" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='15'><h3 style="margin-bottom: -15px;"><strong>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='15'><h3 style="margin-bottom: -15px;"><strong>UNIVERSITAS NEGERI MAKASSAR (UNM)</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='15'><h3 style="margin-bottom: -15px;"><strong>PROGRAM PASCASARJANA</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='15'><h5 style="margin-bottom: -15px;"><strong>Alamat : Jl. Bonto Langkasa, Kampus UNM Gunungsari Baru, Makassar - 90222 Laman: http://pps.unm.ac.id ; e-mail: pasca@unm.ac.id</strong></h5></td>
	</tr>
	<p></p>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='15'>DAFTAR  ALUMNI PROGRAM PASCASARJANA UNIVERSITAS NEGERI MAKASSAR</td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='15'>YANG TELAH BEKERJA</td>
	</tr>
</table>
<table width="98%" border="1" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
	<tr>
		<td style='text-align:center;background:#f0f0f0'><b>No.</b></td>
		<td style='background:#f0f0f0'><b>NIM</b></td>
		<td style='background:#f0f0f0'><b>Nama</b></td>
		<td style='background:#f0f0f0'><b>Jenis Kelamin</b></td>
		<td style='background:#f0f0f0'><b>IPY</b></td>
		<td style='background:#f0f0f0'><b>Program Studi</b></td>
		<td style='background:#f0f0f0'><b>Tahun Masuk</b></td>
		<td style='background:#f0f0f0'><b>Tahun Lulus</b></td>
		<td style='background:#f0f0f0'><b>Lama Studi</b></td>
		<td style='background:#f0f0f0'><b>Pekerjaan</b></td>
		<td style='background:#f0f0f0'><b>Perusahaan/Instansi</b></td>
		<td style='background:#f0f0f0'><b>Gaji</b></td>
		<td style='background:#f0f0f0'><b>Alamat Bekerja</b></td>
		<td style='background:#f0f0f0'><b>Lama Bekerja</b></td>
		<td style='background:#f0f0f0'><b>Kesesuain Bidang Pekerjaan dengan Jurusan</b></td>
	</tr>
	<tr>
		<?php
		$result = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN user ON user.id_user = alumni_profil.id_user WHERE statusalumni = 'bekerja' ORDER BY program_studi ASC");
		$data1 = mysqli_num_rows($result);
		$no=0; foreach ($result as $data): $no++
		?>
		<td><?php echo $no;?></td>
		<td>'<?php echo $data['nim']; ?></a></td>
		<td><?php echo $data['nama_lengkap']; ?></td>
		<td><?php echo $data['jk']; ?></a></td>
		<td>'<?php echo $data['ipk']; ?></td>
		<td><?php echo $data['program_studi']; ?></td>
		<td><?php echo $data['th_masuk']; ?></td>
		<td><?php echo $data['th_keluar']; ?></td>
		<td><?php echo $data['lamaStudi1']; ?> <?php echo $data['lamaStudi2']; ?></td>
		<td><?php echo $data['posisi']; ?></td>
		<td><?php echo $data['nama_perusahaan']; ?></td>
		<td><?php echo $data['alamat_bekerja']; ?></td>
		<td><?php echo $data['gaji']; ?></td>
		<td><?php echo $data['lama_bekerja']; ?></td>
		<td><?php echo $data['kesesuaian']; ?></td>
	</tr>
<?php endforeach; ?>
</tr>
</table>
<table width="98%" border="0" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
	<!-- <tr>
		<td style='border-right:hidden;border-left:hidden;text-align:center;font-weight:bold' colspan='15'>Jumlah Alumni</td>
	</tr>
	<tr>
		<td style='border-right:hidden;border-left:hidden;text-align:center' colspan='15'>Pendidikan Teknik Informatika dan Komputer S1 = <?php echo $data1; ?></td>
	</tr>
	<tr>
		<td style='border-right:hidden;border-left:hidden;text-align:center' colspan='15'>Pendidikan Teknik Elektro S1 = <?php echo $data2; ?></td>
	</tr>
	<tr>
		<td style='border-right:hidden;border-left:hidden;text-align:center' colspan='15'>Teknik Elektro D3 = <?php echo $data3; ?></td>
	</tr> -->

	
<tr>
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='13'><div align="left" style="margin-top: 20px;"></td>
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: 20px;margin-left: 150px;">Makassar, <?php echo tgl_indo(date("Y-m-d")); ?></div></td>
</tr>

<tr>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='13'><div align="left" style="margin-top: -10px;"></div></td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: -10px;margin-left: 150px;">Direktur</div></td>
</tr>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='13'><div align="left" style="margin-top: -10px;"></div></td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: -10px;margin-left: 150px;">Program Pascasarjana</div></td>
</tr>
</tr>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='13'><div align="left" style="margin-top: -10px;"></div></td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: -10px;margin-left: 150px;">Universitas Negeri Makassar</div></td>
</tr>

<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div></td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='13'><div align="left"><b><u>
	<?php
	$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '1'");
	foreach ($profil as $tampil2) {} ?>
	<?php
	$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '6'");
	foreach ($profil as $tampil1) { 
	}
	?></div></td>

		<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'>
	<div align="left" style="margin-left: 150px;"><?php echo $tampil1['nama']; ?></div>

	</td>
	</tr>

	<tr>
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='13'>
	<div align="left" style="margin-top: -10px;"></div></td>
	
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'>
	<div align="left" style="margin-top: -10px;margin-left: 150px;">NIP. <?php echo $tampil1['nip_dosen']; ?></div>

	</td>
</tr>
</table>


	<?php
	function tgl_indo($tanggal){
		$bulan = array (
			1 =>   'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
		);
		$pecahkan = explode('-', $tanggal);

  // variabel pecahkan 0 = tanggal
  // variabel pecahkan 1 = bulan
  // variabel pecahkan 2 = tahun

		return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
	}
	?>