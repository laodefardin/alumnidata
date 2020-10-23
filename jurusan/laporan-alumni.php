<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Laporan Alumni
      <small>Cetak Laporan Alumni</small>
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
      <div class="box-body">
        <div class="row">
          <div class="col-xs-12">
           <h3>Cetak Laporan Berdasarkan Tahun Wisuda</h3>
         </div>
         <form class="form-horizontal" method="POST" target='_blank' action='laporan/laporan1'>
          <div class="col-md-3">
            <select type="text" name='tahun' id='tahun' class="form-control">
              <option selected="selected" disabled="disabled">Pilih Tahun Dahulu</option>
              <?php
              $sql = $koneksi->query("SELECT th_keluar, count(th_keluar) AS jumlah FROM alumni_profil GROUP BY th_keluar ORDER BY th_keluar DESC");
              $no=0; foreach ($sql as $data): $no++
              ?>
              <option value="<?php echo $data['th_keluar']; ?>"><?php echo $data['th_keluar']; ?></option>
            <?php endforeach;?>
          </select>
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-danger"><i class="fa fa-print"></i> Cetak PDF</button>
        </div>
      </form>
      <br>
      <form class="form-horizontal" method="POST" target='_blank' action='laporan/laporan4'>
        <div class="col-md-3">
          <select type="text" name='tahun' id='tahun' class="form-control">
            <option selected="selected" disabled="disabled">Pilih Tahun Dahulu</option>
            <?php
            $sql = $koneksi->query("SELECT th_keluar, count(th_keluar) AS jumlah FROM alumni_profil GROUP BY th_keluar ORDER BY th_keluar DESC");
          // $jumlah = mysqli_num_rows($data);
            $no=0; foreach ($sql as $data): $no++
            ?>
            <option value="<?php echo $data['th_keluar']; ?>"><?php echo $data['th_keluar']; ?></option>
          <?php endforeach;?>
        </select>
      </div>
      <div class="col-md-2">
        <button type="submit"  class="btn btn-success"><i class="fa fa-print"></i> Cetak Excel</button>
      </div>
    </form>

    <div class="col-xs-12">
     <h3>Cetak Laporan Berdasarkan Program Studi</h3>
   </div>
   <form class="form-horizontal" method="POST" target='_blank' action='laporan/laporan2'>
     <div class="col-md-3">
      <select type="text" name='program_studi' id='program_studi' class="form-control" >
        <option selected="selected" disabled="disabled" required>Pilih Program Studi</option>
        <option value="Pendidikan Teknik Elektro (S1)">Pendidikan Teknik Elektro (S1)</option>
        <option value="Teknik Elektro (D3)">Teknik Elektro (D3)</option>
        <option value="Pendidikan Teknik Informatika Dan Komputer (S1)">Pendidikan Teknik Informatika Dan Komputer (S1)</option>
      </select>
    </select>
  </div>
  <div class="col-md-2">
    <button type="submit" class="btn btn-danger"><i class="fa fa-print"></i> Cetak PDF</button>
  </div>
</form>
<br>
<form class="form-horizontal" method="POST" target='_blank' action='laporan/laporan5'>
 <div class="col-md-3">
  <select type="text" name='program_studi' id='program_studi' class="form-control" >
    <option selected="selected" disabled="disabled" required>Pilih Program Studi</option>
    <option value="Pendidikan Teknik Elektro (S1)">Pendidikan Teknik Elektro (S1)</option>
    <option value="Teknik Elektro (D3)">Teknik Elektro (D3)</option>
    <option value="Pendidikan Teknik Informatika Dan Komputer (S1)">Pendidikan Teknik Informatika Dan Komputer (S1)</option>
  </select>
</select>
</div>
<div class="col-md-2">
  <button type="submit" class="btn btn-success"><i class="fa fa-print"></i> Cetak Excel</button>
</div>
</form>


<div class="col-xs-12">
 <h3>Cetak Laporan Berdasarkan Tahun Wisuda Dan Program Studi</h3>
</div>
<form class="form-horizontal" method="POST" target='_blank' action='laporan/laporan3'>
 <div class="col-md-2">
  <select type="text" name='tahun' id='tahun' class="form-control">
    <option selected="selected" disabled="disabled">Pilih Tahun Dahulu</option>
    <?php
    $sql = $koneksi->query("SELECT th_keluar, count(th_keluar) AS jumlah FROM alumni_profil GROUP BY th_keluar ORDER BY th_keluar DESC");
          // $jumlah = mysqli_num_rows($data);
    $no=0; foreach ($sql as $data): $no++
    ?>
    <option value="<?php echo $data['th_keluar']; ?>"><?php echo $data['th_keluar']; ?></option>
  <?php endforeach;?>
</select>
</div>
<div class="col-md-2">
  <select type="text" name='program_studi' id='program_studi' class="form-control">
    <option selected="selected" disabled="disabled">Pilih Program Studi</option>
    <option value="Pendidikan Teknik Elektro (S1)">Pendidikan Teknik Elektro (S1)</option>
    <option value="Teknik Elektro (D3)">Teknik Elektro (D3)</option>
    <option value="Pendidikan Teknik Informatika Dan Komputer (S1)">Pendidikan Teknik Informatika Dan Komputer (S1)</option>
  </select>
</select>
</div>
<div class="col-md-2">
  <button type="submit" class="btn btn-danger"><i class="fa fa-print"></i> Cetak PDF</button>
</div>
</form>
<br>
<form class="form-horizontal" method="POST" target='_blank' action='laporan/laporan6'>
 <div class="col-md-2">
  <select type="text" name='tahun' id='tahun' class="form-control">
    <option selected="selected" disabled="disabled">Pilih Tahun Dahulu</option>
    <?php
    $sql = $koneksi->query("SELECT th_keluar, count(th_keluar) AS jumlah FROM alumni_profil GROUP BY th_keluar ORDER BY th_keluar DESC");
          // $jumlah = mysqli_num_rows($data);
    $no=0; foreach ($sql as $data): $no++
    ?>
    <option value="<?php echo $data['th_keluar']; ?>"><?php echo $data['th_keluar']; ?></option>
  <?php endforeach;?>
</select>
</div>
<div class="col-md-2">
  <select type="text" name='program_studi' id='program_studi' class="form-control">
    <option selected="selected" disabled="disabled">Pilih Program Studi</option>
    <option value="Pendidikan Teknik Elektro (S1)">Pendidikan Teknik Elektro (S1)</option>
    <option value="Teknik Elektro (D3)">Teknik Elektro (D3)</option>
    <option value="Pendidikan Teknik Informatika Dan Komputer (S1)">Pendidikan Teknik Informatika Dan Komputer (S1)</option>
  </select>
</select>
</div>
<div class="col-md-2">
  <button type="submit" class="btn btn-success"><i class="fa fa-print"></i> Cetak Excel</button>
</div>
</form>


    <div class="col-xs-12">
     <h3>Cetak Laporan Berdasarkan Alumni Yang Bekerja</h3>
   </div>
   <form class="form-horizontal" method="POST" target='_blank' action='laporan/laporan7'>
  <div class="col-md-2">
    <button type="submit" class="btn btn-danger"><i class="fa fa-print"></i> Cetak PDF</button>
  </div>
</form>
<br>
<form class="form-horizontal" method="POST" target='_blank' action='laporan/laporan8'>
<div class="col-md-2">
  <button type="submit" class="btn btn-success"><i class="fa fa-print"></i> Cetak Excel</button>
</div>
</form>

</div>


</div>
</div>


</div> <!-- content-wrapper -->
</section> <!-- content -->


<?php
include 'global_footer.php';
?>