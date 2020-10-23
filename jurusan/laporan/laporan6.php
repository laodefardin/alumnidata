<?php
error_reporting(0);
session_start();
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan-tahun-wisuda-programstudi.xls");
include '../../inc/koneksi.php';
?>

<table width="98%" border="0" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='8'><h3 style="margin-bottom: -15px;"><strong>KEMENTERIAN RISET, TEKNOLOGI DAN PENDIDIKAN TINGGI</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='8'><h3 style="margin-bottom: -15px;"><strong>UNIVERSITAS NEGERI MAKASSAR (UNM)</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='8'><h3 style="margin-bottom: -15px;"><strong>FAKULTAS TEKNIK</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='8'><h3 style="margin-bottom: -15px;"><strong>JURUSAN PENDIDIKAN TEKNIK ELEKTRO</strong></h3></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='8'><h5 style="margin-bottom: -15px;"><strong>Alamat : Jl. Dg. Tata Raya Parang Tambung Makassar 90224 Telp : (0411) 861935-861507</strong></h5></td>
	</tr>
	<p></p>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='8'>DAFTAR  ALUMNI JURUSAN PENDIDIKAN TEKNIK ELEKTRO</td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='8'>Program Studi <?php echo $_POST['program_studi'] ?></td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='8'>TAHUN LULUSAN <?php echo $_POST['tahun'] ?> </td>
	</tr>
</table>
<table width="98%" border="1" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
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
</table>
<table width="98%" border="0" align="center" cellpadding="5" cellspacing="2" style='border-collapse:collapse;margin:0 auto'>
	<tr>
		<td style='border-right:hidden;border-left:hidden;text-align:center;font-weight:bold' colspan='8'>Jumlah Alumni :</b> Program Studi <?php echo $_POST['program_studi'] ?> Tahun <?php echo $_POST['tahun'] ?> = <?php echo $data1; ?> </td>
	</tr>
	<tr>
		<td style='border:hidden' colspan='8'>Semoga Tuhan Yang Maha Esa Merahmati Kita Semua, Amin.</td>
	</tr>

	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='8'><div align="left">Makassar, <?php echo tgl_indo(date("Y-m-d")); ?></div></td>
	</tr>

	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'>
			<div align="left">Ketua Jurusan</div>
		</td>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'>
			<div align="right">Ketua IKA FT UNM</div>
		</td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'>
			<div align="left"></div>&nbsp;
		</td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'>
			<div align="left"></div>&nbsp;
		</td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'>
			<div align="left"></div>&nbsp;
		</td>
	</tr>
	<tr>
		<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'>
			<div align="left"><b><u>
				<?php
				$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '6'");
				foreach ($profil as $tampil2) {} 
					?>
				<?php
				$profil = $koneksi->query("SELECT * FROM data_jurusan WHERE id_jurusan = '1'");
				foreach ($profil as $tampil1) { 
				}
				?><?php echo $tampil1['nama']; ?></u></b></div>
			</td>
			<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'>
				<div align="right"><b><u><?php echo $tampil2['nama']; ?></u></b></div>
			</td>
		</tr>
		<tr>
			<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'>
				<div align="left">NIP. <?php echo $tampil1['nip_dosen']; ?></div>
			</td>
			<td style='border:hidden;text-align:center;font-weight:bold' colspan='4'>
				<div align="right">NIP. <?php echo $tampil2['nip_dosen']; ?></div>
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