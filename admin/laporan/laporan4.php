<?php
error_reporting(0);
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-tahun-wisuda.xls");
include '../../inc/koneksi.php';
?>

<table width="98%" border="0" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='9'><h3 style="margin-bottom: -15px;"><strong>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='9'><h3 style="margin-bottom: -15px;"><strong>UNIVERSITAS NEGERI MAKASSAR (UNM)</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='9'><h3 style="margin-bottom: -15px;"><strong>PROGRAM PASCASARJANA</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='9'><h5 style="margin-bottom: -15px;"><strong>Alamat : Jl. Bonto Langkasa, Kampus UNM Gunungsari Baru, Makassar - 90222 Laman: http://pps.unm.ac.id ; e-mail: pasca@unm.ac.id</strong></h5></td>
	</tr>
	<p></p>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='9'>DAFTAR  ALUMNI </td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='9'>TAHUN  LULUSAN <?php echo $_POST['tahun'] ?> </td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='9'>PROGRAM PASCASARJANA UNIVERSITAS NEGERI MAKASSAR</td>
	</tr>
</table>
	<table width="98%" border="1" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
		<tr>
			<td style='text-align:center;background:#f0f0f0'><b>No.</b></td>
			<td style='background:#f0f0f0'><b>NIM</b></td>
			<td style='background:#f0f0f0'><b>Nama</b></td>
			<td style='background:#f0f0f0'><b>Jenis Kelamin</b></td>
			<td style='background:#f0f0f0'><b>IPK</b></td>
			<td style='background:#f0f0f0'><b>Program Studi</b></td>
			<td style='background:#f0f0f0'><b>Tahun Masuk</b></td>
			<td style='background:#f0f0f0'><b>Tahun Lulus</b></td>
			<td style='background:#f0f0f0'><b>Lama Studi</b></td>
		</tr>
		<tr>
			<?php
			$result = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN user ON user.id_user = alumni_profil.id_user WHERE th_keluar='$_POST[tahun]' ORDER BY program_studi ASC");
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
		</tr>
	<?php endforeach; ?>
	
	
</tr>

</tr>
</table>
<table width="98%" border="0" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>

<tr>
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='6'><div align="left" style="margin-top: 20px;"></td>
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: 20px;">Makassar, <?php echo tgl_indo(date("Y-m-d")); ?></div></td>
</tr>

<tr>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='6'><div align="left" style="margin-top: -10px;"></div></td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: -10px;">Direktur</div></td>
</tr>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='6'><div align="left" style="margin-top: -10px;"></div></td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: -10px;">Program Pascasarjana</div></td>
</tr>
</tr>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='6'><div align="left" style="margin-top: -10px;"></div></td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: -10px;">Universitas Negeri Makassar</div></td>
</tr>

<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div></td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='6'><div align="left"><b><u>
	<?php
	$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '1'");
	foreach ($profil as $tampil2) {} ?>
	<?php
	$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '6'");
	foreach ($profil as $tampil1) { 
	}
	?></div></td>

		<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'>
	<div align="left" style=""><?php echo $tampil1['nama']; ?></div>

	</td>
	</tr>

	<tr>
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='6'>
	<div align="left" style="margin-top: -10px;"></div></td>
	
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'>
	<div align="left" style="margin-top: -10px;">NIP. <?php echo $tampil1['nip_dosen']; ?></div>

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