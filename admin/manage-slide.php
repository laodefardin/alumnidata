<?php
include '../inc/koneksi.php';
include 'global_header.php';

?>
<div class="content-wrapper" style="min-height: 901px;">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tambah Slide
      <small>Pengaturan Slide</small>
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
        <div class="box-title">
          <h4>Manage Slide</h4>
        </div>
      </div>

      <div class="box-body">
        <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
          <table id="example1" class="table table-bordered table-striped">
            <tbody>

              <tr>
                <td><label>Gambar Slide</label></td>
                <td><input class="form-control" type="file" name="foto" id="foto"> &nbsp; &nbsp;JPEG/JPG</td>
              </tr>
              <tr>
                 <td><label>Aktif Slide</label></td>
                <td>
                  <select name="aktif" id="aktif" class="form-control">
                    <option>&lt;-Pilih Aktif-&gt;</option>
                    <option value="0">0 Gambar Akhir</option>
                    <option value="1">1 Gambar Awal</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td colspan="2">
                  <input class="btn btn-primary" id="submit" type="submit" name="add" value="Tambah">
                  <input class="btn btn-danger" id="reset" type="reset" value="Batal" onclick="self.history.back()">
                </td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </div>
</div> <!-- content-wrapper -->
</section> <!-- content -->
<?php
include 'global_footer.php';
?>

<?php
//after klik
if (isset($_POST['add'])){ 
  $aktif = $_POST['aktif'];
  $img = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
    // // Rename nama fotonya dengan menambahkan tanggal dan jam upload
  $nama_baru = date('dmYHis').$img;
    // // Set path folder tempat menyimpan fotonya
  $path = "../slide/".$nama_baru;
    // // Proses uploads
    if(move_uploaded_file($tmp, $path)){
      $query = 'INSERT INTO data_slide (gambar, active) values("'.$nama_baru.'","'.$aktif.'")';
      $sql = mysqli_query($koneksi,$query) or die(mysqli_error());
      // echo "<script>window.location='slidemanage';</script>";
      header("location:slidemanage");
    }
  }
    ?>