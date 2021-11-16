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
				<table width="98%" border="0" align="left" cellpadding="0" cellspacing="0">
				<tbody><tr>
				<!-- <div align="center"><img style="" src="../../image/KOP.png" alt="logo unm"></div> -->

					<td width="13%" rowspan="6" valign="top"><div align="center"><img style="width:85px;" src="../../foto/logo.jpg" alt="logo unm"></div></td>
					<td width="1%" rowspan="6">&nbsp;</td>
					<td align="center" width="86%"><h3 style="margin:0;"><strong>KEMENTERIAN PENDIDIKAN DAN KEBUDAYAAN</strong></h3></td>
				</tr>
				<tr>
					<td align="center"><h3 style="margin:0;"><strong>UNIVERSITAS NEGERI MAKASSAR (UNM)</strong></h3></td>
				</tr>
				<tr>
					<td align="center"><h3 style="margin:0;">PROGRAM PASCASARJANA</h3></td>
				</tr>
				<tr>
					<td align="center"><H5> Alamat : Jl. Bonto Langkasa, Kampus UNM Gunungsari Baru, Makassar - 90222 Laman: http://pps.unm.ac.id ; e-mail: pasca@unm.ac.id</H5></td>
				</tr>
				<tr>
					<td align="center"></td>
				</tr>
			</tbody></table>
			<table width="98%">
				<tr><td><hr style='border:1px solid #000'></tr>
				</table>
<p></p><p></p>


				<table width="98%" border="1" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto;font-size: 12;'>

					<tr>
						<td style='border:hidden;text-align:center;font-weight:bold' colspan='9'>DAFTAR  ALUMNI PROGRAM PASCASARJANA UNIVERSITAS NEGERI MAKASSAR</td>
					</tr>
					<tr>
						<td style='text-transform: uppercase;border:hidden;text-align:center;font-weight:bold;' colspan='8'>Program Studi <?php echo $_POST['program_studi'] ?>  </td>
					</tr>
					<tr>
						<td style='text-transform: uppercase;border:hidden;text-align:center;font-weight:bold;padding-bottom:  30px;' colspan='9'>TAHUN LULUSAN <?php echo $_POST['tahun'] ?>  </td>
					</tr>
					<tr>
						<!-- <td style='border:hidden;text-align:center;font-weight:bold' ></td> -->
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
					<tr>
						<?php
						$result = $koneksi->query("SELECT * FROM alumni_profil LEFT OUTER JOIN user ON user.id_user = alumni_profil.id_user WHERE th_keluar='$_POST[tahun]' AND program_studi = '$_POST[program_studi]' ORDER BY nim ASC");
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

				<tr>
					<td style='border-right:hidden;border-left:hidden;' colspan='8'><b>Jumlah Alumni : Program Studi <?php echo $_POST['program_studi'] ?> Tahun <?php echo $_POST['tahun'] ?> = <?php echo $data1; ?></b></td>
				</tr>
				<tr>
					<td style='border-right:hidden;border-left:hidden;text-align:center' colspan='8'></td>
				</tr>


<tr>
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='3'><div align="left" style="margin-top: 20px;"></td>
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: 20px;margin-left: 150px;">Makassar, <?php echo tgl_indo(date("Y-m-d")); ?></div></td>
</tr>

<tr>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='3'><div align="left" style="margin-top: -10px;"></div></td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: -10px;margin-left: 150px;">Direktur</div></td>
</tr>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='3'><div align="left" style="margin-top: -10px;"></div></td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: -10px;margin-left: 150px;">Program Pascasarjana</div></td>
</tr>
</tr>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='3'><div align="left" style="margin-top: -10px;"></div></td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='5'><div align="left" style="margin-top: -10px;margin-left: 150px;">Universitas Negeri Makassar</div></td>
</tr>

<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div></td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div></td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div></td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div></td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div>&nbsp;</td>
<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'><div align="left"></div></td></tr>
<tr><td style='border:hidden;text-align:center;font-weight:bold' colspan='3'><div align="left"><b><u>
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
	<td style='border:hidden;text-align:center;font-weight:bold' colspan='3'>
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
