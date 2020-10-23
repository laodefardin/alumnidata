<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage Slide Gambar
      <small>Pengaturan Slide gambar</small>
    </h1>
    <P></P>
    <div class="callout callout-warning" style="margin-bottom: 0!important;">
      <h4><i class="fa fa-warning"></i> Catatan:</h4>
      Pastikan Ukuran gambar slide yang ingin diupload berukuran Width=10,16cm dan Height=3,18cm
    </div>

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
        <div class="box-title"><h4>Manage Slide</h4></div>
        <br>
        <button type="submit" name="submit" class="btn btn-success" onclick="window.location='manage-slide'">Tambah</button>
      </div>

      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>

            <th width="5%">Gambar</th>
            <th width="15%">Aksi</th>
          </thead>
          <?php
          $query = "SELECT * FROM data_slide";
          $sql = mysqli_query($koneksi, $query);
          while ($data = mysqli_fetch_array($sql)) {
            ?>
            <tr>
              <td><img src="../slide/<?php echo $data['gambar'];?>" width="300" height="100"></td>
              <td><a href="manage-slidehapus.php?id=<?php echo $data['id_slide'];?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data Ini');" class="btn btn-danger btn-sm"">Hapus</a></td>
            </tr>
          <?php } ?>
        </table>
      </div>
    </div>


  </div> <!-- content-wrapper -->
</section> <!-- content -->


<?php
include 'global_footer.php';
?>