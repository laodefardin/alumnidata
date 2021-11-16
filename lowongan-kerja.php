<?php
include 'global_header.php';
include 'inc/koneksi.php';
?>

<div class="content-wrapper">
  <div class="container ua-sigle-article no-padding">
<div class="img-paralax">
		<div class="container">
			<div class="paralax-title">
				Lowongan Kerja
			</div>
		</div>
	</div>
<!--   
  <div class="top">
    <div class="container">
      <h2 class="titletop">
        Lowongan Kerja<br>
        <span></span>
      </h2>
    </div>
  </div> -->
  

    <!-- Content Header (Page header) -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row"> <!-- awal baris row -->
      <!-- <div class="col-md-1"></div> -->
      <div class="col-md-9 articles" id="site-content"> <!-- awal baris colom -->
        <div class="box-content">
          <div class="box-header with-border1">
           <h3 class="box-title">
            <span><b>Lowongan Kerja</b></span></h3>
          </div>
          <div class="box-body">
            <?php
            include 'inc/koneksi.php';
            $page = (isset($_GET['page']))? $_GET['page'] : 1;
            $limit = 5;
            $limit_start = ($page - 1) * $limit;
            $sql = mysqli_query($koneksi, "SELECT * FROM data_loker ORDER BY tanggal DESC LIMIT ".$limit_start.",".$limit);
            $no = $limit_start + 1;
            while ($data = mysqli_fetch_array($sql)) {
              ?>
              <article class="posts">
                <div class="tum">
                </div>
                <div class="item-detail">
                  <a href="detail-lowongan-kerja?id=<?php echo $data['id_loker']; ?>" style="color:#E77104;">
                    <h4 class="box-title" style="font-size: 16px;"><b><?php echo $data['judul']?></b></h4></a>
                    <div class="detail">
                      <?php echo $data= substr($data['isi'],0,100);?>
                      selengkapnya...
                      <p style=" border-bottom: 1px dashed #DDD; padding-bottom: 10px; margin-bottom: 2px;">
                      </div>
                    </div>
                  </article>
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
                  $link_prev1 = ($page > 1)? $page - 1 : 1;
                  ?>
                  <li><a href="lowongan-kerja.php?page=1">First</a></li>
                  <li><a href="lowongan-kerja.php?page=<?php echo $link_prev1; ?>">&laquo;</a></li>
                  <?php 
                }?>
                <?php 
                $sql2 = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM data_loker");
                $get_jumlah = mysqli_fetch_array($sql2);

                $jumlah_page1 = ceil($get_jumlah['jumlah'] / $limit);
                $jumlah_number = 3;
                $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
                $end_number = ($page < ($jumlah_page1 - $jumlah_number))? $page + $jumlah_number : $jumlah_page1;

                for($i = $start_number; $i <= $end_number; $i++){
                  $link_active = ($page == $i)? ' class="active"' : '';
                  ?>
                  <li<?php echo $link_active; ?>><a href="lowongan-kerja.php?page=<?php echo $i; ?>" style="background-color: #444444;border-color: #444444;"><?php echo $i; ?></a></li>
                <?php } ?>

                <?php
                if ($page == $jumlah_page1) {
                  ?>
                  <li class="disabled"><a href="#">&raquo;</a></li>
                  <li class="disabled"><a href="#">Last</a></li>
                  <?php
                }else{
                  $link_next1 = ($page < $jumlah_page1)? $page + 1 : $jumlah_page1;
                  ?>
                  <li><a href="lowongan-kerja.php?page=<?php echo $link_next1; ?>">&raquo;</a></li>
                  <li><a href="lowongan-kerja.php?page=<?php echo $jumlah_page1; ?>">Last</a></li>
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