<?php
include 'global_header.php';
include 'inc/koneksi.php';
?>
<?php
$sql = $koneksi->query("SELECT * FROM data_artikel LEFT OUTER JOIN data_kategori ON data_kategori.id_kategori = data_artikel.id_kategori WHERE id_artikel='$_GET[id]'");
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
    <!-- <div class="container ua-sigle-article no-padding"> -->
      <!-- Content Header (Page header) -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row"> <!-- awal baris row -->
        <!-- <div class="col-md-1"></div> -->
        <div class="col-md-9 articles" id="site-content"> <!-- awal baris colom -->
          <ol class="breadcrumb">
            <li><a href="index">Home</a></li>
            <li><a href="berita">Berita</a></li>
            <li class="active"><?php echo $data['judul']?></li>
          </ol>
          <div class="box-content">
            <article class="posts">
              <div class="blog-post-image">
                <img class="img-responsive" src="admin/upload/<?php echo $data['foto'];?>">
                <div class="blog-post-meta">
                  <ul>
                    <li><i class="fa fa-calendar-o"></i><?php echo tgl_indo($data['date'])?></li>
                  </ul>
                </div>
                <div class="blog-post-meta2">
                  <ul>
                    <li><i class="fa fa-user"></i><?php echo $data['pengirim']?></li>
                  </ul>
                </div>
                <div class="blog-post-meta3">
                  <ul>
                    <li><i class="fa fa-tags"></i><?php echo $data['nama_kategori']?></li>
                  </ul>
                </div>
              </div>

              <div class="blog-post-inner">
                <h3><?php echo $data['judul']?></h3>
                
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