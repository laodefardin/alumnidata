<title>Print Data Surat Tugas</title>
<body onload="window.print()">

	<?php
	error_reporting(0);
	session_start();
	include '../../inc/koneksi.php';
	?>

	<table width="98%" border="0" cellpadding="0" cellspacing="0" style='border-collapse:collapse;margin:0 auto'>
		<tbody><tr>
			<td valign="top">
				<table width="98%" border="0" align="left" cellpadding="0" cellspacing="0" style="
				margin-bottom: -30px;">
				<tbody><tr>
					<td width="13%" rowspan="6" valign="top"><div align="center"><img style="width:100px;" src="../../foto/logo.jpg" alt="logo unm"></div></td>
					<td width="1%" rowspan="6">&nbsp;</td>
					<td align="center" width="86%"><h3 style="margin:0;"><strong>KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</strong></h3></td>
				</tr>
				<tr>
					<td align="center"><h3 style="margin:0;"><strong>UNIVERSITAS NEGERI MAKASSAR (UNM)</strong></h3></td>
				</tr>
				<tr>
					<td align="center"><h3 style="margin:0;">FAKULTAS TEKNIK</h3></td>
				</tr>
				<tr>
					<td align="center"><h3 style="margin:0;">JURUSAN PENDIDIKAN TEKNIK ELEKTRO</h3></td>
				</tr>
				<tr>
					<td align="center"><H5> Alamat : Jl. Dg. Tata Raya Parang Tambung Makassar 90224 Telp : (0411) 861935 – 861507</H5></td>
				</tr>
				<tr>
					<td align="center"></td>
				</tr>
			</tbody></table>
			<table width="98%">
				<tr><td><hr style='border:1px solid #000'></tr>
				</table>


				<table width="98%" border="1" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>

					<tr>
						<td style='border:hidden;text-align:center;font-weight:bold' colspan='8'>DAFTAR  ALUMNI JURUSAN PENDIDIKAN TEKNIK ELEKTRO</td>
					</tr>
					<tr>
						<td style='border:hidden;text-align:center;font-weight:bold;padding-bottom:  30px;' colspan='8'>TAHUN  LULUSAN <?php echo $_POST['tahun'] ?> </td>
					</tr>
					<tr>
						<!-- <td style='border:hidden;font-weight:bold' colspan='8'>Jurusan Pendidikan Teknik Elektro</td>
						<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'></td> -->
					</tr>
					<tr>
						<td style='text-align:center;background:#f0f0f0'><b>No.</b></td>
						<td style='background:#f0f0f0'><b>NIM</b></td>
						<td style='background:#f0f0f0'><b>Nama</b></td>
						<td style='background:#f0f0f0'><b>Jenis Kelamin</b></td>
						<td style='background:#f0f0f0'><b>IPK</b></td>
						<td style='background:#f0f0f0'><b>Tahun Masuk</b></td>
						<td style='background:#f0f0f0'><b>Tahun Lulus</b></td>
						<td style='background:#f0f0f0'><b>Lama Studi</b></td>
					</tr>
					<td style='text-align:center;font-weight:bold' colspan='8'>Pendidikan Teknik Informatika dan Komputer S1</td>
					<tr>
						<?php
						$result = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN user ON user.id_user = alumni_profil.id_user WHERE program_studi = 'Pendidikan Teknik Informatika Dan Komputer (S1)' AND th_keluar='$_POST[tahun]' ORDER BY nim ASC");
						$data1 = mysqli_num_rows($result);
						$no=0; foreach ($result as $data): $no++
						?>
						<td><?php echo $no;?></td>
						<td><?php echo $data['nim']; ?></a></td>
						<td><?php echo $data['nama_lengkap']; ?></td>
						<td><?php echo $data['jk']; ?></a></td>
						<td><?php echo $data['ipk']; ?></td>
						<td><?php echo $data['th_masuk']; ?></td>
						<td><?php echo $data['th_keluar']; ?></td>
						<td><?php echo $data['lamaStudi1']; ?> <?php echo $data['lamaStudi2']; ?></td>
					</tr>
				<?php endforeach; ?>
				<td style='text-align:center;font-weight:bold' colspan='8'>Pendidikan Teknik Elektro S1</td>
				<tr>
					<?php
					$result = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN user ON user.id_user = alumni_profil.id_user WHERE program_studi = 'Pendidikan Teknik Elektro (S1)' AND th_keluar='$_POST[tahun]' ORDER BY nim ASC");
					$data2 = mysqli_num_rows($result);
					$no=0; foreach ($result as $data): $no++
					?>
					<td><?php echo $no;?></td>
					<td><?php echo $data['nim']; ?></a></td>
					<td><?php echo $data['nama_lengkap']; ?></td>
					<td><?php echo $data['jk']; ?></a></td>
					<td><?php echo $data['ipk']; ?></td>
					<td><?php echo $data['th_masuk']; ?></td>
					<td><?php echo $data['th_keluar']; ?></td>
					<td><?php echo $data['lamaStudi1']; ?> <?php echo $data['lamaStudi2']; ?></td>
				</tr>
			<?php endforeach; ?>
		</tr>
		<td style='text-align:center;font-weight:bold' colspan='8'>Teknik Elektro D3</td>
		<tr>
			<?php
			$result = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN user ON user.id_user = alumni_profil.id_user WHERE program_studi = 'Teknik Elektro (D3)' AND th_keluar='$_POST[tahun]' ORDER BY nim ASC");
			$data3 = mysqli_num_rows($result);
			$no=0; foreach ($result as $data): $no++
			?>
			<td><?php echo $no;?></td>
			<td><?php echo $data['nim']; ?></a></td>
			<td><?php echo $data['nama_lengkap']; ?></td>
			<td><?php echo $data['jk']; ?></a></td>
			<td><?php echo $data['ipk']; ?></td>
			<td><?php echo $data['th_masuk']; ?></td>
			<td><?php echo $data['th_keluar']; ?></td>
			<td><?php echo $data['lamaStudi1']; ?> <?php echo $data['lamaStudi2']; ?></td>
		</tr>
	<?php endforeach; ?>
</tr>
<tr>
	<td style='border-right:hidden;border-left:hidden;text-align:center;font-weight:bold' colspan='8'>Jumlah Alumni</td>
</tr>
<tr>
	<td style='border-right:hidden;border-left:hidden;text-align:center' colspan='8'>Pendidikan Teknik Informatika dan Komputer S1 = <?php echo $data1; ?></td>
</tr>
<tr>
	<td style='border-right:hidden;border-left:hidden;text-align:center' colspan='8'>Pendidikan Teknik Elektro S1 = <?php echo $data2; ?></td>
</tr>
<tr>
	<td style='border-right:hidden;border-left:hidden;text-align:center' colspan='8'>Teknik Elektro D3 = <?php echo $data3; ?></td>
</tr>
<tr>
	<td style='border:hidden' colspan='8'>Semoga Tuhan Yang Maha Esa Merahmati Kita Semua, Amin.</td>
</tr>

<tr>
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left">Makassar, <?php echo tgl_indo(date("Y-m-d")); ?></div></td>
</tr>

<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left">Ketua Jurusan</div></td><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="right">Ketua IKA FT UNM</div></td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"><b><u>
	<?php
	$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '6'");
	foreach ($profil as $tampil2) {} 
		?>
	<?php
	$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '1'");
	foreach ($profil as $tampil1) { 
	}
	?><?php echo $tampil1['nama']; ?></u></b></div></td>
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="right"><b><u><?php echo $tampil2['nama']; ?></u></b></div></td></tr>
	<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left">NIP. <?php echo $tampil1['nip_dosen']; ?></div></td><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="right">NIP. <?php echo $tampil2['nip_dosen']; ?></div></td></tr>
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
