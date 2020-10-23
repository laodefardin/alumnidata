<?php
include '../inc/koneksi.php';
include 'global_header.php';
?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage Lowongan Kerja Alumni
      <small>Pengaturan Lowongan Kerja</small>
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
        <div class="box-title"><h4>Manage Lowongan Kerja</h4></div>
        <br>
        <button type="submit" name="submit" class="btn btn-success" onclick="window.location='tambah-lowongan-kerja'">Tambah Lowongan Kerja</button>
      </div>

      <div class="box-body table-responsive">
       <table id="example1" class="table table-bordered table-striped">
        <thead>
         <th width="5%">No</th>
         <th width="15%">Judul Lowongan Kerja</th>
         <th width="15%">Penulis</th>
         <th width="15%">Tanggal Kirim</th>
         <th width="15%">Aksi</th>
       </thead>
       <?php
       $result = $koneksi->query("SELECT * FROM data_loker ORDER BY tanggal DESC");
       $no=0; foreach ($result as $data): $no++         
       ?>
       <tr>
        <td><?php echo $no;?></td>
        <td><?php echo $data['judul']; ?></td>
        <td><?php echo $data['pengirim']; ?></td>
        <td><?php echo $data['tgl']; ?>
        <?php
        $tanggal = $data["tanggal"];
        if($tanggal==='0000-00-00 00:00:00'){
          echo "Belum Login";
        }else{
          echo time_ago($data['tanggal']);
        } ;?>
      </td>
      <td><a href="hapus-loker.php?id=<?php echo $data['id_loker'];?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-sm"">Hapus</a>
        <a href="edit-lowongan-kerja.php?id=<?php echo $data['id_loker'];?>" class="btn btn-primary btn-sm"">Edit</a>
         <a href="../detail-lowongan-kerja.php?id=<?php echo $data['id_loker'];?>" class="btn btn-success btn-sm""><i class="fa fa-eye"></i></a>
      </td>
    </tr>
  <?php endforeach; ?>
</table>
</div>
</div>


</div> <!-- content-wrapper -->
</section> <!-- content -->


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