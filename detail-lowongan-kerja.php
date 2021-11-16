<?php
include 'global_header.php';
include 'inc/koneksi.php';
?>
<?php
$sql = $koneksi->query("SELECT * FROM data_loker WHERE id_loker='$_GET[id]'");
while($data = mysqli_fetch_array($sql)){
  ?>
  <div class="content-wrapper">
    <div class="container ua-sigle-article no-padding">
    <div class="top">
      <div class="container">
        <h2 class="titletop">
          <?php echo $data['judul']?><br>
          <span></span>
        </h2>
      </div>
    </div>
    
      <!-- Content Header (Page header) -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row"> <!-- awal baris row -->
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-9 articles" id="site-content"> <!-- awal baris colom -->
          <ol class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li><a href="lowongan-kerja">Lowongan Kerja</a></li>
            <li class="active"><?php echo $data['judul']?></li>
          </ol>
          <div class="box-content">
            <div class="box-header with-border1" style="padding: 0px 0px 10px;">
              <h3 class="box-title"><b><?php echo $data['judul']?></b></h3>
            </div>
            <article class="posts">
              <span>&nbsp;<?php echo $data['pengirim']?></span>&nbsp;
              <span>-&nbsp;Lowongan ini diiklankan sejak <?php echo tgl_indo($data['tgl'])?>
              <?php
              $tanggal = $data["tgl"];
              if($tanggal==='0000-00-00 00:00:00'){
                echo "Belum Login";
              }else{
                echo time_ago($data['tgl']);
              } ;?>
            </span>
            <div class="detail-post" style="font-size: 17px; line-height: 22px; padding-top: 10px;">
              <p><?php echo $data['isi'];?></p>
              <p style=" border-bottom: 1px dashed #DDD; padding-bottom: 20px; margin-bottom: 2px;">
              </div>
            </article>
          <?php } ?>
        </div>
      </div>
      <?php include 'global_sidebar.php'; ?>
    </div>
  </section>

</div>
<!-- /.container -->
</div>
<!-- /.content-wrapper -->

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