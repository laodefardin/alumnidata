<div class="col-md-3 sidebar" id="site-sidebar">  
  <div class="box-sidebar">
    <div class="box-header with-border2">
      <h3 class="box-title-sidebar">
        <span><a href="lowongan-kerja" style="color: #fff;"> Lowongan Kerja Terbaru</a></span></h3>
      </div>
      <div class="box-body">
        <?php
        include 'inc/koneksi.php';
        $page1 = (isset($_GET['page1']))? $_GET['page1'] : 1;
        $limit = 5;
        $limit_start = ($page1 - 1) * $limit;
        $sql = mysqli_query($koneksi, "SELECT * FROM data_loker ORDER BY tanggal LIMIT ".$limit_start.",".$limit);
        $no = $limit_start + 1;
        while ($data = mysqli_fetch_array($sql)) {
          ?>
          <article class="posts">
            <div class="tum">
            </div>
            <div class="item-detail">
              <a href="detail-lowongan-kerja?id=<?php echo $data['id_loker']; ?>" style="color:#ffffff;">
                <h4 class="box-title" style="font-size: 14px;"><?php echo $data['judul']?></h4></a>
                <div class="detail">
                  <p style=" border-bottom: 1px dashed #DDD; padding-bottom: 10px; margin-bottom: 2px;">
                  </div>
                </div>
              </article>
              <?php 
              $no++;
            } ?>
                <ul class="pagination pagination-sm">
                 <?php 
                 if($page1 == 1){
                   ?>
                   <li class="disabled"><a href="#">First</a></li>
                   <li class="disabled"><a href="#">&laquo;</a></li>
                   <?php
                 }else{
                  $link_prev1 = ($page1 > 1)? $page1 - 1 : 1;
                  ?>
                  <li><a href="lowongan-kerja.php?page1=1">First</a></li>
                  <li><a href="lowongan-kerja.php?page1=<?php echo $link_prev1; ?>">&laquo;</a></li>
                  <?php 
                }?>
                <?php 
                $sql2 = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM data_loker");
                $get_jumlah = mysqli_fetch_array($sql2);

                $jumlah_page1 = ceil($get_jumlah['jumlah'] / $limit);
                $jumlah_number = 3;
                $start_number = ($page1 > $jumlah_number)? $page1 - $jumlah_number : 1;
                $end_number = ($page1 < ($jumlah_page1 - $jumlah_number))? $page1 + $jumlah_number : $jumlah_page1;

                for($i = $start_number; $i <= $end_number; $i++){
                  $link_active = ($page1 == $i)? ' class="active"' : '';
                  ?>
                  <li<?php echo $link_active; ?>><a href="lowongan-kerja.php?page1=<?php echo $i; ?>" style="background-color: #294a70;border-color: #294a70;"><?php echo $i; ?></a></li>
                <?php } ?>

                <?php
                if ($page1 == $jumlah_page1) {
                  ?>
                  <li class="disabled"><a href="#">&raquo;</a></li>
                  <li class="disabled"><a href="#">Last</a></li>
                  <?php
                }else{
                  $link_next1 = ($page1 < $jumlah_page1)? $page1 + 1 : $jumlah_page1;
                  ?>
                  <li><a href="lowongan-kerja.php?page1=<?php echo $link_next1; ?>">&raquo;</a></li>
                  <li><a href="lowongan-kerja.php?page1=<?php echo $jumlah_page1; ?>">Last</a></li>
                  <?php
                }?>
              </ul>
      </div>
    </div> <!-- /.box-body -->


  </div>