<?php 
include '../inc/koneksi.php';
include 'global_header.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
   
      
    
    <div style="padding: 20px 30px; background: rgb(60 141 188); z-index: 999999; font-size: 16px; font-weight: 600;"><a href="#" style="color: rgba(255, 255, 255, 0.9); display: inline-block; margin-right: 10px; text-decoration: none;">Selamat Datang <?=$_SESSION['nm_lengkap']?> Di Sistem Informasi Alumni Pascasarjana UNM</a></div>
  </section>


  <!-- Main content -->
  <section class="content">
      <!-- Small boxes (Stat box) -->
  <div class="row">
   <div class='col-md-6'>
    <div class="box box-warning">
      <div class="box-header with-border">
        <h3 class="box-title">Grafik Lulusan Setiap Angkatan</h3>
      </div>
      <div class="box-body">
       <div id="container" style="min-width: 200px; height: auto; margin: 0 auto">
         <canvas id="myChart" width="400" height="200"></canvas>


       </div>
     </div>
   </div>
 </div>

 <div class='col-md-6'>
  <div class="box box-warning">
    <div class="box-header with-border">
      <h3 class="box-title">Rata-rata penghasilan alumni</h3>
    </div>
    <div class="box-body">
      <?php
      $total = $koneksi->query("SELECT count(*) total_mhs from alumni_profil");
      $ttl2   = $total->fetch_assoc()['total_mhs']; 

      $rata2 = $koneksi->query("SELECT gaji,COUNT(gaji) as rata2 FROM `alumni_profil` GROUP by gaji");
      $jml2 = $rata2->num_rows;
      $persentase_gaji ='';
      $gaji = '';
      $no1 = 1;
      foreach($rata2 as $r){
        $persentase_gaji .=number_format(($r['rata2']/$ttl2)*360,1).',';
        if($r['gaji']==''){
          $gaji .= 'Belum Berpenghasilan '.number_format(($r['rata2']/$ttl2)*360,1).'%';
        }else{
          $gaji .= $r['gaji'].' '.number_format(($r['rata2']/$ttl2)*360,1).'%';
        }
        if($no1 < $jml2){
          $gaji.=',';
        }
        $no1++;
      }
      ?>
      <div id="container" style="min-width: 200px; height: auto;margin: 0 auto">
        <canvas id="myChart3" width="400" height="200"></canvas>
        
        
      </div>
    </div>
  </div>

</div>
</div>
<div class="box box-warning">
      <div class="box-header">
        <div class="box-title"><h4>Data Lulusan Setiap Angkatan</h4></div>
      </div>
      <div class="box-body">
        <table class="table table-bordered table-striped">
          <thead class="bg-green">
            <th width="5%">No</th>
            <th width="20%">Angkatan</th>
            <th>Jml Lulusan</th>
            <th>Jml Lulusan Pria</th>
            <th>Jml Lulusan Wanita</th>
          </thead>
          <?php
          $sql = $koneksi->query("SELECT th_keluar, count(th_keluar) AS jumlah FROM alumni_profil GROUP BY th_keluar ORDER BY th_keluar Desc");
          // $jumlah = mysqli_num_rows($data);
          $arr_thn = '';
          $arr_data ='';
          $no=0; foreach ($sql as $data): 
          $no++;
          $arr_thn .= $data['th_keluar'].',';
          $arr_data.= $data['jumlah'].',';
          
          ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $thn = $data['th_keluar']; ?></td>
            <td><?php echo $data['jumlah']; ?></td>
            <td><?php $lk = $koneksi->query("select count(jk) as jml_laki from alumni_profil where th_keluar = '$thn' and jk='Laki-Laki' ");  echo $lk->fetch_assoc()['jml_laki'];?></td>
            <td><?php $p = $koneksi->query("select count(jk) as jml_p from alumni_profil where th_keluar = '$thn' and jk='Perempuan' ");  echo $p->fetch_assoc()['jml_p'];?></td>

          </tr>
        <?php endforeach;
        ?>
      </table>
    </div>
  </div>
<!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'global_footer.php'; ?>
<script src='../assets/js/Chart.bundle.js'></script>

<script type="text/javascript">
  var ctx = document.getElementById("myChart");
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: [<?=$arr_thn?>],
      datasets: [{
        label: 'Jumlah alumni tiap tahun',
        data: [<?=$arr_data?>],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });


  var ctx = document.getElementById("myChart3");
  var data1 = '<?=$gaji?>';
  var myChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: data1.split(','),
      datasets: [{
        label: '',
        data: [<?=$persentase_gaji?>],
        backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
        ],
        borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
        ],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero:true
          }
        }]
      }
    }
  });
</script>