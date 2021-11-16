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
       <option selected="selected" disabled="disabled"> Pilih Program Studi</option>
									<option value="Pendidikan Matematika (S2)">Pendidikan Matematika (S2)</option>
									<option value="Pendidikan Ekonomi (S3)">Pendidikan Ekonomi (S3)</option>
									<option value="PKLH (S3)">PKLH (S3)</option>
									<option value="Ilmu Sosiologi (S3)">Ilmu Sosiologi (S3)</option>
									<option value="Ilmu Administrasi Publik (S3)">Ilmu Administrasi Publik (S3)</option>
									<option value="PKLH (S2)">PKLH (S2)</option>
									<option value="Pendidikan Ilmu Pengetahuan Sosial (S2)">Pendidikan Ilmu Pengetahuan Sosial (S2)</option>
									<option value="Pendidikan Bahasa (S2)">Pendidikan Bahasa (S2)</option>
									<option value="Ilmu Pendidikan (S3)">Ilmu Pendidikan (S3)</option>
									<option value="Ilmu Pendidikan Bahasa (S3)">Ilmu Pendidikan Bahasa (S3)</option>
									<option value="Pendidikan Kimia (S2)">Pendidkan Kimia (S2)</option>
									<option value="Pendidikan Biologi (S2)">Pendidikan Biologi (S2)</option>
									<option value="Bimbingan dan Konseling (S2)">Bimbingan dan Konseling (S2)</option>
									<option value="Pendidikan Seni Rupa (S2)">Pendidikan Seni Rupa (S2)</option>
									<option value="Pendidikan Bahasa Inggris (S3)">Pendidikan Bahasa Inggris (S3)</option>
									<option value="Pendidikan Fisika (S2)">Pendidikan Fisika (S2)</option>
									<option value="Pendidikan Jasmani Dan Olahraga (S2)">Pendidikan Jasmani Dan Olahraga (S2)</option>
									<option value="Penelitian Dan Evaluasi Pendidikan (S2)">Penelitian Dan Evaluasi Pendidikan (S2)</option>
									<option value="Pendidikan Teknologi dan Kejuruan (S2)">Pendidikan Teknologi dan Kejuruan (S2)</option>
									<option value="Pendidikan Bahasa Jerman (S2)">Pendidikan Bahasa Jerman (S2)</option>
									<option value="Ilmu Administrasi Publik (S2)">Ilmu Administrasi Publik (S2)</option>
									<option value="Pendidikan Geografi (S2)">Pendidikan Geografi (S2)</option>
									<option value="Teknologi Pendidikan (S2)">Teknologi Pendidikan (S2)</option>
									<option value="Pendidikan Bahasa Inggris (S2)">Pendidikan Bahasa Inggris (S2)</option>
									<option value="Matematika (S2)">Matematika (S2)</option>
									<option value="Fisika (S2)">Fisika (S2)</option>
									<option value="Pendidikan Matematika (S3)">Pendidikan Matematika (S3)</option>
									<option value="Pendidikan Vokasi Keteknikan (S3)">Pendidikan Vokasi Keteknikan (S3)</option>
									<option value="Administrasi Pendidikan (S3)">Administrasi Pendidikan (S3)</option>
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
									<option value="Pendidikan Matematika (S2)">Pendidikan Matematika (S2)</option>
									<option value="Pendidikan Ekonomi (S3)">Pendidikan Ekonomi (S3)</option>
									<option value="PKLH (S3)">PKLH (S3)</option>
									<option value="Ilmu Sosiologi (S3)">Ilmu Sosiologi (S3)</option>
									<option value="Ilmu Administrasi Publik (S3)">Ilmu Administrasi Publik (S3)</option>
									<option value="PKLH (S2)">PKLH (S2)</option>
									<option value="Pendidikan Ilmu Pengetahuan Sosial (S2)">Pendidikan Ilmu Pengetahuan Sosial (S2)</option>
									<option value="Pendidikan Bahasa (S2)">Pendidikan Bahasa (S2)</option>
									<option value="Ilmu Pendidikan (S3)">Ilmu Pendidikan (S3)</option>
									<option value="Ilmu Pendidikan Bahasa (S3)">Ilmu Pendidikan Bahasa (S3)</option>
									<option value="Pendidikan Kimia (S2)">Pendidkan Kimia (S2)</option>
									<option value="Pendidikan Biologi (S2)">Pendidikan Biologi (S2)</option>
									<option value="Bimbingan dan Konseling (S2)">Bimbingan dan Konseling (S2)</option>
									<option value="Pendidikan Seni Rupa (S2)">Pendidikan Seni Rupa (S2)</option>
									<option value="Pendidikan Bahasa Inggris (S3)">Pendidikan Bahasa Inggris (S3)</option>
									<option value="Pendidikan Fisika (S2)">Pendidikan Fisika (S2)</option>
									<option value="Pendidikan Jasmani Dan Olahraga (S2)">Pendidikan Jasmani Dan Olahraga (S2)</option>
									<option value="Penelitian Dan Evaluasi Pendidikan (S2)">Penelitian Dan Evaluasi Pendidikan (S2)</option>
									<option value="Pendidikan Teknologi dan Kejuruan (S2)">Pendidikan Teknologi dan Kejuruan (S2)</option>
									<option value="Pendidikan Bahasa Jerman (S2)">Pendidikan Bahasa Jerman (S2)</option>
									<option value="Ilmu Administrasi Publik (S2)">Ilmu Administrasi Publik (S2)</option>
									<option value="Pendidikan Geografi (S2)">Pendidikan Geografi (S2)</option>
									<option value="Teknologi Pendidikan (S2)">Teknologi Pendidikan (S2)</option>
									<option value="Pendidikan Bahasa Inggris (S2)">Pendidikan Bahasa Inggris (S2)</option>
									<option value="Matematika (S2)">Matematika (S2)</option>
									<option value="Fisika (S2)">Fisika (S2)</option>
									<option value="Pendidikan Matematika (S3)">Pendidikan Matematika (S3)</option>
									<option value="Pendidikan Vokasi Keteknikan (S3)">Pendidikan Vokasi Keteknikan (S3)</option>
									<option value="Administrasi Pendidikan (S3)">Administrasi Pendidikan (S3)</option>
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
									<option value="Pendidikan Matematika (S2)">Pendidikan Matematika (S2)</option>
									<option value="Pendidikan Ekonomi (S3)">Pendidikan Ekonomi (S3)</option>
									<option value="PKLH (S3)">PKLH (S3)</option>
									<option value="Ilmu Sosiologi (S3)">Ilmu Sosiologi (S3)</option>
									<option value="Ilmu Administrasi Publik (S3)">Ilmu Administrasi Publik (S3)</option>
									<option value="PKLH (S2)">PKLH (S2)</option>
									<option value="Pendidikan Ilmu Pengetahuan Sosial (S2)">Pendidikan Ilmu Pengetahuan Sosial (S2)</option>
									<option value="Pendidikan Bahasa (S2)">Pendidikan Bahasa (S2)</option>
									<option value="Ilmu Pendidikan (S3)">Ilmu Pendidikan (S3)</option>
									<option value="Ilmu Pendidikan Bahasa (S3)">Ilmu Pendidikan Bahasa (S3)</option>
									<option value="Pendidikan Kimia (S2)">Pendidkan Kimia (S2)</option>
									<option value="Pendidikan Biologi (S2)">Pendidikan Biologi (S2)</option>
									<option value="Bimbingan dan Konseling (S2)">Bimbingan dan Konseling (S2)</option>
									<option value="Pendidikan Seni Rupa (S2)">Pendidikan Seni Rupa (S2)</option>
									<option value="Pendidikan Bahasa Inggris (S3)">Pendidikan Bahasa Inggris (S3)</option>
									<option value="Pendidikan Fisika (S2)">Pendidikan Fisika (S2)</option>
									<option value="Pendidikan Jasmani Dan Olahraga (S2)">Pendidikan Jasmani Dan Olahraga (S2)</option>
									<option value="Penelitian Dan Evaluasi Pendidikan (S2)">Penelitian Dan Evaluasi Pendidikan (S2)</option>
									<option value="Pendidikan Teknologi dan Kejuruan (S2)">Pendidikan Teknologi dan Kejuruan (S2)</option>
									<option value="Pendidikan Bahasa Jerman (S2)">Pendidikan Bahasa Jerman (S2)</option>
									<option value="Ilmu Administrasi Publik (S2)">Ilmu Administrasi Publik (S2)</option>
									<option value="Pendidikan Geografi (S2)">Pendidikan Geografi (S2)</option>
									<option value="Teknologi Pendidikan (S2)">Teknologi Pendidikan (S2)</option>
									<option value="Pendidikan Bahasa Inggris (S2)">Pendidikan Bahasa Inggris (S2)</option>
									<option value="Matematika (S2)">Matematika (S2)</option>
									<option value="Fisika (S2)">Fisika (S2)</option>
									<option value="Pendidikan Matematika (S3)">Pendidikan Matematika (S3)</option>
									<option value="Pendidikan Vokasi Keteknikan (S3)">Pendidikan Vokasi Keteknikan (S3)</option>
									<option value="Administrasi Pendidikan (S3)">Administrasi Pendidikan (S3)</option>
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
<option selected="selected" disabled="disabled"> Pilih Program Studi</option>
									<option value="Pendidikan Matematika (S2)">Pendidikan Matematika (S2)</option>
									<option value="Pendidikan Ekonomi (S3)">Pendidikan Ekonomi (S3)</option>
									<option value="PKLH (S3)">PKLH (S3)</option>
									<option value="Ilmu Sosiologi (S3)">Ilmu Sosiologi (S3)</option>
									<option value="Ilmu Administrasi Publik (S3)">Ilmu Administrasi Publik (S3)</option>
									<option value="PKLH (S2)">PKLH (S2)</option>
									<option value="Pendidikan Ilmu Pengetahuan Sosial (S2)">Pendidikan Ilmu Pengetahuan Sosial (S2)</option>
									<option value="Pendidikan Bahasa (S2)">Pendidikan Bahasa (S2)</option>
									<option value="Ilmu Pendidikan (S3)">Ilmu Pendidikan (S3)</option>
									<option value="Ilmu Pendidikan Bahasa (S3)">Ilmu Pendidikan Bahasa (S3)</option>
									<option value="Pendidikan Kimia (S2)">Pendidkan Kimia (S2)</option>
									<option value="Pendidikan Biologi (S2)">Pendidikan Biologi (S2)</option>
									<option value="Bimbingan dan Konseling (S2)">Bimbingan dan Konseling (S2)</option>
									<option value="Pendidikan Seni Rupa (S2)">Pendidikan Seni Rupa (S2)</option>
									<option value="Pendidikan Bahasa Inggris (S3)">Pendidikan Bahasa Inggris (S3)</option>
									<option value="Pendidikan Fisika (S2)">Pendidikan Fisika (S2)</option>
									<option value="Pendidikan Jasmani Dan Olahraga (S2)">Pendidikan Jasmani Dan Olahraga (S2)</option>
									<option value="Penelitian Dan Evaluasi Pendidikan (S2)">Penelitian Dan Evaluasi Pendidikan (S2)</option>
									<option value="Pendidikan Teknologi dan Kejuruan (S2)">Pendidikan Teknologi dan Kejuruan (S2)</option>
									<option value="Pendidikan Bahasa Jerman (S2)">Pendidikan Bahasa Jerman (S2)</option>
									<option value="Ilmu Administrasi Publik (S2)">Ilmu Administrasi Publik (S2)</option>
									<option value="Pendidikan Geografi (S2)">Pendidikan Geografi (S2)</option>
									<option value="Teknologi Pendidikan (S2)">Teknologi Pendidikan (S2)</option>
									<option value="Pendidikan Bahasa Inggris (S2)">Pendidikan Bahasa Inggris (S2)</option>
									<option value="Matematika (S2)">Matematika (S2)</option>
									<option value="Fisika (S2)">Fisika (S2)</option>
									<option value="Pendidikan Matematika (S3)">Pendidikan Matematika (S3)</option>
									<option value="Pendidikan Vokasi Keteknikan (S3)">Pendidikan Vokasi Keteknikan (S3)</option>
									<option value="Administrasi Pendidikan (S3)">Administrasi Pendidikan (S3)</option>
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