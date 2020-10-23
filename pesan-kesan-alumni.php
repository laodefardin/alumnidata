<?php
include 'inc/koneksi.php';
include 'global_header.php';
?>

<div class="content-wrapper" style="min-height: 901px;">
	<div class="img-paralax hidden-xs">
		<div class="container">
			<div class="paralax-title">
				Daftar Pesan dan Kesan Alumni
			</div>
		</div>
	</div>
	<div class="container">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		</section>

		<section class="content">
			<div class="box box-warning">
				<div class="box-header">
					<div class="box-title"><h2>Pesan Dan Kesan Alumni Fakultas Teknik Jurusan Pendidikan Teknik Elektro</h2></div>
				</div>
				<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered">
						<thead class="bg-yellow">
							<th width="2%">No</th>
							<th width="15%">Nama Alumni</th>
							<th width="10%">Pesan</th>
							<th width="15%">Kesan</th>
							<th width="15%">Tanggal Kirim</th>
							
						</thead>
						<?php
						$result = $koneksi->query("SELECT * FROM data_pesankesan");

						$no=0; foreach ($result as $data): $no++         
						?>
						<tr>
							<td><?php echo $no;?></td>
							<td><?php echo $data['penulis']; ?></a></td>
							<td><?php echo $data['pesan']; ?></td>
							<td><?php echo $data['kesan']; ?></td>
							<td>
								<?php
								$tanggal = $data["tanggal"];
								if($tanggal==='0000-00-00 00:00:00'){
									echo "tidak ada";
								}else{
									echo time_ago($data['tanggal']);
								} ;?>
								<span class="label bg-green"><?php echo $data['tanggal']; ?></span>
							</td>
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>


	</section>
	<!-- /.content -->
	<!-- /.content -->
</div></div>

<?php
include 'global_footer.php';
?>

<?php
/**
 * @package  : BismaLabs Official Site
 * @author   : Bisma Labs - Developer <developer@bismalabs.co.id-->
 * @since    : 2017
 * @license  : https://bismalabs.co.id/
 */
function time_ago($datetime, $full = false)
{
	$today = time();
	$createdday = strtotime($datetime);
	$datediff = abs($today - $createdday);
	$difftext = "";
	$years = floor($datediff / (365 * 60 * 60 * 24));
	$months = floor(($datediff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
	$days = floor(($datediff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
	$hours = floor($datediff / 3600);
	$minutes = floor($datediff / 60);
	$seconds = floor($datediff);
        //year checker
	if ($difftext == "") {
		if ($years > 1)
			$difftext = $years . " tahun yang lalu";
		elseif ($years == 1)
			$difftext = $years . " tahun yang lalu";
	}
        //month checker
	if ($difftext == "") {
		if ($months > 1)
			$difftext = $months . " bulan yang lalu";
		elseif ($months == 1)
			$difftext = $months . " bulan yang lalu";
	}
        //month checker
	if ($difftext == "") {
		if ($days > 1)
			$difftext = $days . " hari yang lalu";
		elseif ($days == 1)
			$difftext = $days . " hari yang lalu";
	}
        //hour checker
	if ($difftext == "") {
		if ($hours > 1)
			$difftext = $hours . " jam yang lalu";
		elseif ($hours == 1)
			$difftext = $hours . " jam yang lalu";
	}
        //minutes checker
	if ($difftext == "") {
		if ($minutes > 1)
			$difftext = $minutes . " menit yang lalu";
		elseif ($minutes == 1)
			$difftext = $minutes . " menit yang lalu";
	}
        //seconds checker
	if ($difftext == "") {
		if ($seconds > 1)
			$difftext = $seconds . " detik yang lalu";
		elseif ($seconds == 1)
			$difftext = $seconds . " detik yang lalu";
	}
	return $difftext;
}

?>