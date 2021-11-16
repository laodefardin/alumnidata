<?php
include 'global_header.php';
include 'inc/koneksi.php';
?>

<div class="content-wrapper">
  <div class="container ua-sigle-article no-padding">
  <div class="img-paralax">
    <div class="container">
      <div class="paralax-title">
        Daftar Berita Portal Alumni Pascasarjana Universitas Negeri Makassar<br>
      </div>
    </div>
  </div>

  <!-- <div class="top">
    <div class="container">
      <h2 class="titletop">
        Daftar Berita Portal Alumni Pascasarjana Universitas Negeri Makassar<br>
        <span></span>
      </h2>
    </div>
  </div> -->
  

    <!-- Content Header (Page header) -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- awal baris row -->
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-9 articles" id="site-content">
          <!-- awal baris colom -->
          <div class="box-content">
            <div class="box-header with-border1">
              <h3 class="box-title">
                <span><b>Latest News</b></span></h3>
            </div>
            <div class="box-body">
              <?php
            include 'inc/koneksi.php';
            $page = (isset($_GET['page']))? $_GET['page'] : 1;
            $limit = 5;
            $limit_start = ($page - 1) * $limit;
            $sql = mysqli_query($koneksi, "SELECT * FROM data_artikel ORDER BY tanggal DESC LIMIT ".$limit_start.",".$limit);
            $no = $limit_start + 1;
            while ($data = mysqli_fetch_array($sql)) {
              ?>
              <div class="prof-list-item">
                <div class="list-event-thumb">
                  <a href="newsdetail?id=<?php echo $data['id_artikel']; ?>">
                    <img alt="<?php echo $data['judul']?>" src="admin/upload/<?php echo $data['foto'];?>">
                  </a>
                </div>
                <div class="list-event-header">
                  <span class="event-date small-text"><i class="fa fa-calendar-o"></i>
                    <?php echo tgl_indo($data['date'])?></span>&nbsp;
                  <span class="event-place small-text"><i class="fa fa-user"></i> <?php echo $data['pengirim']?></span>
                </div>
                <h5 class="event-title">
                  <a href="newsdetail?id=<?php echo $data['id_artikel']; ?>"><?php echo $data['judul']?></a>
                </h5>
                <p style="text-align: justify;">
                  <?php echo $data= substr($data['isi'],0,120);?>
                  selengkapnya...
                </p>
              </div>

              <?php 
             $no++;
           } ?>
              <ul class="pagination pagination-sm">
                <?php 
             if($page == 1){
               ?>
                <li class="disabled"><a href="#">First</a></li>
                <li class="disabled"><a href="#">&laquo;</a></li>
                <?php
             }else{
              $link_prev = ($page > 1)? $page - 1 : 1;
              ?>
                <li><a href="berita.php?page=1">First</a></li>
                <li><a href="berita.php?page=<?php echo $link_prev; ?>">&laquo;</a></li>
                <?php 
            }?>
                <?php 
            $sql2 = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM data_artikel");
            $get_jumlah = mysqli_fetch_array($sql2);

            $jumlah_page = ceil($get_jumlah['jumlah'] / $limit);
            $jumlah_number = 3;
            $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
            $end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;

            for($i = $start_number; $i <= $end_number; $i++){
              $link_active = ($page == $i)? ' class="active"' : '';
              ?>
                <li<?php echo $link_active; ?>><a href="berita.php?page=<?php echo $i; ?>"
                    style="background-color: #444444;border-color: #444444;"><?php echo $i; ?></a></li>
                  <?php } ?>

                  <?php
            if ($page == $jumlah_page) {
              ?>
                  <li class="disabled"><a href="#">&raquo;</a></li>
                  <li class="disabled"><a href="#">Last</a></li>
                  <?php
            }else{
              $link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
              ?>
                  <li><a href="berita.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
                  <li><a href="berita.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
                  <?php
            }?>
              </ul>
            </div>
          </div> <!-- /.box-body -->
        </div> <!-- akhir baris colom -->

        <?php include 'global_sidebar.php'; ?>
      </div> <!-- akhir baris row -->

      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.container -->
</div>
<!-- /.content-wrapper -->
<?php
include 'global_footer.php';
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